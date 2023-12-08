<?php

declare(strict_types=1);

namespace TheOrville\Tests\Exceptions;

use TheOrville\Exceptions\YouGotWoodException;
use Throwable;
use WyriHaximus\TestUtilities\TestCase;

final class YouGotWoodExceptionTest extends TestCase
{
    public function testIsException(): void
    {
        /** @phpstan-ignore-next-line */
        self::assertInstanceOf(Throwable::class, new YouGotWoodException());
    }
}
