<?php
/*
 * This file is part of Respect/Validation.
 *
 * (c) Alexandre Gomes Gaigalas <alexandre@gaigalas.net>
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */
namespace PhpZendo\Tests\Unit;

use PhpZendo\Comparison\Compare;
use PHPUnit\Framework\TestCase;

/**
 * @covers Respect\Validation\Factory
 */
class IssetTest extends TestCase
{
    public function testEmptyString()
    {
        $actual = Compare::getInstance()->isset('');

        $this->assertEquals(true, $actual);
    }

    public function testString()
    {
        $actual = Compare::getInstance()->isset('php');

        $this->assertEquals(true, $actual);
    }

    public function testNull()
    {
        $actual = Compare::getInstance()->isset(null);

        $this->assertEquals(false, $actual);
    }

    public function testUndifined()
    {
        $actual = Compare::getInstance()->isset(@$undefined);

        $this->assertEquals(false, $actual);
    }

    public function testEmptyArray()
    {
        $actual = Compare::getInstance()->isset([]);

        $this->assertEquals(true, $actual);
    }

    public function testArray()
    {
        $actual = Compare::getInstance()->isset(['lib' => 'comparison']);

        $this->assertEquals(true, $actual);
    }

    public function testInteger()
    {
        $actual = Compare::getInstance()->isset(1);

        $this->assertEquals(true, $actual);
    }

    public function testIntegerZero()
    {
        $actual = Compare::getInstance()->isset(0);

        $this->assertEquals(true, $actual);
    }

    public function testNegativeInteger()
    {
        $actual = Compare::getInstance()->isset(-1);

        $this->assertEquals(true, $actual);
    }

    public function testFloat()
    {
        $actual = Compare::getInstance()->isset(1.2e3);

        $this->assertEquals(true, $actual);
    }

    public function testStringNumber()
    {
        $actual = Compare::getInstance()->isset('1');

        $this->assertEquals(true, $actual);
    }

    public function testStringNegativeNumber()
    {
        $actual = Compare::getInstance()->isset('-1');

        $this->assertEquals(true, $actual);
    }

    public function testBooleanTrue()
    {
        $actual = Compare::getInstance()->isset(true);

        $this->assertEquals(true, $actual);        
    }

    public function testBooleanFalse()
    {
        $actual = Compare::getInstance()->isset(false);

        $this->assertEquals(true, $actual);        
    }

    public function testBooleanStringTrue()
    {
        $actual = Compare::getInstance()->isset('true');

        $this->assertEquals(true, $actual);        
    }

    public function testBooleanStringFlase()
    {
        $actual = Compare::getInstance()->isset('flase');

        $this->assertEquals(true, $actual);
    }
}