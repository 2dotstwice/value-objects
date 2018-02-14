<?php

namespace TwoDotsTwice\ValueObject\String\Behaviour;

class MockTrimmedLeftToRight
{
    use IsString;
    use IsTrimmed;

    public function __construct($value)
    {
        $value = $this->trimLeftToRight($value);
        $this->setValue($value);
    }
}
