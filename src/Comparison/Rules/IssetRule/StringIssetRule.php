<?php

namespace PhpZendo\Comparison\Rules\IssetRule;

class StringIssetRule extends IssetRule
{
    /**
     * handle check $expected is set or not
     * 
     * @param mixed $expected
     * @return boolean
     */
    public function handle($expected)
    {
        // when check a string type isset or not will return true.
        return true;
    }    
}
