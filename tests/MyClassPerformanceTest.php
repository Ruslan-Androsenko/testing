<?php

namespace Tests;

// PHPUnit_Extensions_OutputTestCase
// PHPUnit_Framework_TestCase

class MyClassPerformanceTest extends PerformanceTestCase
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

    public function testPerformance()
    {
        $this->setMaxRunningTime(1);
        $this->fixture->square(4);
    }
}