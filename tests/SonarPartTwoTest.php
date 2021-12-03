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
}