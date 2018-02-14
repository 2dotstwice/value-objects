<?php

namespace TwoDotsTwice\ValueObject\Collection\Behaviour;

use TwoDotsTwice\ValueObject\String\Behaviour\MockString;

class UnpacksArraysTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_should_accept_an_array_of_strings_and_return_an_array()
    {
        $strings = [
            new MockString('abc'),
            new MockString('def'),
            new MockString('hij'),
            new MockString('klm'),
            new MockString('nop'),
        ];

        $collection = MockStringCollection::fromArray($strings);

        $this->assertInstanceOf(MockStringCollection::class, $collection);
        $this->assertEquals($strings, $collection->toArray());
    }
}
