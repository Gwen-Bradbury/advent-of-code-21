<?php

namespace Advent\Tests;

use Advent\SonarPartTwo;
use PHPUnit\Framework\TestCase;

class SonarPartTwoTest extends TestCase
{
    public function  testItReturnsZeroIfNoIncrease(): void
    {
        $this->assertSame(0, (new SonarPartTwo())->SweepPartTwo("1\n2\n3"));
    }

    public function  testItReturnsNineAndAddsCounter(): void
    {
        $this->assertSame(9, (new SonarPartTwo())->SweepPartTwo("2\n3\n4"));
    }

    public function  testItReturnsTwelveAndAddsCounter(): void
    {
        $this->assertSame(12, (new SonarPartTwo())->SweepPartTwo("3\n4\n5"));
    }
}