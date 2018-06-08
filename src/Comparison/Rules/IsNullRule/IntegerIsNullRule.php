<?php

namespace PhpZendo\Comparison\Rules\IsnullRule;

class IntegerIsNullRule extends IsNullRule
{
    /**
     * handle check $expected is null or not.
     *
     * @param mixed $expected
     * @return boolean
     */
    public function handle($expected)
    {
        // all numeric value 0, 1, 42, -1, '0', '1', '-1' etc,
        // when check null will return false
        return false;
    }
}
