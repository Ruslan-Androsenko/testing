<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Classes\Calc;

class CalcTest extends TestCase
{
    public $calc = null;

    public function setUp(): void
    {
        $this->calc = new Calc();
    }

    public function tearDown(): void
    {
        $this->calc = null;
    }

    public function testSum()
    {
        $result = $this->calc->sum(1, 2);

        $this->assertEquals(3, $result);
        $this->assertIsInt($result);
    }

    public function testRes()
    {
        $result = $this->calc->res(2, 1);

        $this->assertEquals(1, $result);
        $this->assertIsInt($result);
    }
}