<?php

namespace TwoDotsTwice\ValueObject\String\Behaviour;

class MockString
{
    use IsString;

    public function __construct($value)
    {
        $this->setValue($value);
    }
}
