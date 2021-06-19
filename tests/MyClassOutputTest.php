<?php

namespace Tests;

use Src\MyClass;

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

        // Пропускаем тест
        if (!extension_loaded('someExtension')) {
            $this->markTestSkipped('Extension is not loaded.');
        }

        // Пропускаем нереализованый метод
        if(!method_exists(MyClass::class, "newMethod")){
            $this->markTestIncomplete('Method not yet implemented.');
        }
    }
}