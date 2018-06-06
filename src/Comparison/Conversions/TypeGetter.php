<?php

namespace PhpZendo\Comparison\Conversions;

use \gettype;
use \strtolower;
use \ucfirst;

class TypeGetter
{
    private $type;

    private $formattedType;

    public function __construct()
    {
    }
    
    public function getType($input, $needFormat = true)
    {
        $this->type = gettype($input);
        $this->formattedType = $this->format($this->type);

        return $needFormat ? $this->formattedType : $this->type;
    }

    private function format($type)
    {
        return ucfirst(strtolower($type));
    }
}
