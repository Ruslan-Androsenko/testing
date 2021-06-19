<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Duck;

class DuckTest extends TestCase
{
    public function testSay()
    {
        $krya = new Duck();
        $this->assertSame("krya-krya", $krya->say());
    }
}