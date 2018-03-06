<?php

namespace TwoDotsTwice\ValueObject\String\Behaviour;

class MockTrimmedLeft
{
    use IsString;
    use Trims;

    public function __construct($value)
    {
        $value = $this->trimLeft($value);
        $this->setValue($value);
    }
}
