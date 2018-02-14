<?php

namespace TwoDotsTwice\ValueObject\Collection;

use TwoDotsTwice\ValueObject\String\Behaviour\MockString;

class MockCollection extends Collection
{
    /**
     * @param MockString[] ...$values
     */
    public function __construct(MockString ...$values)
    {
        parent::__construct(...$values);
    }
}
