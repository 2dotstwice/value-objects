<?php

namespace TwoDotsTwice\ValueObject\Collection\Behaviour;

use TwoDotsTwice\ValueObject\Collection\Collection;
use TwoDotsTwice\ValueObject\String\Behaviour\MockString;

class MockHasUniqueValuesCollection extends Collection
{
    use HasUniqueValues;

    /**
     * @param MockString[] ...$values
     */
    public function __construct(MockString ...$values)
    {
        $this->guardUniqueValues($values);
        parent::__construct(...$values);
    }
}
