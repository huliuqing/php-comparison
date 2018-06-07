<?php

use PhpZendo\Comparison\Compare;

if (!function_exists('compare')) {
    /**
     * Get compare instance.
     *
     * @return PhpZendo\Comparison\Compare
     */
    function compare()
    {
        return Compare::getInstance();
    }
}

if (!function_exists('is_empty')) {
    /**
     * Check given $expected value is empty or not.
     *
     * @param mixed $expected
     * @return boolean
     */
    function is_empty($expected)
    {
        return compare()->empty($expected);
    }
}
