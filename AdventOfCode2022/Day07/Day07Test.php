<?php

namespace mikeroq\AdventOfCode\AdventOfCode2022\Day07;

use PHPUnit\Framework\TestCase;

final class Day07Test extends TestCase
{
    public function testPart1Equals0(): void
    {
        $day07 = new Day07();
        $day07->importInput('AdventOfCode2022/Day07/test_input.txt');

        $this->assertEquals(0, $day07->findFirstAnswer());
    }

    public function testPart2Equals0(): void
    {
        $day07 = new Day07();
        $day07->importInput('AdventOfCode2022/Day07/test_input.txt');

        $this->assertEquals(0, $day07->findSecondAnswer());
    }
}