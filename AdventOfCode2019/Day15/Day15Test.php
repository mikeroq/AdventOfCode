<?php

namespace mikeroq\AdventOfCode\AdventOfCode2019\Day15;

use PHPUnit\Framework\TestCase;

final class Day15Test extends TestCase
{
    public function testPart1Equals0(): void
    {
        $day15 = new Day15();
        $day15->importInput('AdventOfCode2019/Day15/test_input.txt');

        $this->assertEquals(0, $day15->findFirstAnswer());
    }

    public function testPart2Equals0(): void
    {
        $day15 = new Day15();
        $day15->importInput('AdventOfCode2019/Day15/test_input.txt');

        $this->assertEquals(0, $day15->findSecondAnswer());
    }
}