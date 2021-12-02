<?php

namespace Advent\Tests;

use Advent\DayOne;
use PHPUnit\Framework\TestCase;


class DayOneTest extends TestCase
{
    public function  testGivenOneNumberReturnsZero(): void
    {
        $this->assertSame(0, (new DayOne())->getInputTotal("1"));
    }

//    public function  testGivenTwoNumbersWhereTheSecondIsBiggerReturnsOne(): void
//    {
//        $this->assertSame(1, (new DayOne())->getInputTotal("1\n2"));
//    }
}
