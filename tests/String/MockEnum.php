<?php

namespace TwoDotsTwice\ValueObject\String;

/**
 * @method static MockEnum foo
 * @method static MockEnum bar
 */
class MockEnum extends Enum
{
    /**
     * @return string[]
     */
    public static function getAllowedValues()
    {
        return [
            'foo',
            'bar',
        ];
    }
}
