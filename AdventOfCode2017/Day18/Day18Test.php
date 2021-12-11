<?php

namespace mikeroq\AdventOfCode\AdventOfCode2017\Day18;

use PHPUnit\Framework\TestCase;

final class Day18Test extends TestCase
{
    public function testPart1Equals0(): void
    {
        $day18 = new Day18();
        $day18->importInput('AdventOfCode2017/Day18/test_input.txt');

        $this->assertEquals(0, $day18->findFirstAnswer());
    }

    public function testPart2Equals0(): void
    {
        $day18 = new Day18();
        $day18->importInput('AdventOfCode2017/Day18/test_input.txt');

        $this->assertEquals(0, $day18->findSecondAnswer());
    }
}