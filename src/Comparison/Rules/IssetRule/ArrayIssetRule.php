<?php

namespace PhpZendo\Comparison\Rules\IssetRule;

class ArrayIssetRule extends IssetRule
{
    public function handle($inputs)
    {
        // when give an array to check isset, should always return true;
        $input = $this->getInput($inputs);
        
        return true;
    }
}
