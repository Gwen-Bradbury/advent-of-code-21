<?php

namespace Advent\Tests;

use Advent\DayOne;
use PHPUnit\Framework\TestCase;

class DayOneTest extends TestCase
{
    public function testReturnsFirstValue(): void
    {
        $this->assertSame([159], (new DayOne())->getInputTotal(159));
    }

    public function testReturnsSecondValue(): void
    {
        $this->assertSame([170], (new DayOne())->getInputTotal(170));
    }

    public function testOnlyReturnsSecondValueIfBiggerThanPrevious(): void
    {
        $this->assertSame([170], (new DayOne())->getInputTotal(170));
    }
}
