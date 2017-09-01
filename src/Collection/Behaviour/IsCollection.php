<?php

declare(strict_types=1);

namespace TwoDotsTwice\ValueObject\Collection\Behaviour;

trait IsCollection
{
    /**
     * @var array
     */
    protected $values;

    public function toArray() : array
    {
        return $this->values;
    }

    private function setValues(array $values)
    {
        $this->values = $values;
    }
}
