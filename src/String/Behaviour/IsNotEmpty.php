<?php

declare(strict_types=1);

namespace TwoDotsTwice\ValueObject\String\Behaviour;

trait IsNotEmpty
{
    private function guardNotEmpty(string $value)
    {
        if (strlen($value) === 0) {
            throw new \InvalidArgumentException('Given string should not be empty.');
        }
    }
}
