<?php

namespace Advent;

class DayOne
{
    function getInputTotal($puzzleInput): array {
        $nextValue = [];
        if($puzzleInput > 159) {
            $nextValue = $puzzleInput;
        }
        return [$nextValue];
    }
}