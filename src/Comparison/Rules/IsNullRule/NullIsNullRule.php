<?php

namespace PhpZendo\Comparison\Rules\IsNullRule;

class NullIsNullRule extends IsNullRule
{
    public function handle($inputs)
    {
        $input = $this->getInput($inputs);

        // undefined, null, have default null value etc null value context
        // when check null will return true
        return true;
    }  
}
