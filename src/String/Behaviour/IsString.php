<?php

namespace TwoDotsTwice\ValueObject\String\Behaviour;

trait IsString
{
    /**
     * @var string
     */
    private $value;

    /**
     * @return string
     */
    public function toString()
    {
        return $this->value;
    }

    /**
     * @param IsString $other
     * @return bool
     */
    public function sameAs($other)
    {
        /* @var IsString $other */
        return get_class($this) === get_class($other) &&
            $this->toString() === $other->toString();
    }

    /**
     * @param mixed $value
     */
    private function guardString($value)
    {
        if (!is_string($value)) {
            throw new \InvalidArgumentException('Given value should be a string, got ' . gettype($value) . ' instead.');
        }
    }

    /**
     * @param string $value
     */
    private function setValue($value)
    {
        $this->guardString($value);
        $this->value = $value;
    }
}
