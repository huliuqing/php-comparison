<?php

namespace PhpZendo\Comparison\Rules\IssetRule;

class IntegerIssetRule extends IssetRule
{
    public function handle($inputs)
    {
        // all numeric value 0, 1, 42, -1, '0', '1', '-1' etc, 
        // when check isset will return true
        $input = $this->getInput($inputs);
        
        return true;
    }
}
