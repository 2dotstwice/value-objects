<?php

namespace TwoDotsTwice\ValueObject\String\Behaviour;

trait IsNotEmpty
{
    private function guardNotEmpty($value)
    {
        if (strlen($value) === 0) {
            throw new \InvalidArgumentException('Given string should not be empty.');
        }
    }
}
