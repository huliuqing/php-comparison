<?php

namespace PhpZendo\Comparison\Rules\EmptyRule;

class IntegerEmptyRule extends EmptyRule
{
    public function handle($inputs)
    {
        // all numeric value 0, 1, 42, -1, '0', '1', '-1' etc, 
        // when check empty will return false
        return false;
    }
}
