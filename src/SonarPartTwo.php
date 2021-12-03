<?php

namespace Advent;

class SonarPartTwo
{
    function SweepPartTwo(string $subData): int
    {
        $subData = explode("\n", $subData);
        $previousMeasurement = (int)$subData[0] + (int)$subData[1] + (int)$subData[2];
        $counter = 0;
        forEach ($subData as $measurement) {
            if ($measurement > $previousMeasurement) {
                $counter++;
            }
        $previousMeasurement = $measurement;
        }
        return $counter;
    }
}
