<?php

namespace PhpZendo\Comparison\Rules\IsnullRule;

class NullIsNullRule extends IsNullRule
{
    /**
     * handle check $expected is null or not.
     *
     * @param mixed $expected
     * @return boolean
     */
    public function handle($expected)
    {
        // undefined, null, have default null value etc null value context
        // when check null will return true
        return true;
    }
}
