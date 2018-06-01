<?php

namespace PhpZendo\Comparison\Rules\IssetRule;

class StringIssetRule extends IssetRule
{
    public function handle($inputs)
    {
        $input = $this->getInput($inputs);

        // when check a string type isset or not will return true.
        return true;
    }    
}
