<?php

namespace PhpZendo\Comparison\Rules\IssetRule;

class NullIssetRule extends IssetRule
{
    /**
     * handle check $expected is set or not
     * 
     * @param mixed $expected
     * @return boolean
     */
    public function handle($expected)
    {
        // undefined, null, have default null value etc null value context,
        // when check isset will return false.
        return false;
    }  
}
