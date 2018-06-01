<?php

namespace PhpZendo\Comparison\Rules\IssetRule;

class NullIssetRule extends IssetRule
{
    public function handle($inputs)
    {
        $input = $this->getInput($inputs);

        // undefined, null, have default null value etc null value context
        // when check isset will return false
        return false;
    }  
}
