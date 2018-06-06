<?php

namespace PhpZendo\Comparison\Rules\GtRule;

class StringGtRule extends GtRule
{
    /**
     * compare $expected value is great than $actual.
     *
     * @override
     * @param mixed $expected     First value to compare
     * @param mixed $actual       Second value to compare
     * @param bool  $ignoreCase   Case is ignored when set to true
     *
     * @return boolean
     */
    public function handle($expected, $actual)
    {
        if (!$this->comparable($actual)) {
            throw new \PhpZendo\Comparison\Exceptions\UncomparableException(
                sprintf("Can\'t compare %s type with expected %s type.", \gettype($actual), \gettype($expected))
            );
        }

        $compared = strcmp($expected, $actual);

        return $compared > 0 ? true : false;
    }

    /**
     * @override
     *
     * @param mixed $actual
     * @return bool
     */
    protected function comparable($actual)
    {
        return \is_string($actual) || \is_numeric($actual);
    }
}
