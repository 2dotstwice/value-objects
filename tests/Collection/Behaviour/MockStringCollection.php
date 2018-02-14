<?php

namespace TwoDotsTwice\ValueObject\Collection\Behaviour;

use TwoDotsTwice\ValueObject\String\Behaviour\MockString;

class MockStringCollection implements \IteratorAggregate
{
    use IsCollection;
    use IsIterable;
    use UnpacksArrays;

    public function __construct(MockString ...$mockStrings)
    {
        $this->setValues($mockStrings);
    }
}
