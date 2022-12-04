<?php

namespace mikeroq\AdventOfCode\AdventOfCode2022\Day03;

use PHPUnit\Framework\TestCase;

final class Day03Test extends TestCase
{
    public function testPart1Equals0(): void
    {
        $day03 = new Day03();
        $day03->importInput('AdventOfCode2022/Day03/test_input.txt');

        $this->assertEquals(0, $day03->findFirstAnswer());
    }

    public function testPart2Equals0(): void
    {
        $day03 = new Day03();
        $day03->importInput('AdventOfCode2022/Day03/test_input.txt');

        $this->assertEquals(0, $day03->findSecondAnswer());
    }
}