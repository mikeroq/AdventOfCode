<?php

namespace mikeroq\AdventOfCode\AdventOfCode2022\Day10;

use PHPUnit\Framework\TestCase;

final class Day10Test extends TestCase
{
    public function testPart1ExampleEquals13140(): void
    {
        $day10 = new Day10();
        $day10->importInput('AdventOfCode2022/Day10/test_input.txt');

        $this->assertEquals(13140, $day10->findFirstAnswer());
    }

    public function testPart2Equals0(): void
    {
        $day10 = new Day10();
        $day10->importInput('AdventOfCode2022/Day10/test_input.txt');

        $this->assertEquals(0, $day10->findSecondAnswer());
    }
}