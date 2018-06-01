<?php

namespace PhpZendo\Comparison\Rules\EmptyRule;

class BooleanEmptyRule extends EmptyRule
{
    public function handle($inputs)
    {
        $input = $this->getInput($inputs);
        
        // when check empty valiable $input is boolean type, 
        // and $input give a false value empty check will return true,else return false.
        return !$input;
    }
}
