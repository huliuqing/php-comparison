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

if (!function_exists('isNull')) {
    /**
     * Check given $expected value is null or not.
     *
     * @param mixed $expected
     * @return boolean
     */
    function isNull($expected)
    {
        return compare()->isNull($expected);
    }
}

if (!function_exists('is_set')) {
    /**
     * Check given $expected value is set or not.
     *
     * @param mixed $expected
     * @return boolean
     */
    function is_set($expected)
    {
        return compare()->isset($expected);
    }
}

if (!function_exists('is_equal')) {    
    /**
     * compare two values are equal.
     *
     * @param mixed $expected     First value to compare
     * @param mixed $actual       Second value to compare
     * @param bool  $ignoreCase   Case is ignored when set to true
     *
     * @return boolean
     */
    function is_equal($expected, $actual, $ignoreCase = true)
    {
        return compare()->equal($expected, $actual, $ignoreCase);
    }
}

if (!function_exists('equal')) {    
    /**
     * compare two values are equal.
     *
     * @param mixed $expected     First value to compare
     * @param mixed $actual       Second value to compare
     * @param bool  $ignoreCase   Case is ignored when set to true
     *
     * @return boolean
     */
    function equal($expected, $actual, $ignoreCase = true)
    {
        return compare()->equal($expected, $actual, $ignoreCase);
    }
}


if (!function_exists('is_great_than')) {
    /**
     * Compare $expected value is great than $actual value.
     *
     * @param mixed $expected     First value to compare
     * @param mixed $actual       Second value to compare
     * @return boolean
     */
    function is_great_than($expected, $actual)
    {
        return compare()->gt($expected, $actual);
    }
}

if (!function_exists('gt')) {
    /**
     * Compare $expected value is great than $actual value.
     *
     * @param mixed $expected     First value to compare
     * @param mixed $actual       Second value to compare
     * @return boolean
     */
    function gt($expected, $actual)
    {
        return compare()->gt($expected, $actual);
    }
}

if (!function_exists('is_gt')) {
    /**
     * Compare $expected value is great than $actual value.
     *
     * @param mixed $expected     First value to compare
     * @param mixed $actual       Second value to compare
     * @return boolean
     */
    function is_gt($expected, $actual)
    {
        return compare()->gt($expected, $actual);
    }
}


if (!function_exists('is_less_than')) {
    /**
     * Compare $expected value is less than $actual value.
     *
     * @param mixed $expected     First value to compare
     * @param mixed $actual       Second value to compare
     * @return boolean
     */
    function is_less_than($expected, $actual)
    {
        return compare()->lt($expected, $actual);
    }
}

if (!function_exists('lt')) {
    /**
     * Compare $expected value is less than $actual value.
     *
     * @param mixed $expected     First value to compare
     * @param mixed $actual       Second value to compare
     * @return boolean
     */
    function lt($expected, $actual)
    {
        return compare()->lt($expected, $actual);
    }
}

if (!function_exists('is_lt')) {
    /**
     * Compare $expected value is less than $actual value.
     *
     * @param mixed $expected     First value to compare
     * @param mixed $actual       Second value to compare
     * @return boolean
     */
    function is_lt($expected, $actual)
    {
        return compare()->lt($expected, $actual);
    }
}

if (!function_exists('is_gte')) {
    /**
     * Compare $expected value is great than or equal $actual value.
     *
     * @param mixed|null $expected
     * @param mixed|null $actual
     * @return boolean
     */
    function is_gte($expected, $actual)
    {
        return compare()->gte($expected, $actual);
    }
}

if (!function_exists('is_lte')) {
    /**
     * Compare $expected value is less than or equal $actual value.
     *
     * @param mixed|null $expected
     * @param mixed|null $actual
     * @return boolean
     */
    function is_lte($expected, $actual)
    {
        return compare()->lte($expected, $actual);
    }
}
