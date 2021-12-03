<?php

namespace Advent;

class SonarPartTwo
{
    function SweepPartTwo(string $puzzleInput): int
    {
        $puzzleInput = explode("\n", $puzzleInput);
        $counter = 0;
        $previousMeasurement = $puzzleInput[0];
        foreach ($puzzleInput as $measurement) {
            if ($measurement > $previousMeasurement) {
                $counter++;
            }
            $previousMeasurement = $measurement;
        }
        return $counter;
    }
}