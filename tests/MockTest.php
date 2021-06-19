<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Invocation;
use App\Headdress;
use App\Duck;

class MockTest extends TestCase
{
    public function testMock()
    {
        $headress = $this->createMock(Headdress::class);
        $invocation = new Invocation("back");

        // Не работает так как описано в этой статье
        // $headress->expects($invocation);
        $duck = new Duck($headress);

        $this->assertTrue($duck->run());
    }
}