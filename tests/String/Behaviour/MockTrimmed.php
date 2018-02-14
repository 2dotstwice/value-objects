<?php

namespace TwoDotsTwice\ValueObject\String\Behaviour;

class MockTrimmed
{
    use IsString;
    use IsTrimmed;

    public function __construct($value)
    {
        $value = $this->trim($value);
        $this->setValue($value);
    }
}
