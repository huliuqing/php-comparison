<?php

namespace PhpZendo\Comparison\Comparable;

use FlorianWolters\Component\Core\ComparableInterface;
use PhpZendo\Comparison\Comparable\ComparedResolver;

class Comparable implements ComparableInterface
{
    /**
     * expected compare value.
     *
     * @var mixed
     */
    private $value;

    /**
     * inject expected compare value.
     *
     * @param mixed $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * actual compare value
     *
     * @param ComparableInterface $actual
     * @return void
     */
    public function compareTo(ComparableInterface $actual)
    {
        return ($this->value > $actual->value)
            ? ComparedResolver::EXPECTED_GT_ACTUAL
            : ComparedResolver::EXPECTED_LT_ACTUAL;
    }
}