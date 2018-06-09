<?php
/*
 * This file is part of phpzendo/php-comparison.
 *
 * (c) Liuqing Hu <huliuqing1989@gmail.com>
 */
namespace PhpZendo\Tests\Unit;

use PhpZendo\Comparison\Compare;
use PHPUnit\Framework\TestCase;

class HelpersTest extends TestCase
{
    public function testCompareInstance()
    {
        $instance = compare();
        
        $this->assertInstanceOf(\PhpZendo\Comparison\Compare::class, $instance);
    }

    public function testIsEmptyFunction()
    {
        $actual = is_empty('');

        $this->assertEquals(true, $actual);
    }

    public function testIsNull()
    {
        $isnull = isNull(null);

        $this->assertTrue($isnull);
    }

    public function testIsSet()
    {
        $isset = is_set('not null');
        
        $this->assertTrue($isset);
    }

    public function testIsEqual()
    {
        $equal = is_equal(1, 1);
        
        $this->assertTrue($equal);
    }

    public function testEqual()
    {
        $equal = equal(1, 1);
        
        $this->assertTrue($equal);
    }

    public function testIsGreatThan()
    {
        $cmp = is_great_than(2, 1);
        
        $this->assertTrue($cmp);
    }

    public function testGt()
    {
        $cmp = gt(2, 1);
        
        $this->assertTrue($cmp);
    }

    public function testIsGt()
    {
        $cmp = is_gt(2, 1);
        
        $this->assertTrue($cmp);
    }

    public function testIsLessThan()
    {
        $cmp = is_less_than(1, 2);
        
        $this->assertTrue($cmp);
    }

    public function testLt()
    {
        $cmp = lt(1, 2);
        
        $this->assertTrue($cmp);
    }

    public function testIsLt()
    {
        $cmp = is_lt(1, 2);
        
        $this->assertTrue($cmp);
    }

    public function testIsGteForGt()
    {
        $cmp = is_gte(2, 1);
        
        $this->assertTrue($cmp);
    }

    public function testIsGteForEqual()
    {
        $cmp = is_gte(1, 1);
        
        $this->assertTrue($cmp);
    }

    public function testIsLteForLt()
    {
        $cmp = is_lte(1, 2);
        
        $this->assertTrue($cmp);
    }

    public function testIsLteForEqual()
    {
        $cmp = is_lte(1, 1);
        
        $this->assertTrue($cmp);
    }
}
