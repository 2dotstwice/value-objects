<?php

namespace TwoDotsTwice\ValueObject\Collection\Behaviour;

trait HasUniqueValues
{
    /**
     * @param array $values
     * @throws \InvalidArgumentException
     */
    private function guardUniqueValues(array $values)
    {
        $uniqueValues = array_unique($values, SORT_REGULAR);
        $amountOfDuplicates = count($values) - count($uniqueValues);

        if ($amountOfDuplicates > 0) {
            throw new \InvalidArgumentException("Found {$amountOfDuplicates} duplicates in the given array.");
        }
    }
}
