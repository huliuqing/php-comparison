<?php

namespace PhpZendo\Comparison\Rules\EmptyRule;

class ArrayEmptyRule extends EmptyRule
{
    public function handle($inputs)
    {
        $input = $this->getInput($inputs);
        
        // when give variable $input is array type only [] while return true.
        return empty($input);
    }
}
