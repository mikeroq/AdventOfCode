<?php

namespace mikeroq\AdventOfCode\AdventOfCode2016\Day23;

use PHPUnit\Framework\TestCase;

final class Day23Test extends TestCase
{
    public function testPart1Equals0(): void
    {
        $day23 = new Day23();
        $day23->importInput('AdventOfCode2016/Day23/test_input.txt');

        $this->assertEquals(0, $day23->findFirstAnswer());
    }

    public function testPart2Equals0(): void
    {
        $day23 = new Day23();
        $day23->importInput('AdventOfCode2016/Day23/test_input.txt');

        $this->assertEquals(0, $day23->findSecondAnswer());
    }
}