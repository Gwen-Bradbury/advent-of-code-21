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

}
