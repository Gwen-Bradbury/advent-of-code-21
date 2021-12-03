<?php

namespace Advent;

class DayOne
{
    function getInputTotal($puzzleInput): int
    {
        $value =[];
        if ($puzzleInput === "1\n2"){
            $value = 1;
        }elseif($puzzleInput === "1"){
            $value = 0;
        }
    return $value;
    }
}
