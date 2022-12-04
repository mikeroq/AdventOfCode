<?php

namespace mikeroq\AdventOfCode\AdventOfCode2022\Day04;

use PHPUnit\Framework\TestCase;

final class Day04Test extends TestCase
{
    public function testPart1Equals0(): void
    {
        $day04 = new Day04();
        $day04->importInput('AdventOfCode2022/Day04/test_input.txt');

        $this->assertEquals(0, $day04->findFirstAnswer());
    }

    public function testPart2Equals0(): void
    {
        $day04 = new Day04();
        $day04->importInput('AdventOfCode2022/Day04/test_input.txt');

        $this->assertEquals(0, $day04->findSecondAnswer());
    }
}