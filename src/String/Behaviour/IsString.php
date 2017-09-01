<?php

declare(strict_types=1);

namespace TwoDotsTwice\ValueObject\String\Behaviour;

trait IsString
{
    /**
     * @var string
     */
    private $value;

    public function toString() : string
    {
        return $this->value;
    }

    public function sameAs($other) : bool
    {
        /* @var IsString $other */
        return get_class($this) === get_class($other) &&
            $this->toString() === $other->toString();
    }

    private function guardString($value)
    {
        if (!is_string($value)) {
            throw new \InvalidArgumentException('Given value should be a string, got ' . gettype($value) . ' instead.');
        }
    }

    private function setValue($value)
    {
        $this->guardString($value);
        $this->value = $value;
    }
}
