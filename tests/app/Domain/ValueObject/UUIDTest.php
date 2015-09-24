<?php

namespace PhpDublin\AppTest\Domain\ValueObject;

use App\Domain\ValueObject\UUID;
use PhpDublin\AppTest\TestCase;

class UUIDTest extends TestCase
{
    const UUID_STR = "909a399a-b6eb-4481-a3af-2c798af20ee5";

    /**
     * @test
     */
    public function generateNewUuid()
    {
        $uuid = UUID::make();

        $this->assertInternalType('string', $uuid->value());
        $this->assertTrue(strlen($uuid->value()) > 0);
    }

    /**
     * @test
     */
    public function createFromString()
    {
        $uuid = new UUID(self::UUID_STR);

        $this->assertSame(self::UUID_STR, $uuid->value());
    }

    /**
     * @test
     */
    public function toString()
    {
        $uuid = new UUID(self::UUID_STR);

        $this->assertSame(self::UUID_STR, strval($uuid));
    }
}
