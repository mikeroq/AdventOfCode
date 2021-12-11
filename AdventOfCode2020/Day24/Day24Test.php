<?php

namespace mikeroq\AdventOfCode\AdventOfCode2020\Day24;

use PHPUnit\Framework\TestCase;

final class Day24Test extends TestCase
{
    public function testPart1Equals0(): void
    {
        $day24 = new Day24();
        $day24->importInput('AdventOfCode2020/Day24/test_input.txt');

        $this->assertEquals(0, $day24->findFirstAnswer());
    }

    public function testPart2Equals0(): void
    {
        $day24 = new Day24();
        $day24->importInput('AdventOfCode2020/Day24/test_input.txt');

        $this->assertEquals(0, $day24->findSecondAnswer());
    }
}