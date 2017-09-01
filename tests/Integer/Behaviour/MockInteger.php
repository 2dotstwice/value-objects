<?php

namespace TwoDotsTwice\ValueObject\Integer\Behaviour;

class MockInteger
{
    use IsInteger;

    public function __construct($value)
    {
        $this->setValue($value);
    }
}
