<?php

namespace PhpZendo\Comparison;

use PhpZendo\Comparison\RuleLocator as Locator;

class Compare
{    
    private $namespace = '\\Comparison';
    
    private $prefix;

    private $ruleLocator;

    private static $instance;

    public function getInstance()
    {
        if(static::$instance === null) {
            static::$instance = new self;
        }

        return static::$instance;
    }

    public function __construct() 
    {
        $this->ruleLocator = new Locator();
    }

    public function empty($input)
    {
        $handle = $this->ruleLocator->find($input);

        return $handle($input);
    }

    public function isNotEmpty($input)
    {
        return !$this->empty($input);
    }

    public function isNull($input)
    {
        $handle = $this->ruleLocator->find($input);

        return $handle($input);
    }

    public function isNotNull($input)
    {
        return !$this->isNull($input);
    }

    public function isset($input)
    {
        $handle = $this->ruleLocator->find($input);

        return $handle($input);
    }

    public function equal($excepted, $actual)
    {
        $handle = $this->ruleLocator->find($excepted);

        return $handle($excepted, $actual);
    }

    public function eq($excepted, $actual)
    {
        return $this->equal($excepted, $actual);
    }

    public function notEqual($excepted, $actual)
    {
        return !$this->equal($excepted, $actual);
    }

    public function neq($excepted, $actual)
    {
        return !$this->equal($excepted, $actual);
    }

    public function gt()
    {

    }

    public function lt()
    {

    }

    public function gte()
    {

    }

    public function lte()
    {

    }
}
