<?php

namespace Advent;

class SonarPartTwo
{
    function SweepPartTwo(string $puzzleInput): int
    {
        $puzzleInput = explode("\n", $puzzleInput);
        $previousMeasurement = (int)$puzzleInput[0] + (int)$puzzleInput[1] + (int)$puzzleInput[2];
        $counter = 0;
        forEach ($puzzleInput as $measurement) {
            if ($measurement > $previousMeasurement) {
                $counter++;
            }
        $previousMeasurement = $measurement;
        }
        return $counter;
    }
}
