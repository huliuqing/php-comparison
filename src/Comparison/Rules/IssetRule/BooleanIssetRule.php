<?php

namespace PhpZendo\Comparison\Rules\IssetRule;

class BooleanIssetRule extends IssetRule
{
    public function handle($inputs)
    {
        // when give boolean type to check isset, should return true.
        $input = $this->getInput($inputs);
        
        return true;
    }
}
