<?php declare(strict_types=1);

namespace TheOrville\Tests\Exceptions;

use ApiClients\Tools\TestUtilities\TestCase;
use Exception;
use TheOrville\Exceptions\LatchcombException;

final class LatchcombExceptionTest extends TestCase
{
    public function testIsException()
    {
        self::assertInstanceOf(Exception::class, new LatchcombException());
    }
}
