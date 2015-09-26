<?php

namespace PhpDublin\AppTest\Domain\ValueObject\String;

use App\Domain\ValueObject\String\NonBlank;
use PhpDublin\AppTest\TestCase;

class NonBlankTest extends TestCase
{
    /**
     * @test
     */
    public function createFromString()
    {
        $string = new NonBlank("::Some Value::");

        $this->assertSame("::Some Value::", $string->value());
    }

    /**
     * @test
     * @dataProvider nonStringValues
     */
    public function createWithNonStringValue($nonStringValue)
    {
        $this->setExpectedException(\Exception::class);

        new NonBlank($nonStringValue);
    }

    public function nonStringValues()
    {
        return [
            'int'    => [123],
            'float'  => [1.23],
            'bool'   => [true],
            'null'   => [null],
            'array'  => [array()],
            'object' => [new \stdClass],
        ];
    }

    /**
     * @test
     * @dataProvider blankStringValues
     */
    public function createWithBlankValue($blankValue)
    {
        $this->setExpectedException(\Exception::class);

        new NonBlank($blankValue);
    }

    public function blankStringValues()
    {
        return [
            'empty'      => [""],
            'whitespace' => [" \n\r\t"],
        ];
    }
}
