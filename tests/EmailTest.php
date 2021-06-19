<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use SebastianBergmann\Diff\InvalidArgumentException;
use Src\Email;


final class EmailTest extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $this->assertInstanceOf(
            Email::class,
            Email::fromString('user@example.com')
        );
    }

    public function testCannotBeCreatedFromInvalidEmailAddress(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Email::fromString('invalid');
    }

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'user@example.com',
            Email::fromString('user@example.com')
        );
    }
}

/**
 * ./vendor/bin/phpunit tests           - Тест в обычном режиме
 * ./vendor/bin/phpunit --testdox tests - Тест в режиме документации
 */