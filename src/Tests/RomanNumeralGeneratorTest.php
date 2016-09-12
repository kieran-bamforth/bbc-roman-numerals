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
        $this->markTestSkipped('Will implement this soon');
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

    /**
     * @expectedException \InvalidArgumentException
     */
    public function test_getSubtractiveNotation_invalidString()
    {
        $this->generator->generate(false);
    }

    /**
     * @dataProvider subtractiveNotationDataProvider
     */
    public function test_getSubtractiveNotation_ok($numeral)
    {
        $this->markTestSkipped('Will implement this soon');
        $this->assertEquals($expected, $this->generator->toSubtractiveNotation($numeral));
    }

    public function subtractiveNotationDataProvider() 
    {
        return [
            ['IV', 'IIII'],
            ['IX', 'VIIII'],
            ['XL', 'XXXX'],
            ['XC', 'LXXXX'],
            ['CD', 'CCCC'],
            ['CM', 'DCCCC']
        ];
    }
}
