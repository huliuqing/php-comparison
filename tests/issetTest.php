<?php

require_once '../vendor/autoload.php'; 

use PhpZendo\Comparison\Compare;

// $included_files = get_included_files();
// dump($included_files);
    /**
     * handle check $inputs is empty or not
     * 
     * @description comparison table 
     * @see http://php.net/manual/zh/types.comparisons.php
     * 表达式	                                gettype empty	is_null	isset	boolean : if($x)
     * $x = "";	                                string	TRUE	FALSE	TRUE	FALSE
     * $x = null;	                            NULL	TRUE	TRUE	FALSE	FALSE
     * var $x;	                                NULL	TRUE	TRUE	FALSE	FALSE
     * $x is undefined	                        NULL	TRUE	TRUE	FALSE	FALSE
     * $x = array();	                        array	TRUE	FALSE	TRUE	FALSE
     * $x = false;	                            boolean	TRUE	FALSE	TRUE	FALSE
     * $x = true;	                            boolean	FALSE	FALSE	TRUE	TRUE
     * $x = 1;	                                integer	FALSE	FALSE	TRUE	TRUE
     * $x = 42;	                                integer	FALSE	FALSE	TRUE	TRUE
     * $x = 0;	                                integer	TRUE	FALSE	TRUE	FALSE
     * $x = -1;	                                integer	FALSE	FALSE	TRUE	TRUE
     * $x = "1";	                            string	FALSE	FALSE	TRUE	TRUE
     * $x = "0";	                            string	TRUE	FALSE	TRUE	FALSE
     * $x = "-1";	                            string	FALSE	FALSE	TRUE	TRUE
     * $x = "php";	                            string	FALSE	FALSE	TRUE	TRUE
     * $x = "true";	                            string	FALSE	FALSE	TRUE	TRUE
     * $x = "false";	                        string	FALSE	FALSE	TRUE	TRUE
     * 
     * @param mixed $inputs
     * @return boolean
     */

dump("'' : false",Compare::getInstance()->isset(''));
dump("x = null : false",Compare::getInstance()->isset($x = null));
dump("undefined : false",Compare::getInstance()->isset(@$a));
dump("[] : false", Compare::getInstance()->isset([]));
dump("['age' => 18] : true", Compare::getInstance()->isset(['age' => 18]));
dump("false : false", Compare::getInstance()->isset(false));
dump("true : true", Compare::getInstance()->isset(true));

dump('1: true', Compare::getInstance()->isset(1));
dump('42: true', Compare::getInstance()->isset(42));
dump('0: true', Compare::getInstance()->isset(0));
dump('1.2e3: true', Compare::getInstance()->isset(1.2e3));
dump('str: -1: true', Compare::getInstance()->isset('-1'));
dump('str: 1 : true', Compare::getInstance()->isset('1'));

dump('str: php : true', Compare::getInstance()->isset('php'));
dump('str: false : true', Compare::getInstance()->isset('true'));
dump('str: false : true', Compare::getInstance()->isset('false'));