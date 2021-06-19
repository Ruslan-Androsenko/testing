<?php

use PHPUnit\Framework\TestCase;
use Src\MyClass;
use Src\MathException;

class MyClassTest extends TestCase
{
    /**
     * @dataProvider providerPower
     */
    public function testPower($a, $b, $c)
    {
        $my = new MyClass();
        $this->assertEquals($c, $my->power($a, $b));
    }

    public function providerPower()
    {
        return [
            [2, 2, 4],
            [2, 3, 9],
            [3, 5, 243],
        ];
    }

    public function testDivision1()
    {
        $this->expectException(MathException::class);

        $my = new MyClass();
        $my->divide(8, 0);
    }

    public function testDivision2()
    {
        $my = new MyClass();

        try {
            $my->divide(8, 2);
        } catch (MathException $e) {
            return;
        }

        $this->fail("Not raise an exception");
    }
}