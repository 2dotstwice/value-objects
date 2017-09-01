<?php

namespace TwoDotsTwice\ValueObject\Collection\Behaviour;

use TwoDotsTwice\ValueObject\String\Behaviour\MockString;

class IsIterableTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_should_be_usable_in_a_foreach_loop()
    {
        $strings = [
            new MockString('abc'),
            new MockString('def'),
            new MockString('hij'),
            new MockString('klm'),
            new MockString('nop'),
        ];

        $collection = new IterableMockStringCollection(...$strings);

        $returnedStrings = [];
        foreach ($collection as $string) {
            $returnedStrings[] = $string;
        }

        $this->assertEquals($strings, $returnedStrings);
    }
}
