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

class EmptyTest extends TestCase
{
    public function testEmptyString()
    {
        $actual = Compare::getInstance()->empty('');

        $this->assertEquals(true, $actual);
    }

    public function testString()
    {
        $actual = Compare::getInstance()->empty('php');

        $this->assertEquals(false, $actual);
    }

    public function testNull()
    {
        $actual = Compare::getInstance()->empty(null);

        $this->assertEquals(true, $actual);
    }

    public function testUndifined()
    {
        $actual = Compare::getInstance()->empty(@$undefined);

        $this->assertEquals(true, $actual);
    }

    public function testEmptyArray()
    {
        $actual = Compare::getInstance()->empty([]);

        $this->assertEquals(true, $actual);
    }

    public function testArray()
    {
        $actual = Compare::getInstance()->empty(['lib' => 'comparison']);

        $this->assertEquals(false, $actual);
    }

    public function testInteger()
    {
        $actual = Compare::getInstance()->empty(1);

        $this->assertEquals(false, $actual);
    }

    public function testIntegerZero()
    {
        $actual = Compare::getInstance()->empty(0);

        $this->assertEquals(false, $actual);
    }

    public function testNegativeInteger()
    {
        $actual = Compare::getInstance()->empty(-1);

        $this->assertEquals(false, $actual);
    }

    public function testFloat()
    {
        $actual = Compare::getInstance()->empty(1.2e3);

        $this->assertEquals(false, $actual);
    }

    public function testStringNumber()
    {
        $actual = Compare::getInstance()->empty('1');

        $this->assertEquals(false, $actual);
    }

    public function testStringNegativeNumber()
    {
        $actual = Compare::getInstance()->empty('-1');

        $this->assertEquals(false, $actual);
    }

    public function testBooleanTrue()
    {
        $actual = Compare::getInstance()->empty(true);

        $this->assertEquals(false, $actual);        
    }

    public function testBooleanFalse()
    {
        $actual = Compare::getInstance()->empty(false);

        $this->assertEquals(true, $actual);        
    }

    public function testBooleanStringTrue()
    {
        $actual = Compare::getInstance()->empty('true');

        $this->assertEquals(false, $actual);        
    }

    public function testBooleanStringFlase()
    {
        $actual = Compare::getInstance()->empty('flase');

        $this->assertEquals(false, $actual);
    }
}