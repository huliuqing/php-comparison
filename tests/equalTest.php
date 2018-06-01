<?php

require_once '../vendor/autoload.php'; 

use PhpZendo\Comparison\Compare;

dump("1 => 1",Compare::getInstance()->equal(1, 1));
dump("'1' => 1",Compare::getInstance()->equal('1', 1));
dump("true => 1",Compare::getInstance()->equal(true, 1));
dump("false => 1",Compare::getInstance()->equal(false, 1));
dump("null => 1",Compare::getInstance()->equal(null, 1));
dump("null => null",Compare::getInstance()->equal(null, null));

dump("abc => 1",Compare::getInstance()->equal('abc', 1));
dump("abc => 0",Compare::getInstance()->equal('abc', 0));
dump("abc => abc",Compare::getInstance()->equal('abc', 'abc'));
dump("abc => Abc",Compare::getInstance()->equal('abc', 'Abc'));

dump("[] => []",Compare::getInstance()->equal([], []));

dump('-------------------------------');

dump("1 => 1",Compare::getInstance()->eq(1, 1));
dump("'1' => 1",Compare::getInstance()->eq('1', 1));
dump("true => 1",Compare::getInstance()->eq(true, 1));
dump("false => 1",Compare::getInstance()->eq(false, 1));
dump("null => 1",Compare::getInstance()->eq(null, 1));

dump("[] => []",Compare::getInstance()->eq([], []));