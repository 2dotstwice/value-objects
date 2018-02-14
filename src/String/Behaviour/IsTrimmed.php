<?php

namespace TwoDotsTwice\ValueObject\String\Behaviour;

trait IsTrimmed
{
    private function trim($value, $characters = " \t\n\r\0\x0B")
    {
        /* @var IsString $this */
        $this->guardString($value);
        return trim($value, $characters);
    }

    private function trimLeftToRight($value, $characters = " \t\n\r\0\x0B")
    {
        /* @var IsString $this */
        $this->guardString($value);
        return ltrim($value, $characters);
    }

    private function trimRightToLeft($value, $characters = " \t\n\r\0\x0B")
    {
        /* @var IsString $this */
        $this->guardString($value);
        return rtrim($value, $characters);
    }
}
