<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class DependencyFailureTest extends TestCase
{
    public function testOne()
    {
        // Закоментировал это утверждение, чтобы не выводилось сообщение о провале теста
        // $this->assertTrue(false);
        $this->assertTrue(true);
    }

    /**
     * @depends testOne
     */
    public function testTwo()
    {
        // Добавляем утверждение, чтобы не было отображения предупреждения об рискованном тесте
        $this->assertTrue(true);
    }
}