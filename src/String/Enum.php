<?php

namespace TwoDotsTwice\ValueObject\String;

use TwoDotsTwice\ValueObject\String\Behaviour\IsString;

abstract class Enum
{
    use IsString;

    /**
     * @param string $value
     */
    final public function __construct($value)
    {
        $this->guardString($value);
        $this->guardAllowedValue($value);
        $this->setValue($value);
    }

    /**
     * @return string[]
     */
    abstract protected function getAllowedValues();

    /**
     * @param string $value
     * @throws \InvalidArgumentException
     */
    private function guardAllowedValue($value) {
        $allowed = $this->getAllowedValues();
        if (!in_array($value, $allowed)) {
            throw new \InvalidArgumentException(
                "Encountered unknown value '{$value}'. Allowed values: " . implode(', ', $allowed)
            );
        }
    }

    /**
     * @param string $name
     * @param array $arguments
     * @return static
     */
    public static function __callStatic($name, $arguments)
    {
        return new static($name);
    }
}
