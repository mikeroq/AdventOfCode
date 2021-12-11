<?php

namespace mikeroq\AdventOfCode\AdventOfCode2017\Day06;

use PHPUnit\Framework\TestCase;

final class Day06Test extends TestCase
{
    public function testPart1Equals0(): void
    {
        $day06 = new Day06();
        $day06->importInput('AdventOfCode2017/Day06/test_input.txt');

        $this->assertEquals(0, $day06->findFirstAnswer());
    }

    public function testPart2Equals0(): void
    {
        $day06 = new Day06();
        $day06->importInput('AdventOfCode2017/Day06/test_input.txt');

        $this->assertEquals(0, $day06->findSecondAnswer());
    }
}