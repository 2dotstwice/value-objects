<?php

namespace TwoDotsTwice\ValueObject\String\Behaviour;

class MockTrimmedRight
{
    use IsString;
    use Trims;

    public function __construct($value)
    {
        $value = $this->trimRight($value);
        $this->setValue($value);
    }
}
