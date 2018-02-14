<?php

namespace TwoDotsTwice\ValueObject\Collection\Behaviour;

use TwoDotsTwice\ValueObject\Collection\Collection;
use TwoDotsTwice\ValueObject\String\Behaviour\MockString;

class MockNotEmptyCollection extends Collection
{
    use IsNotEmpty;

    /**
     * @param MockString[] ...$values
     */
    public function __construct(MockString ...$values)
    {
        $this->guardNotEmpty($values);
        parent::__construct(...$values);
    }
}
