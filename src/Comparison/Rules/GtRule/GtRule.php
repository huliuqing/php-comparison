<?php

namespace PhpZendo\Comparison\Rules\GtRule;

use PhpZendo\Comparison\Rules\CompareRule;

class GtRule extends CompareRule
{
    const COMPARISON_OPERATOR = 'gt';

    public function __construct()
    {
        $this->setOperator(self::COMPARISON_OPERATOR);
        parent::__construct();
    }
}
