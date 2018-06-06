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

class IsnullTest extends TestCase
{
    public function testEmptyString()
    {
        $actual = Compare::getInstance()->isNull('');

        $this->assertEquals(false, $actual);
    }

    public function testString()
    {
        $actual = Compare::getInstance()->isNull('php');

        $this->assertEquals(false, $actual);
    }

    public function testNull()
    {
        $actual = Compare::getInstance()->isNull(null);

        $this->assertEquals(true, $actual);
    }

    public function testUndifined()
    {
        $actual = Compare::getInstance()->isNull(@$undefined);

        $this->assertEquals(true, $actual);
    }

    public function testEmptyArray()
    {
        $actual = Compare::getInstance()->isNull([]);

        $this->assertEquals(false, $actual);
    }

    public function testArray()
    {
        $actual = Compare::getInstance()->isNull(['lib' => 'comparison']);

        $this->assertEquals(false, $actual);
    }

    public function testInteger()
    {
        $actual = Compare::getInstance()->isNull(1);

        $this->assertEquals(false, $actual);
    }

    public function testIntegerZero()
    {
        $actual = Compare::getInstance()->isNull(0);

        $this->assertEquals(false, $actual);
    }

    public function testNegativeInteger()
    {
        $actual = Compare::getInstance()->isNull(-1);

        $this->assertEquals(false, $actual);
    }

    public function testFloat()
    {
        $actual = Compare::getInstance()->isNull(1.2e3);

        $this->assertEquals(false, $actual);
    }

    public function testStringNumber()
    {
        $actual = Compare::getInstance()->isNull('1');

        $this->assertEquals(false, $actual);
    }

    public function testStringNegativeNumber()
    {
        $actual = Compare::getInstance()->isNull('-1');

        $this->assertEquals(false, $actual);
    }

    public function testBooleanTrue()
    {
        $actual = Compare::getInstance()->isNull(true);

        $this->assertEquals(false, $actual);
    }

    public function testBooleanFalse()
    {
        $actual = Compare::getInstance()->isNull(false);

        $this->assertEquals(false, $actual);
    }

    public function testBooleanStringTrue()
    {
        $actual = Compare::getInstance()->isNull('true');

        $this->assertEquals(false, $actual);
    }

    public function testBooleanStringFlase()
    {
        $actual = Compare::getInstance()->isNull('flase');

        $this->assertEquals(false, $actual);
    }
}
