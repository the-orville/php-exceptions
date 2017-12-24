<?php declare(strict_types=1);

namespace TheOrville\Tests\Exceptions;

use ApiClients\Tools\TestUtilities\TestCase;
use Exception;
use TheOrville\Exceptions\YouGotWoodException;

final class YouGotWoodExceptionTest extends TestCase
{
    public function testIsException()
    {
        self::assertInstanceOf(Exception::class, new YouGotWoodException());
    }
}
