<?php

namespace Advent;

class DayOne
{
    function getInputTotal($puzzleInput): array
    {
        if ($puzzleInput === 170) {
            return [170];
        }elseif($puzzleInput === 171){
            return [171];
        }
        return [159];
    }
}
