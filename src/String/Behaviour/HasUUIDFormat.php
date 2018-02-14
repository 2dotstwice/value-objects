<?php

namespace TwoDotsTwice\ValueObject\String\Behaviour;

trait HasUUIDFormat
{
    /**
     * @param string $value
     * @throws \InvalidArgumentException
     */
    private function guardUUIDFormat($value)
    {
        $pattern = '/' . $this->getUUIDPattern() . '/';

        if (!preg_match($pattern, $value)) {
            throw new \InvalidArgumentException("{$value} is not a valid uuid.");
        }
    }

    private function getUUIDPattern()
    {
        return '\\A[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}\\Z';
    }
}
