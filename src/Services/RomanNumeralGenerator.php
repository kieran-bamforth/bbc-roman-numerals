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
    }
}
