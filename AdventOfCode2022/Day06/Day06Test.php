<?php

namespace mikeroq\AdventOfCode\AdventOfCode2022\Day06;

use PHPUnit\Framework\TestCase;

final class Day06Test extends TestCase
{
    public function testPart1ExampleEquals10(): void
    {
        $day06 = new Day06();
        $day06->importInput('AdventOfCode2022/Day06/test_input.txt');

        $this->assertEquals(10, $day06->findFirstAnswer());
    }

    public function testPart2ExampleEquals29(): void
    {
        $day06 = new Day06();
        $day06->importInput('AdventOfCode2022/Day06/test_input.txt');

        $this->assertEquals(29, $day06->findSecondAnswer());
    }
}