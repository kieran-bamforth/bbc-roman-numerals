<?php

namespace KieranBamforth\BBCTC\Services;

class RomanNumeralGenerator
{

    /**
     * @param generate
     *
     * @throws \InvalidArgumentException if $number is not numeric.
     *
     * @return string
     */
    public function generate($number)
    {
        if (!is_numeric($number)) {
            throw new \InvalidArgumentException('Expected numeric value for $number parameter.');
        }

        if ($number < 1 || $number >= 4000) {
            throw new \UnexpectedValueException('$number must be between 1 and 399');
        }

        $result = ''; 
        $numerals = $this->getNumerals();

        while ((int)$number > 0) {
            list ($numeral, $numeralValue) = array_pop($numerals);
            $multiples = floor($number / $numeralValue);
            $result .= str_repeat($numeral, $multiples);
            $number -= ($multiples * $numeralValue);
        };

        return strtoupper($result);
    }

    /**
     * @return array
     */
    public function getNumerals()
    {
        return $numerals = [
            ['i', 1], 
            ['iv', 4],
            ['v', 5],
            ['ix', 9],
            ['x', 10], 
            ['xl', 40],
            ['l', 50], 
            ['xc', 90],
            ['c', 100], 
            ['cd', 400],
            ['d', 500], 
            ['cm', 900],
            ['m', 1000]
        ];
    }

}
