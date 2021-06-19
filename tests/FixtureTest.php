<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class FixtureTest extends TestCase
{
    private $counter;

    protected function setUp(): void
    {
        $this->counter = 0;
        parent::setUp();
    }

    public function testFixture1()
    {
        $this->counter++;
        $this->assertSame(1, $this->counter);
    }

    public function testFixture2()
    {
        $this->assertSame(0, $this->counter);
    }
}