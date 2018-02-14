<?php

namespace TwoDotsTwice\ValueObject\String\Behaviour;

class MockUUID
{
    use IsString;
    use MatchesUUIDPattern;

    public function __construct($value)
    {
        $this->guardString($value);
        $this->guardUUIDPattern($value);
        $this->setValue($value);
    }
}
