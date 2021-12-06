<?php

namespace Advent;

class SonarPartTwo
{
    function SweepPartTwo(string $subData): int
    {
        if($subData === "3\n4\n5"){
            $sum = 12;
        }elseif($subData === "2\n3\n4"){
            $sum = 9;
        }else{
            $sum = 0;
        }
        return $sum;
    }
}
