<?php

namespace PhpZendo\Comparison\Rules\IsnullRule;

class BooleanIsNullRule extends IsNullRule
{
    /**
     * handle check $expected is null or not.
     *
     * @param mixed $expected
     * @return boolean
     */
    public function handle($inputs)
    {
        // when give boolean type to check null, should return false.
        return false;
    }
}
