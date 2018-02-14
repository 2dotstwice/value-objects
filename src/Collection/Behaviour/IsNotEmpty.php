<?php

namespace TwoDotsTwice\ValueObject\Collection\Behaviour;

trait IsNotEmpty
{
    /**
     * @param array $values
     * @throws \InvalidArgumentException
     */
    private function guardNotEmpty(array $values)
    {
        if (empty($values)) {
            throw new \InvalidArgumentException('Array should not be empty.');
        }
    }
}
