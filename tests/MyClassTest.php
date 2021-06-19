<?php

use PHPUnit\Framework\TestCase;
use Src\MyClass;

class MyClassTest extends TestCase
{
    public function testPower()
    {
        $my = new MyClass();
        $this->assertEquals(8, $my->power(2, 3));
    }
}