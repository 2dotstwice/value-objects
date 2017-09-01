<?php

namespace TwoDotsTwice\ValueObject\Collection\Behaviour;

use TwoDotsTwice\ValueObject\String\Behaviour\MockString;

class IsCollectionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_should_accept_and_return_an_array()
    {
        $strings = [
            new MockString('abc'),
            new MockString('def'),
            new MockString('hij'),
            new MockString('klm'),
            new MockString('nop'),
        ];

        $collection = new MockStringCollection(...$strings);

        $this->assertEquals($strings, $collection->toArray());
    }
}
