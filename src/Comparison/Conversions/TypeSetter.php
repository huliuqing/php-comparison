<?php

namespace PhpZendo\Comparison\Conversions;

use \strtolower;
use \settype;

class TypeSetter
{
    public function __construct()
    {

    }
    
    public function setType($input, $type)
    {
        $type = strtolower($type);
        $setted = settype($input, $type);

        if (!$setted) {
            throw new Exception("Type of {$type} can't set", 1); 
        }

        return [$input, $type];
    }
}
