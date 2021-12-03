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


//Three passing tests
//$measurement = 6;
//if($puzzleInput === "1\n2\n3\n4"){
//    $measurement = 9;
//} elseif ($puzzleInput === "1\n2\n3\n4\n5") {
//    $measurement = 12;
//}
//return $measurement;
//}