<?php

namespace Tests;

use PHPUnit\Framework\TestSuite;
use Src\MyClass;

class MySuite extends TestSuite
{
    protected $sharedFixture;

    public static function suite()
    {
        $suite = new MySuite("MyTest");
        $suite->addTestSuite(MyClassTest::class);

        return $suite;
    }

    protected function setUp()
    {
        $this->sharedFixture = new MyClass();
    }

    protected function tearDown()
    {
        $this->sharedFixture = NULL;
    }
}