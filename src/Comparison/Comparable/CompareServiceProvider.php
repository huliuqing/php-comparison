<?php

namespace PhpZendo\Comparison\Comparable;

use FlorianWolters\Component\Core\ComparableUtils;
use PhpZendo\Comparison\Comparable\Comparable;
use PhpZendo\Comparison\Comparable\ComparedResovler;

class CompareServiceProvider
{
    private static $instance;

    private $comparedResolver;

    /**
     * inject expected compare value.
     *
     * @param mixed $value
     */
    protected function __construct()
    {
        $this->comparedResolver = new ComparedResolver();
    }

    public static function getInstance()
    {
        if (static::$instance === null) {
            static::$instance = new self;
        }

        return static::$instance;
    }

    /**
     * wrap given value to comparable object.
     *
     * @param mixed|null $comparable
     * @return void
     */
    public function wrap($comparable)
    {
        return new Comparable($comparable);
    }

    /**
     * Compare two values.
     *
     * @param mixed|null $expected
     * @param mixed|null $actual
     * @return boolean
     */
    public function compare($expected, $actual)
    {
        $expected = $this->wrap($expected);
        $actual = $this->wrap($actual);

        return ComparableUtils::compare($expected, $actual);
    }

    /**
     * Compare $expected value is great than $actual value.
     *
     * @param mixed|null $expected
     * @param mixed|null $actual
     * @return boolean
     */
    public function lt($expected, $actual)
    {
        return $this->comparedResolver->isLt($this->compare($expected, $actual));
    }

    /**
     * Compare $expected value is great than or equal $actual value.
     *
     * @param mixed|null $expected
     * @param mixed|null $actual
     * @return boolean
     */
    public function lte($expected, $actual)
    {
        return $this->comparedResolver->isLte($this->compare($expected, $actual));
    }

    /**
     * Compare $expected value is less than $actual value.
     *
     * @param mixed|null $expected
     * @param mixed|null $actual
     * @return boolean
     */
    public function gt($expected, $actual)
    {
        return $this->comparedResolver->isGt($this->compare($expected, $actual));
    }

    /**
     * Compare $expected value is less than or equal $actual value.
     *
     * @param mixed|null $expected
     * @param mixed|null $actual
     * @return boolean
     */
    public function gte($expected, $actual)
    {
        return $this->comparedResolver->isGte($this->compare($expected, $actual));
    }
}
