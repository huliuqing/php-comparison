<?php

namespace PhpZendo\Comparison\Rules\EmptyRule;

class NullEmptyRule extends EmptyRule
{
    /**
     * check $expected is empty or not.
     * 
     * @param mixed $expected
     * @return boolean
     */
    public function handle($expected)
    {
        // undefined, null, have default null value etc null value context,
        // when check empty will return true.
        return true;
    }  
}
