<?php

namespace Advent\Tests;

use Advent\Piloting;
use PHPUnit\Framework\TestCase;

class PilotingTest extends TestCase
{
    public function  testItReturnsZero(): void
    {
        $this->assertSame(0, (new Piloting())->course('0'));
    }
}