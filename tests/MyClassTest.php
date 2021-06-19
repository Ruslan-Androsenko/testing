<?php

use PHPUnit\Framework\TestCase;
use Src\MyClass;

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
}