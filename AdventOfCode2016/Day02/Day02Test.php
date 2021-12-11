<?php

namespace mikeroq\AdventOfCode\AdventOfCode2016\Day02;

use PHPUnit\Framework\TestCase;

final class Day02Test extends TestCase
{
    public function testPart1Equals0(): void
    {
        $day02 = new Day02();
        $day02->importInput('AdventOfCode2016/Day02/test_input.txt');

        $this->assertEquals(0, $day02->findFirstAnswer());
    }

    public function testPart2Equals0(): void
    {
        $day02 = new Day02();
        $day02->importInput('AdventOfCode2016/Day02/test_input.txt');

        $this->assertEquals(0, $day02->findSecondAnswer());
    }
}