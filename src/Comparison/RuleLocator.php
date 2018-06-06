<?php

namespace PhpZendo\Comparison;

use PhpZendo\Comparison\Conversions\TypeGetter;
use PhpZendo\Comparison\Conversions\TypeSetter;
use \strtoupper;
use \ucfirst;

class RuleLocator
{

    
    private $typeGetter;

    private $typeSetter;

    private $namespace = '\\PhpZendo\\Comparison';
    
    private $rules = [];

    private $ruleNamespaces = [];

    // public function __construct(TypeGetter $typeGetter, TypeSetter $typeSetter)
    public function __construct()
    {
        // $this->typeGetter = $typeGetter ?: new TypeGetter();
        // $this->typeSetter = $typeSetter ?: new TypeSetter();
 
        $this->typeGetter = new TypeGetter();
        $this->typeSetter = new TypeSetter();
    }

    public function find($input)
    {
        $type = $this->typeGetter->getType($input);

        $stack = debug_backtrace();
        $operation = ucfirst($stack[1]['function']);

        return $this->resolve($type, $operation);
    }

    public function getType($input)
    {
        return $this->typeGetter->getType($input);
    }

    public function setType($input, $type)
    {
        // [input , newType]
        return $this->typeGetter->setType($input, $type);
    }

    public function resolve($inputType, $operation)
    {
        $classname = $this->getClassname($inputType, $operation);

        if ($this->builded($classname)) {
            return $this->rules[$classname];
        }

        return  $this->rules[$classname] = new $classname();
    }

    /**
     * getClassname get rule full class name
     *
     * @param string $inputType
     * @param string $operation
     * @return string
     */
    private function getClassname($inputType, $operation)
    {
        // example: \PhpZendo\Comparison\Rule\Empty\StringEmptyRule
        $classname = $inputType . ucfirst($operation) . 'Rule';
        return $this->getRuleNamespace($operation, $inputType) . '\\' . $classname;
    }

    public function getRuleNamespace($operation, $inputType)
    {
        $rule = $inputType . $operation;

        if (isset($this->ruleNamespaces[$rule])) {
            return $this->ruleNamespaces[$rule];
        }

        // example: PhpZendo\Comparison\Rule\EmptyRule
        return $this->ruleNamespaces[$rule] = $this->namespace . '\\Rules\\' . ucfirst(strtolower($operation)) . 'Rule';
    }

    public function builded($rule)
    {
        return isset($this->rules[$rule]);
    }
}
