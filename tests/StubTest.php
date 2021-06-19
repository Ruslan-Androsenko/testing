<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Headdress;
use App\Duck;

class StubTest extends TestCase
{
    public function testStub()
    {
        $headress = $this->createStub(Headdress::class);
        $duck = new Duck($headress);

        $this->assertSame("foo", $duck->quack());
    }
}