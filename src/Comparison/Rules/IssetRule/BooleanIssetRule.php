<?php

namespace PhpZendo\Comparison\Rules\IssetRule;

class BooleanIssetRule extends IssetRule
{
    /**
     * handle check $expected is set or not
     * 
     * @param mixed $expected
     * @return boolean
     */
    public function handle($expected)
    {
        // when give boolean type to check isset, should return true.        
        return true;
    }
}
