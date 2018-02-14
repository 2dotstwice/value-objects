<?php

namespace TwoDotsTwice\ValueObject\Collection\Behaviour;

trait UnpacksArrays
{
    /**
     * @param array $values
     * @return static
     */
    public static function fromArray(array $values)
    {
        return new static(...$values);
    }
}
