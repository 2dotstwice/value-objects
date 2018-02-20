<?php

namespace TwoDotsTwice\ValueObject\Collection;

use TwoDotsTwice\ValueObject\String\Behaviour\MockString;

class BrokenMockCollection extends Collection
{
    /**
     * @param MockString[] ...$values
     */
    public function __construct(MockString ...$values)
    {
        parent::__construct($values);
    }
}
