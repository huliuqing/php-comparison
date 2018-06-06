<?php

namespace PhpZendo\Comparison\Rules\EmptyRule;

class ArrayEmptyRule extends EmptyRule
{
    /**
     * check $expected is empty or not.
     *
     * @param mixed $expected
     * @return boolean
     */
    public function handle($expected)
    {
        // when give variable $expected is array type, only [] will return true.
        return empty($expected);
    }
}
