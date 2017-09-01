<?php

namespace TwoDotsTwice\ValueObject\Collection\Behaviour;

use TwoDotsTwice\ValueObject\String\Behaviour\MockString;

class IterableMockStringCollection implements \IteratorAggregate
{
    use IsCollection;
    use IsIterable;

    public function __construct(MockString ...$mockStrings)
    {
        $this->setValues($mockStrings);
    }
}
