<?php

namespace Tests;

// PHPUnit_Extensions_OutputTestCase
// PHPUnit_Framework_TestCase

class MyClassOutputTest extends OutputTestCase
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

    public function testSquare()
    {
        $this->expectOutputString('4');
        $this->fixture->square(2);
    }
}