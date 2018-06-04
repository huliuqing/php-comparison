<?php

namespace PhpZendo\Comparison\Rules;

use SebastianBergmann\Comparator\Factory;
use PhpZendo\Comparison\Comparable\CompareServiceProvider;

abstract class CompareRule 
{
    /**
     * CompareServiceProvider instance
     *
     * @var CompareServiceProvider
     */
    private $comparable;

    /**
     * Compare call handle name.
     *
     * @var string
     */
    private $operator;

    public function __construct()
    {
        $this->comparable = CompareServiceProvider::getInstance();
    }

    /**
     * Set the comparison operator name.
     *
     * @param string $operator
     * @return self
     */
    public function setOperator($operator)
    {
        $this->operator  = $operator;

        return $this;
    }

    /**
     * Get the comparison operator name.
     *
     * @param string $operator
     * @return string
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Check has set comparison operator or not.
     *
     * @return boolean
     */
    public function hasOperator()
    {
        return !is_null($this->getOperator());
    }

    /**
     * compare $expected value is great than $actual.
     *
     * @param mixed $expected     First value to compare
     * @param mixed $actual       Second value to compare
     * @param bool  $ignoreCase   Case is ignored when set to true
     *
     * @return boolean
     */
    public function handle($expected, $actual)
    {
        if (!$this->comparable($actual)) {
            throw new \PhpZendo\Comparison\Exceptions\UncomparableException(sprintf("Can\'t compare %s with %s.", \gettype($actual), \gettype($expected)));
        }

        if (!$this->hasOperator()) {
            throw new \PhpZendo\Comparison\Exceptions\ComparisionException('Invalid comparison operator.');
        }

        return $this->comparable->{$this->getOperator()}($expected, $actual);
    }
    
    /**
     * check $actual can compare with $expected or not.
     *
     * @param mixed $actual
     * @return bool
     */
    protected function comparable($actual)
    {
        return true;
    }

    /**
     * call object like a function
     *
     * @return boolean
     */
    public function __invoke()
    {
        list($expected, $actual) = func_get_args();

        return $this->handle($expected, $actual);
    }
}
