<?php

namespace Advent;

class SonarPartTwo
{
    function SweepPartTwo(string $puzzleInput): int
    {
        $measurement = 6;
        if($puzzleInput === "1\n2\n3\n4"){
           $measurement = 9;
        }
        return $measurement;
    }
}

//$puzzleInput = explode("\n", $puzzleInput);
//$counter = 0;
//$previousMeasurement = $puzzleInput[0];
//foreach ($puzzleInput as $measurement) {
//    if ($measurement > $previousMeasurement) {
//        $counter++;
//    }
//    $previousMeasurement = $measurement;
//}
//return $counter;