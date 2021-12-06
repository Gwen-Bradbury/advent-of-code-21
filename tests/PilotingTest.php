<?php

namespace Advent\Tests;

use Advent\Piloting;
use PHPUnit\Framework\TestCase;

class PilotingTest extends TestCase
{
    public function  testItReturnsFiveWhenOnlyHorizontalPositionChanges(): void
    {
        $this->assertSame(5, (new Piloting())->course('forward 5'));
    }

    public function  testItReturnsSixWhenOnlyHorizontalPositionChanges(): void
    {
        $this->assertSame(6, (new Piloting())->course('forward 6'));
    }

    public function  testItReturnsFiveWhenOnlyDepthChanges(): void
    {
        $this->assertSame(5, (new Piloting())->course('down 5'));
    }

    public function testReturnsSixWhenHorizontalChangesByThreeAndDepthByTwo(): void
    {
        $this->assertSame(6, (new Piloting())->course("forward 3\ndown 2"));
    }
}