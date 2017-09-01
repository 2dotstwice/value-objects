<?php

declare(strict_types=1);

namespace TwoDotsTwice\ValueObject\Integer\Behaviour;

trait IsInteger
{
    /**
     * @var int
     */
    private $value;

    public function toInteger() : int
    {
        return $this->value;
    }

    /**
     * @param IsInteger|mixed $other
     * @return bool
     */
    public function sameAs($other) : bool
    {
        return get_class($this) === get_class($other) && $this->toInteger() === $other->toInteger();
    }

    /**
     * @param IsInteger $other
     * @return bool
     */
    public function lt($other) : bool
    {
        $this->guardSameType($other);
        return $this->toInteger() < $other->toInteger();
    }

    /**
     * @param IsInteger $other
     * @return bool
     */
    public function lte($other) : bool
    {
        $this->guardSameType($other);
        return $this->toInteger() <= $other->toInteger();
    }

    /**
     * @param IsInteger $other
     * @return bool
     */
    public function gt($other) : bool
    {
        $this->guardSameType($other);
        return $this->toInteger() > $other->toInteger();
    }

    /**
     * @param IsInteger $other
     * @return bool
     */
    public function gte($other) : bool
    {
        $this->guardSameType($other);
        return $this->toInteger() >= $other->toInteger();
    }

    /**
     * @param mixed $other
     */
    private function guardSameType($other)
    {
        $thisClass = get_class($this);
        $otherClass = get_class($other);

        if ($thisClass !== $otherClass) {
            throw new \InvalidArgumentException("Expected ${thisClass}, got ${otherClass} instead.");
        }
    }

    private function guardInteger($value)
    {
        if (!is_int($value)) {
            throw new \InvalidArgumentException('Given value should be an int, got ' . gettype($value) . ' instead.');
        }
    }

    private function setValue($value)
    {
        $this->guardInteger($value);
        $this->value = $value;
    }
}
