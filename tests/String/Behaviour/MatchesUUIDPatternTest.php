<?php

namespace TwoDotsTwice\ValueObject\String\Behaviour;

class MatchesUUIDPatternTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @dataProvider stringValueProvider
     *
     * @param string $stringValue
     * @param bool $expectException
     */
    public function it_should_throw_an_exception_if_a_malformed_string_is_given(
        $stringValue,
        $expectException
    ) {
        if ($expectException) {
            $this->expectException(\InvalidArgumentException::class);
            $this->expectExceptionMessage("{$stringValue} is not a valid uuid.");
        }

        $vo = new MockUUID($stringValue);

        if (!$expectException) {
            $this->assertEquals($stringValue, $vo->toString());
        }
    }

    public function stringValueProvider()
    {
        return [
            'nil' => [
                'stringValue' => '00000000-0000-0000-0000-000000000000',
                'expectException' => false,
            ],
            'v4' => [
                'stringValue' => '76831861-4706-4362-a42d-8710e32bd1ba',
                'expectException' => false,
            ],
            'v5' => [
                'stringValue' => '74738ff5-5367-5958-9aee-98fffdcd1876',
                'expectException' => false,
            ],
            'eol-at-start' => [
                'stringValue' => PHP_EOL . '74738ff5-5367-5958-9aee-98fffdcd1876',
                'expectException' => true,
            ],
            'eol-at-end' => [
                'stringValue' => '74738ff5-5367-5958-9aee-98fffdcd1876' . PHP_EOL,
                'expectException' => true,
            ],
            'multi-line' => [
                'stringValue' => '74738ff5-5367-5958-9aee-98fffdcd1876' . PHP_EOL
                    . '76831861-4706-4362-a42d-8710e32bd1ba',
                'expectException' => true,
            ],
            'without_separators' => [
                'stringValue' => '7683186147064362a42d-8710e32bd1ba',
                'expectException' => true,
            ],
            'casted_int' => [
                'stringValue' => '0',
                'expectException' => true,
            ],
            'empty' => [
                'stringValue' => '',
                'expectException' => true,
            ],
            'spaces' => [
                'stringValue' => ' ',
                'expectException' => true,
            ],
            'random' => [
                'stringValue' => 'abc',
                'expectException' => true,
            ],
        ];
    }
}
