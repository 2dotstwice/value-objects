<?php

declare(strict_types=1);

namespace TwoDotsTwice\ValueObject\Collection\Behaviour;

trait IsIterable
{
    public function getIterator()
    {
        return new \ArrayIterator($this->values);
    }
}
