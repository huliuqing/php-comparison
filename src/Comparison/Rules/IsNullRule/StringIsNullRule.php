<?php

namespace PhpZendo\Comparison\Rules\IsNullRule;

class StringIsNullRule extends IsNullRule
{
    public function handle($inputs)
    {
        $input = $this->getInput($inputs);

        // when check a string type is null or not will return false.
        return false;
    }    
}
