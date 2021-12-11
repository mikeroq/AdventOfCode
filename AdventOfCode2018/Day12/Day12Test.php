<?php

namespace mikeroq\AdventOfCode\AdventOfCode2018\Day12;

use PHPUnit\Framework\TestCase;

final class Day12Test extends TestCase
{
    public function testPart1Equals0(): void
    {
        $day12 = new Day12();
        $day12->importInput('AdventOfCode2018/Day12/test_input.txt');

        $this->assertEquals(0, $day12->findFirstAnswer());
    }

    public function testPart2Equals0(): void
    {
        $day12 = new Day12();
        $day12->importInput('AdventOfCode2018/Day12/test_input.txt');

        $this->assertEquals(0, $day12->findSecondAnswer());
    }
}