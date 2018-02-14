<?php

namespace TwoDotsTwice\ValueObject\Collection\Behaviour;

trait IsIterable
{
    public function getIterator()
    {
        return new \ArrayIterator($this->values);
    }
}
