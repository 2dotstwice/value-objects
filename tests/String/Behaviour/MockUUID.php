<?php

namespace TwoDotsTwice\ValueObject\String\Behaviour;

class MockUUID
{
    use IsString;
    use HasUUIDFormat;

    public function __construct($value)
    {
        $this->guardString($value);
        $this->guardUUIDFormat($value);
        $this->setValue($value);
    }
}
