<?php

namespace mikeroq\AdventOfCode\AdventOfCode2022\Day20;

use PHPUnit\Framework\TestCase;

final class Day20Test extends TestCase
{
    public function testPart1Equals0(): void
    {
        $day20 = new Day20();
        $day20->importInput('AdventOfCode2022/Day20/test_input.txt');

        $this->assertEquals(0, $day20->findFirstAnswer());
    }

    public function testPart2Equals0(): void
    {
        $day20 = new Day20();
        $day20->importInput('AdventOfCode2022/Day20/test_input.txt');

        $this->assertEquals(0, $day20->findSecondAnswer());
    }
}