<?php

namespace TwoDotsTwice\ValueObject\String\Behaviour;

class MockTrimmedRightToLeft
{
    use IsString;
    use IsTrimmed;

    public function __construct($value)
    {
        $value = $this->trimRightToLeft($value);
        $this->setValue($value);
    }
}
