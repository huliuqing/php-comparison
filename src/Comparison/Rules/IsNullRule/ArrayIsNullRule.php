<?php

namespace PhpZendo\Comparison\Rules\IsnullRule;

class ArrayIsNullRule extends IsNullRule
{

    
    /**
     * handle check $expected is null or not.
     *
     * @param mixed $expected
     * @return boolean
     */
    public function handle($expected)
    {
        // when give an array to check null, should always return false.
        return false;
    }
}
