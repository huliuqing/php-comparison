<?php

namespace PhpZendo\Comparison\Rules\IssetRule;

abstract class IssetRule
{
    /**
     * handle check $expected is set or not
     *
     * @description comparison table
     * @see http://php.net/manual/zh/types.comparisons.php
     * 表达式                                  gettype empty   is_null isset   boolean : if($x)
     * $x = "";                                 string  TRUE    FALSE   TRUE    FALSE
     * $x = null;                               NULL    TRUE    TRUE    FALSE   FALSE
     * var $x;                                  NULL    TRUE    TRUE    FALSE   FALSE
     * $x is undefined                          NULL    TRUE    TRUE    FALSE   FALSE
     * $x = array();                            array   TRUE    FALSE   TRUE    FALSE
     * $x = false;                              boolean TRUE    FALSE   TRUE    FALSE
     * $x = true;                               boolean FALSE   FALSE   TRUE    TRUE
     * $x = 1;                                  integer FALSE   FALSE   TRUE    TRUE
     * $x = 42;                                 integer FALSE   FALSE   TRUE    TRUE
     * $x = 0;                                  integer TRUE    FALSE   TRUE    FALSE
     * $x = -1;                                 integer FALSE   FALSE   TRUE    TRUE
     * $x = "1";                                string  FALSE   FALSE   TRUE    TRUE
     * $x = "0";                                string  TRUE    FALSE   TRUE    FALSE
     * $x = "-1";                               string  FALSE   FALSE   TRUE    TRUE
     * $x = "php";                              string  FALSE   FALSE   TRUE    TRUE
     * $x = "true";                             string  FALSE   FALSE   TRUE    TRUE
     * $x = "false";                            string  FALSE   FALSE   TRUE    TRUE
     *
     * @param mixed $expected
     * @return boolean
     */
    abstract public function handle($expected);

    protected function getInput($inputs)
    {
        return $inputs[0];
    }

    public function __invoke()
    {
        $inputs = func_get_args();
        $expected = $this->getInput($inputs);

        return $this->handle($expected);
    }
}
