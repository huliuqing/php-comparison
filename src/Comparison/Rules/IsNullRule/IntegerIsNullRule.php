<?php

namespace PhpZendo\Comparison\Rules\IsNullRule;

class IntegerIsNullRule extends IsNullRule
{
    public function handle($inputs)
    {
        // all numeric value 0, 1, 42, -1, '0', '1', '-1' etc, 
        // when check null will return false
        $input = $this->getInput($inputs);
        
        return false;
    }
}
