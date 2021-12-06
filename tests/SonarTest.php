<?php

namespace Advent\Tests;

use Advent\Sonar;
use PHPUnit\Framework\TestCase;


class SonarTest extends TestCase
{
    public function  testItReturnsZeroIfNoIncrease(): void
    {
        $this->assertSame(0, (new Sonar())->sweep("1\n2\n3"));
    }

    public function  testItReturnsNineAndAddsCounter(): void
    {
        $this->assertSame(1, (new Sonar())->sweep("1\n2\n3\n4"));
    }

    public function  testItReturnsTwelveAndAddsCounter(): void
    {
        $this->assertSame(2, (new Sonar())->sweep("1\n2\n3\n4\n5"));
    }
}
