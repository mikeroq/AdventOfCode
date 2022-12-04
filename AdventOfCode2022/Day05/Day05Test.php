<?php

namespace mikeroq\AdventOfCode\AdventOfCode2022\Day05;

use PHPUnit\Framework\TestCase;

final class Day05Test extends TestCase
{
    public function testPart1Equals0(): void
    {
        $day05 = new Day05();
        $day05->importInput('AdventOfCode2022/Day05/test_input.txt');

        $this->assertEquals(0, $day05->findFirstAnswer());
    }

    public function testPart2Equals0(): void
    {
        $day05 = new Day05();
        $day05->importInput('AdventOfCode2022/Day05/test_input.txt');

        $this->assertEquals(0, $day05->findSecondAnswer());
    }
}