<?php

namespace TwoDotsTwice\ValueObject\Collection\Behaviour;

use TwoDotsTwice\ValueObject\String\Behaviour\MockString;

class MockStringCollection
{
    use IsCollection;

    public function __construct(MockString ...$mockStrings)
    {
        $this->setValues($mockStrings);
    }
}
