<?php

namespace TwoDotsTwice\ValueObject\String\Behaviour;

class MockNotEmptyString
{
    use IsString;
    use IsNotEmpty;

    public function __construct($value)
    {
        $this->guardString($value);
        $this->guardNotEmpty($value);
        $this->setValue($value);
    }
}
