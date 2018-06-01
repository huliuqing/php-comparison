<?php

namespace PhpZendo\Comparison\Rules\IsNullRule;

class BooleanIsNullRule extends IsNullRule
{
    public function handle($inputs)
    {
        // when give boolean type to check null, should return false.
        $input = $this->getInput($inputs);
        
        return false;
    }
}
