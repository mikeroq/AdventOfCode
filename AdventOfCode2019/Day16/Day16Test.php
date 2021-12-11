<?php

namespace mikeroq\AdventOfCode\AdventOfCode2019\Day16;

use PHPUnit\Framework\TestCase;

final class Day16Test extends TestCase
{
    public function testPart1Equals0(): void
    {
        $day16 = new Day16();
        $day16->importInput('AdventOfCode2019/Day16/test_input.txt');

        $this->assertEquals(0, $day16->findFirstAnswer());
    }

    public function testPart2Equals0(): void
    {
        $day16 = new Day16();
        $day16->importInput('AdventOfCode2019/Day16/test_input.txt');

        $this->assertEquals(0, $day16->findSecondAnswer());
    }
}