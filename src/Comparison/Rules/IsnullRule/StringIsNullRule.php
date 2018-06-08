<?php

namespace PhpZendo\Comparison\Rules\IsnullRule;

class StringIsNullRule extends IsNullRule
{
    /**
     * handle check $expected is null or not.
     *
     * @param mixed $expected
     * @return boolean
     */
    public function handle($expected)
    {
        // when check a string type is null or not will return false.
        return false;
    }
}
