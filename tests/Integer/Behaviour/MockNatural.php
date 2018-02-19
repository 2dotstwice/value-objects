<?php

namespace TwoDotsTwice\ValueObject\Integer\Behaviour;

class MockNatural
{
    use IsInteger;
    use IsNatural;

    /**
     * @param int $value
     */
    public function __construct($value)
    {
        $this->guardNatural($value);
        $this->setValue($value);
    }
}
