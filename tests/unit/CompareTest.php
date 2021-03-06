<?php
/*
 * This file is part of phpzendo/php-comparison.
 *
 * (c) Liuqing Hu <huliuqing1989@gmail.com>
 */
namespace PhpZendo\Tests\Unit;

use PhpZendo\Comparison\Compare;
use PHPUnit\Framework\TestCase;

class CompareTest extends TestCase
{
    public function gtSucceedsProvider()
    {
        return [
            [true, false],

            [3, 1],
            ['3', 1],
            [3, '1'],

            [4, 1.0],
            ['4', 1.0],
            [4, '1.0'],

            [5.0, 1],
            ['5.0', 1],
            [5.0, '1'],

            ['b', 'a'],
            ['aaz', 'aay'],
            ['a', 0],

            [[6], [1]],
            [['6'], ['1']],
            [[6], ['1']],
            [[4, 5, 6], [1, 2, 3]],

            [[7], [1.0]],
            [['7'], ['1.0']],
            [[7], ['1.0']],
            [[4, 5, 6], [1.0, 2.0, 3.0]],

            [[8.0], [1]],
            [['8.0'], ['1']],
            [[8.0], ['1']],
            [[4.0, 5.0, 6.0], [1, 2, 3]],

            [['a' => 9], ['a' => 1]],
            [['a' => 9], ['a' => '1']],
            [['a' => '9'], ['a' => 1]],

            [['a' => 10], ['a' => 1.0]],
            [['a' => 10], ['a' => '1.0']],
            [['a' => '10'], ['a' => 1.0]],

            [['a' => 10.0], ['a' => 1]],
            [['a' => 10.0], ['a' => '1']],
            [['a' => '10.0'], ['a' => 1]],

            [['a' => 'b'], ['a' => 'a']],
        ];
    }

    /**
     * @dataProvider gtSucceedsProvider
     *
     * @param mixed $expected
     * @param mixed $actual
     */
    public function testGtSucceeds($expected, $actual)
    {
        $equal = Compare::getInstance()->gt($expected, $actual);

        $this->assertTrue($equal);
    }
    
    public function gteSucceedsProvider()
    {
        $data = $this->gtSucceedsProvider();

        return [
            [true, false],

            [3, 1],
            ['3', 1],
            [3, '1'],

            [4, 1.0],
            ['4', 1.0],
            [4, '1.0'],

            [5.0, 1],
            ['5.0', 1],
            [5.0, '1'],

            ['b', 'a'],
            ['aaz', 'aay'],
            ['a', 0],

            [[6], [1]],
            [['6'], ['1']],
            [[6], ['1']],
            [[4, 5, 6], [1, 2, 3]],

            [[7], [1.0]],
            [['7'], ['1.0']],
            [[7], ['1.0']],
            [[4, 5, 6], [1.0, 2.0, 3.0]],

            [[8.0], [1]],
            [['8.0'], ['1']],
            [[8.0], ['1']],
            [[4.0, 5.0, 6.0], [1, 2, 3]],

            [['a' => 9], ['a' => 1]],
            [['a' => 9], ['a' => '1']],
            [['a' => '9'], ['a' => 1]],

            [['a' => 10], ['a' => 1.0]],
            [['a' => 10], ['a' => '1.0']],
            [['a' => '10'], ['a' => 1.0]],

            [['a' => 10.0], ['a' => 1]],
            [['a' => 10.0], ['a' => '1']],
            [['a' => '10.0'], ['a' => 1]],

            [['a' => 'b'], ['a' => 'a']],

            // equals
            [1, 1],
            [1.0, 1],
            [1, 1.0],
            [1.0, 1.0],

            [[2], [2]],
            [[2.0], [2]],
            [[2], [2.0]],
            [[2.0], [2.0]],

            ['1', 1],
            ['1.0', 1],
            [1, '1.0'],
            ['1.0', '1.0'],

            ['a', 'a'],
            [['a'], ['a']],

            [true, true],
            [false, false],
            [1, true],
            [true, 1],
            [false, 0],
            [0, false],
        ];
    }

    /**
     * @dataProvider gteSucceedsProvider
     *
     * @param mixed $expected
     * @param mixed $actual
     */
    public function testGteSucceeds($expected, $actual)
    {
        $equal = Compare::getInstance()->gte($expected, $actual);

        $this->assertTrue($equal);
    }
    
    public function ltSucceedsProvider()
    {
        $data = $this->gtSucceedsProvider();
        
        $new = [];
        foreach ($data as $key => $provider) {
            $new[$key][0] = $provider[1];
            $new[$key][1] = $provider[0];
        }

        $new = array_merge($new, [
        ]);
        return $new;
    }

    /**
     * @dataProvider ltSucceedsProvider
     *
     * @param mixed $expected
     * @param mixed $actual
     */
    public function testLtSucceeds($expected, $actual)
    {
        $equal = Compare::getInstance()->lt($expected, $actual);

        $this->assertTrue($equal);
    }

    public function lteSucceedsProvider()
    {
        $data = $this->gteSucceedsProvider();
        
        $new = [];
        foreach ($data as $key => $provider) {
            $new[$key][0] = $provider[1];
            $new[$key][1] = $provider[0];
        }

        return $new;
    }

    /**
     * @dataProvider lteSucceedsProvider
     *
     * @param mixed $expected
     * @param mixed $actual
     */
    public function testLteSucceeds($expected, $actual)
    {
        $equal = Compare::getInstance()->lte($expected, $actual);

        $this->assertTrue($equal);
    }
}
