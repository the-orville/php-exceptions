<?php

declare(strict_types=1);

namespace TheOrville\Tests\Exceptions;

use TheOrville\Exceptions\HappyArborDayException;
use Throwable;
use WyriHaximus\TestUtilities\TestCase;

final class HappyArborDayExceptionTest extends TestCase
{
    public function testIsException(): void
    {
        /** @phpstan-ignore-next-line */
        self::assertInstanceOf(Throwable::class, new HappyArborDayException());
    }
}
