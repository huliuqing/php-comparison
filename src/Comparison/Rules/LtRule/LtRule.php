<?php

namespace PhpZendo\Comparison\Rules\LtRule;

use PhpZendo\Comparison\Rules\CompareRule;

class LtRule extends CompareRule
{
    const COMPARISON_OPERATOR = 'lt';

    public function __construct()
    {
        $this->setOperator(self::COMPARISON_OPERATOR);
        parent::__construct();
    }
}
