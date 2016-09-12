<?php

namespace KieranBamforth\BBCTC\Tests;

use KieranBamforth\BBCTC\Services\RomanNumeralGenerator;

class RomanNumeralGeneratorTest extends \PHPUnit_Framework_TestCase
{
    private $generator;

    public function setUp()
    {
        $this->generator = new RomanNumeralGenerator();
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function test_generate_invalidNumber()
    {
        $this->generator->generate(false);
    }

    /**
     * @dataProvider numeralNumberTestsProvider
     */
    public function test_generate_ok($expected, $number)
    {
        $this->assertEquals($expected, $this->generator->generate($number));
    }

    public function numeralNumberTestsProvider()
    {
        return [
            ['I', 1],
            ['V', 5],
            ['X', 10],
            ['XX', 20],
            ['MMMCMXCIX', 3999]
        ];
    }
}
