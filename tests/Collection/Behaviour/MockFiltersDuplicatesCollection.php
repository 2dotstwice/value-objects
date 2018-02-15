<?php

namespace TwoDotsTwice\ValueObject\Collection\Behaviour;

use TwoDotsTwice\ValueObject\Collection\Collection;
use TwoDotsTwice\ValueObject\String\Behaviour\MockString;

class MockFiltersDuplicatesCollection extends Collection
{
    use FiltersDuplicates;

    /**
     * @param MockString[] ...$values
     */
    public function __construct(MockString ...$values)
    {
        $values = $this->filterDuplicateValues($values);
        parent::__construct(...$values);
    }
}
