<?php

namespace Tests;

use PHPUnit\Framework\TestSuite;

class SpecificTests
{
    public static function suite()
    {
        $suite = new TestSuite("MySuite");

        // Добавляем тест в набор
        $suite->addTestSuite(MyClassTest::class);

        return $suite;
    }
}