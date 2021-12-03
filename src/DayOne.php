<?php

namespace Advent;

class DayOne
{
    function getInputTotal($puzzleInput): int
    {
        $puzzleInput = explode("\n", $puzzleInput);
        $counter = 0;
        $previousMeasurement = $puzzleInput[0];
        forEach($puzzleInput as $measurement) {
            if($measurement > $previousMeasurement) {
                $counter++;
            }
            $previousMeasurement = $measurement;
        }
        return $counter;
    }
}
