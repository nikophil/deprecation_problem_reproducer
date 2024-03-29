<?php

declare(strict_types=1);

namespace Tests;

use App\SomeObject;
use PHPUnit\Framework\TestCase;
use Zenstruck\Foundry\Test\Factories;
use function Zenstruck\Foundry\factory;

final class SomeTest extends TestCase
{
    use Factories;

    public function testSomething(): void
    {
        self::assertEquals(
            new SomeObject('foo'),
            factory(SomeObject::class)->withAttributes(['someString' => 'foo'])->create()->object()
        );
    }
}
