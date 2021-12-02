<?php

namespace Advent;

class DayOne
{
    function getInputTotal($puzzleInput): array
    {
        $currentNumber = [];
        if($currentNumber > $puzzleInput) {
            $value = $currentNumber;
        }else{
            $value = $puzzleInput;
        }
        return $value;
    }
}
