<?php

namespace PhpZendo\Comparison\Rules\IssetRule;

class IntegerIssetRule extends IssetRule
{
    /**
     * handle check $expected is set or not
     * 
     * @param mixed $expected
     * @return boolean
     */
    public function handle($expected)
    {
        // all numeric value like 0, 1, 42, -1, '0', '1', '-1' etc, 
        // when check isset will return true.
        
        return true;
    }
}
