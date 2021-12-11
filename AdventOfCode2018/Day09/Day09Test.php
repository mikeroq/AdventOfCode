<?php

namespace mikeroq\AdventOfCode\AdventOfCode2018\Day09;

use PHPUnit\Framework\TestCase;

final class Day09Test extends TestCase
{
    public function testPart1Equals0(): void
    {
        $day09 = new Day09();
        $day09->importInput('AdventOfCode2018/Day09/test_input.txt');

        $this->assertEquals(0, $day09->findFirstAnswer());
    }

    public function testPart2Equals0(): void
    {
        $day09 = new Day09();
        $day09->importInput('AdventOfCode2018/Day09/test_input.txt');

        $this->assertEquals(0, $day09->findSecondAnswer());
    }
}