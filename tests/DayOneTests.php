<?php

namespace Advent\Tests;

use Advent\DayOne;
use PHPUnit\Framework\TestCase;


class DayOneTests extends TestCase
{
    public function  givenOneNumberReturnsZero(): void
    {
        $this->assertSame(0, (new DayOne())->getInputTotal("1"));
    }

    public function  givenTwoNumbersWhereTheSecondIsBiggerReturnsOne(): void
    {
        $this->assertSame(1, (new DayOne())->getInputTotal("1\n2"));
    }
}
