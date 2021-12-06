<?php

namespace Advent;

class Sonar
{
    function sweep(string $readings): int
    {
        $readings = explode("\n", $readings);
        $counter = 0;

        $previousSweepValue = 0;
        for ($i = 1; array_key_exists($i + 1, $readings); $i++) {
            $currentSweep = $readings[$i - 1] + $readings[$i] + $readings[$i + 1];
            if ($i > 1 && $previousSweepValue < $currentSweep) {
                $counter++;
            }
            $previousSweepValue = $currentSweep;
        }
        return $counter;
    }
}
