<?php

namespace mikeroq\AdventOfCode\AdventOfCode2017\Day19;

use PHPUnit\Framework\TestCase;

final class Day19Test extends TestCase
{
    public function testPart1Equals0(): void
    {
        $day19 = new Day19();
        $day19->importInput('AdventOfCode2017/Day19/test_input.txt');

        $this->assertEquals(0, $day19->findFirstAnswer());
    }

    public function testPart2Equals0(): void
    {
        $day19 = new Day19();
        $day19->importInput('AdventOfCode2017/Day19/test_input.txt');

        $this->assertEquals(0, $day19->findSecondAnswer());
    }
}