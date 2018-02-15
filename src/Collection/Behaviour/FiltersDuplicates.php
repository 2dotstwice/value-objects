<?php

namespace TwoDotsTwice\ValueObject\Collection\Behaviour;

trait FiltersDuplicates
{
    /**
     * @param array $values
     * @return array
     */
    private function filterDuplicateValues(array $values)
    {
        return array_unique($values, SORT_REGULAR);
    }
}
