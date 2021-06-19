<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Classes\Calc;

class CalcTest extends TestCase
{
    public function testSum()
    {
        $calc = new Calc();
        $result = $calc->sum(1, 2);

        $this->assertEquals(3, $result);
        $this->assertIsInt($result);
    }
}