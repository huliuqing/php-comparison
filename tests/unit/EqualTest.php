<?php
/*
 * This file is part of phpzendo/php-comparison.
 *
 * (c) Liuqing Hu <huliuqing1989@gmail.com>
 */
namespace PhpZendo\Tests\Unit;

use PhpZendo\Comparison\Compare;
use PHPUnit\Framework\TestCase;

class EqualTest extends TestCase
{
    public function equalsSucceedsProvider()
    {
        return [
          [1, 1],
          ['1', 1],
          [0x539, 1337],
          [02471, 1337],

          [2.3, 2.3],
          ['2.3', 2.3],
          [5.0, 5],
          [5, 5.0],
          [5.0, '5'],
          [1.2e3, 1200],
          [(string) (1 / 3), 1 - 2 / 3],
          [1 / 3, (string) (1 - 2 / 3)],

          [
            ['a' => 1, 'b' => 2],
            ['b' => 2, 'a' => 1]
          ],
          [
            [1],
            ['1']
          ],

          ['string', 'string'],
          ['string', 'STRING', true],
          ['STRING', 'string', true],
          ['10', 10],
          ['', false],
          ['1', true],
          [1, true],
          [0, false],
          [0.1, '0.1'],
          [false, null],
          [false, false],
          [true, true],
          [null, null]
        ];
    }

    /**
     * @dataProvider equalsSucceedsProvider
     *
     * @param mixed $expected
     * @param mixed $actual
     */
    public function testEqualSucceeds($expected, $actual, $ignoreCase = false)
    {
        $equal = Compare::getInstance()->equal($expected, $actual, $ignoreCase);

        $this->assertTrue($equal);
    }
}
