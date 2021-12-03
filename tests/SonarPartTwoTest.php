<?php

namespace Advent\Tests;

use Advent\SonarPartTwo;
use PHPUnit\Framework\TestCase;

class SonarPartTwoTest extends TestCase
{
    public function  testGivenOneWindowReturnsSix(): void
    {
        $this->assertSame(6, (new SonarPartTwo())->SweepPartTwo("1\n2\n3"));
    }

    public function  testGivenSecondWindowReturnsNine(): void
    {
        $this->assertSame(9, (new SonarPartTwo())->SweepPartTwo("1\n2\n3\n4"));
    }
}