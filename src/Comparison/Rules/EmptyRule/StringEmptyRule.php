<?php

namespace PhpZendo\Comparison\Rules\EmptyRule;

class StringEmptyRule extends EmptyRule
{
    public function handle($inputs)
    {
        $input = $this->getInput($inputs);

        $type = gettype($input);
        if (is_numeric($input)) {
            $type = 'integer';
        }

        $handle = $type . 'Handle';
        return $this->{$handle}($input);
    }

    private function stringHandle($input)
    {
        // when check a string and only '' value will return true;
        $input = trim($input);

        return $input === '';
    }   

    /**
     * integerHandle handle a numeric value
     *
     * @param mixed $input
     * @return boolean
     */
    private function integerHandle($input)
    {
        // all numeric value 0, 1, 42, -1, '0', '1', '-1' etc, 
        // when check empty will return false
        return false;
    }
}
