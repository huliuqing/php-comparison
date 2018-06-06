<?php

namespace PhpZendo\Comparison;

use PhpZendo\Comparison\RuleLocator as Locator;

class Compare
{
    private $ruleLocator;

    private static $instance;

    public function getInstance()
    {
        if (static::$instance === null) {
            static::$instance = new self;
        }

        return static::$instance;
    }

    public function __construct()
    {
        $this->ruleLocator = new Locator();
    }

    /**
     * check $expected is empty or not.
     *
     * @param mixed $expected
     * @return boolean
     */
    public function empty($expected)
    {
        $handle = $this->ruleLocator->find($expected);

        return $handle($expected);
    }

    /**
     * check $expected is not empty.
     *
     * @param mixed $expected
     * @return boolean
     */
    public function isNotEmpty($expected)
    {
        return !$this->empty($expected);
    }

    /**
     * check $expected is null or not.
     *
     * @param mixed $expected
     * @return boolean
     */
    public function isNull($expected)
    {
        $handle = $this->ruleLocator->find($expected);

        return $handle($expected);
    }

    /**
     * check $expected is null or not.
     *
     * @param mixed $expected
     * @return boolean
     */
    public function isNotNull($expected)
    {
        return !$this->isNull($expected);
    }

    /**
     * check $expected is set or not.
     *
     * @param mixed $expected
     * @return boolean
     */
    public function isset($expected)
    {
        $handle = $this->ruleLocator->find($expected);

        return $handle($expected);
    }

    /**
     * compare two values are equal.
     *
     * @param mixed $expected     First value to compare
     * @param mixed $actual       Second value to compare
     * @param bool  $ignoreCase   Case is ignored when set to true
     *
     * @return boolean
     */
    public function equal($expected, $actual, $ignoreCase = true)
    {
        $handle = $this->ruleLocator->find($expected);

        return $handle($expected, $actual, $ignoreCase);
    }

    /**
     * compare two values are equal.
     *
     * @alias for equal
     * @param mixed $expected     First value to compare
     * @param mixed $actual       Second value to compare
     * @param bool  $ignoreCase   Case is ignored when set to true
     *
     * @return boolean
     */
    public function eq($expected, $actual, $ignoreCase = true)
    {
        return $this->equal($expected, $actual, $ignoreCase);
    }

    /**
     * compare two values are equal not ignore case sensitive.
     *
     * @param mixed $expected     First value to compare
     * @param mixed $actual       Second value to compare
     *
     * @return boolean
     */
    public function equalStrict($expected, $actual)
    {
        if (\gettype($expected) !== \gettype($actual)) {
            return false;
        }

        return $this->equal($expected, $actual, $ignoreCase = false);
    }

    /**
     * compare two values are not equal.
     *
     * @param mixed $expected     First value to compare
     * @param mixed $actual       Second value to compare
     * @param bool  $ignoreCase   Case is ignored when set to true
     *
     * @return boolean
     */
    public function notEqual($expected, $actual, $ignoreCase = true)
    {
        return !$this->equal($expected, $actual, $ignoreCase);
    }
    
    /**
     * compare two values are not equal.
     *
     * @alias for notEqual
     * @param mixed $expected     First value to compare
     * @param mixed $actual       Second value to compare
     * @param bool  $ignoreCase   Case is ignored when set to true
     *
     * @return boolean
     */
    public function neq($expected, $actual, $ignoreCase = true)
    {
        return !$this->equal($expected, $actual, $ignoreCase);
    }

    /**
     * Compare $expected value is great than $actual value.
     *
     * @param mixed|null $expected
     * @param mixed|null $actual
     * @return boolean
     */
    public function gt($expected, $actual)
    {
        $handle = $this->ruleLocator->find($expected);

        return $handle($expected, $actual);
    }

    /**
     * Compare $expected value is less than $actual value.
     *
     * @param mixed|null $expected
     * @param mixed|null $actual
     * @return boolean
     */
    public function lt($expected, $actual)
    {
        $handle = $this->ruleLocator->find($expected);

        return $handle($expected, $actual);
    }

    /**
     * Compare $expected value is great than or equal $actual value.
     *
     * @param mixed|null $expected
     * @param mixed|null $actual
     * @return boolean
     */
    public function gte($expected, $actual)
    {
        return $this->gt($expected, $actual) || $this->equal($expected, $actual);
    }

    /**
     * Compare $expected value is less than or equal $actual value.
     *
     * @param mixed|null $expected
     * @param mixed|null $actual
     * @return boolean
     */
    public function lte($expected, $actual)
    {
        return $this->lt($expected, $actual) || $this->equal($expected, $actual);
    }
}
