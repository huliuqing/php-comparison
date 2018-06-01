<?php

namespace PhpZendo\Comparison\Rules\IsNullRule;

class ArrayIsNullRule extends IsNullRule
{
    public function handle($inputs)
    {
        // when give an array to check null, should always return false;
        $input = $this->getInput($inputs);
        
        return false;
    }
}
