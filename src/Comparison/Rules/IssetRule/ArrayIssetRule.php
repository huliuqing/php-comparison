<?php

namespace PhpZendo\Comparison\Rules\IssetRule;

class ArrayIssetRule extends IssetRule
{
    /**
     * handle check $expected is set or not
     * 
     * @param mixed $expected
     * @return boolean
     */
    public function handle($expected)
    {
        // when give an array to check isset, should always return true.        
        return true;
    }
}
