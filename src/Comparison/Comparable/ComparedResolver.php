<?php

namespace PhpZendo\Comparison\Comparable;

use FlorianWolters\Component\Core\ComparableInterface;

class ComparedResolver
{
    const EXPECTED_EQUAL_ACTUAL = 0;
    const EXPECTED_GT_ACTUAL = 1;
    const EXPECTED_LT_ACTUAL = -1;
    
    public function isGt($compared)
    {
        return $compared === self::EXPECTED_GT_ACTUAL;
    }

    public function isLt($compared)
    {
        return $compared == self::EXPECTED_LT_ACTUAL;
    }

    public function isEqual($compared)
    {
        return $compared == self::EXPECTED_EQUAL_ACTUAL;
    }

    public function isGte($compared)
    {
        return $this->isGt($compared) || $this->isEqual($compared);
    }

    public function isLte($compared)
    {
        return $this->isGt($compared) || $this->isEqual($compared);
    }
}
