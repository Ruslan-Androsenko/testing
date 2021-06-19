<?php

namespace Tests;

use PHPUnit\Framework\TestSuite;

class AllTests
{
    public static function suite()
    {
        $suite = new TestSuite("AllMySuite");

        // Добавляем нобор тестов
        $suite->addTest(SpecificTests::suite());

        return $suite;
    }
}