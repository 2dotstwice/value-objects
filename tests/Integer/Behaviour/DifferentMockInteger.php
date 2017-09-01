<?php

namespace TwoDotsTwice\ValueObject\Integer\Behaviour;

class DifferentMockInteger
{
    use IsInteger;

    public function __construct($value)
    {
        $this->setValue($value);
    }
}
