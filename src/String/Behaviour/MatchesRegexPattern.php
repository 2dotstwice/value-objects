<?php

namespace TwoDotsTwice\ValueObject\String\Behaviour;

trait MatchesRegexPattern
{
    /**
     * @param string $pattern
     * @param string $value
     * @throws \InvalidArgumentException
     */
    private function guardRegexPattern($pattern, $value)
    {
        /* @var IsString $this */
        $this->guardString($value);

        if (!preg_match($pattern, $value)) {
            throw new \InvalidArgumentException("String '{$value}' does not match regex pattern {$pattern}.");
        }
    }
}
