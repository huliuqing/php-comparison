<?php

namespace PhpZendo\Comparison\Rules\EmptyRule;

class BooleanEmptyRule extends EmptyRule
{
    /**
     * check $expected is empty or not.
     *
     * @param mixed $expected
     * @return boolean
     */
    public function handle($expected)
    {
        // when check empty valiable $expected is boolean type,
        // and $input give a false value empty check will return true,else return false.
        return !$expected;
    }
}
