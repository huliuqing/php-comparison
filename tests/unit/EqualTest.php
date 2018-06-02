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