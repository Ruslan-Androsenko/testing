<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Src\MyClass;
use Src\MathException;

class MyClassTest extends TestCase
{
    protected $fixture;

    protected function setUp(): void
    {
        $this->fixture = $this->sharedFixture;
    }

    protected function tearDown(): void
    {
        $this->fixture = NULL;
    }

    /**
     * @dataProvider providerPower
     */
    public function testPower($a, $b, $c)
    {
        $this->assertEquals($c, $this->fixture->power($a, $b));
    }

    public function providerPower()
    {
        return [
            [2, 2, 4],
            [2, 3, 8],
            [3, 5, 243],
        ];
    }

    public function testDivision1()
    {
        $this->expectException(MathException::class);

        $this->fixture->divide(8, 0);
    }

    public function testDivision2()
    {
        try {
            $this->fixture->divide(8, 2);
        } catch (MathException $e) {
            return;
        }

        $this->fail("Not raise an exception");
    }
}