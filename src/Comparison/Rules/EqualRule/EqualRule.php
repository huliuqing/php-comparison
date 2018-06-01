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
     * handle function
     *
     * @param [type] $inputs
     * @return void
     */
    public function handle($expected, $actual)
    {
        try {
            $this->comparator->getComparatorFor($expected, $actual)->assertEquals($expected, $actual);

            return true;
        } catch (\Exception $e) {
            
            return false;
        }
    }

    public function __invoke()
    {
        $inputs = func_get_args();

        return $this->handle($inputs[0], $inputs[1]);
    }
}
