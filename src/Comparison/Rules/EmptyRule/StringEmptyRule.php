<?php

namespace PhpZendo\Comparison\Rules\EmptyRule;

class StringEmptyRule extends EmptyRule
{
    /**
     * check $expected is empty or not.
     *
     * @param mixed $expected
     * @return boolean
     */
    public function handle($expected)
    {
        $type = gettype($expected);
        if (is_numeric($expected)) {
            $type = 'numeric';
        }

        $handle = $type . 'Handle';
        return $this->{$handle}($expected);
    }

    /**
     * check the given string of $expected is empty or not.
     *
     * @param mixed $expected
     * @return boolean
     */
    private function stringHandle($expected)
    {
        // when check a string and only '' value given will return true;
        $expected = trim($expected);

        return $expected === '';
    }

    /**
     * check the given numeric of $expected is empty or not.
     *
     * @param mixed $expected
     * @return boolean
     */
    private function numericHandle($expected)
    {
        // all numeric value like 0, 1, 42, -1, '0', '1', '-1' etc will return false.
        return false;
    }
}
