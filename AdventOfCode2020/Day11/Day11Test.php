<?php

namespace mikeroq\AdventOfCode\AdventOfCode2020\Day11;

use PHPUnit\Framework\TestCase;

final class Day11Test extends TestCase
{
    public function testPart1Equals0(): void
    {
        $day11 = new Day11();
        $day11->importInput('AdventOfCode2020/Day11/test_input.txt');

        $this->assertEquals(0, $day11->findFirstAnswer());
    }

    public function testPart2Equals0(): void
    {
        $day11 = new Day11();
        $day11->importInput('AdventOfCode2020/Day11/test_input.txt');

        $this->assertEquals(0, $day11->findSecondAnswer());
    }
}