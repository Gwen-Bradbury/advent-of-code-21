<?php

namespace Advent;

class Sonar
{
    function sweep(string $readings): int
    {
        $readings = explode("\n", $readings);
        $counter = 0;

        if (array_key_exists(3, $readings)) {
            $sumOfFirstThree = $readings[0] + $readings[1] + $readings[2];
            $sumOfSecondThree = $readings[1] + $readings[2] + $readings[3];
            if ($sumOfSecondThree > $sumOfFirstThree) {
                $counter++;
            }
        }

        return $counter;
    }
}
