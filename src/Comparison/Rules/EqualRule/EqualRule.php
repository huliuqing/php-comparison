<?php

namespace PhpZendo\Comparison\Rules\EqualRule;

use SebastianBergmann\Comparator\Factory;

abstract class EqualRule 
{
    private $comparator;

    public function __construct()
    {
        $this->comparator = new Factory();
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
    public function handle($expected, $actual, $ignoreCase = false)
    {
        try {
            $this->comparator->getComparatorFor($expected, $actual)->assertEquals($expected, $actual, $delta = 0.0, $canonicalize = false, $ignoreCase);

            return true;
        } catch (\Exception $e) {
            
            return false;
        }
    }
    
    /**
     * call object like a function
     *
     * @return boolean
     */
    public function __invoke()
    {
        list($expected, $actual, $ignoreCase) = func_get_args();
        return $this->handle($expected, $actual, $ignoreCase);
    }
}
