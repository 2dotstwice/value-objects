<?php

namespace TwoDotsTwice\ValueObject\String\Behaviour;

class MockDigitsRegexPattern
{
    use IsString;
    use MatchesRegexPattern;

    public function __construct($value)
    {
        $this->guardRegexPattern('/\\A\\d+\\Z/', $value);
        $this->setValue($value);
    }
}
