<?php

namespace Advent;

class Piloting
{
    function course(string $directions): int
    {
        $directions = explode("\n" , $directions);

        $horizontal = 0;
        $depth = 0;
        foreach ($directions as $direction) {
            [$direction2, $value] = explode(' ' , $direction);

            if($direction2 === 'forward') {
                $horizontal += $value;
            }
            if ('down' === $direction2) {
                $depth += $value;
            }
        }


        return ($horizontal ?: 1) * ($depth ?: 1);
    }
}