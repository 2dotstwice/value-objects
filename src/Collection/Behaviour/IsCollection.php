<?php

namespace TwoDotsTwice\ValueObject\Collection\Behaviour;

trait IsCollection
{
    /**
     * @var array
     */
    protected $values;

    /**
     * @return array
     */
    public function toArray()
    {
        return $this->values;
    }

    /**
     * @param array $values
     */
    private function setValues(array $values)
    {
        $this->values = $values;
    }
}
