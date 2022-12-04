<?php

namespace mikeroq\AdventOfCode\AdventOfCode2022\Day02;

use PHPUnit\Framework\TestCase;

final class Day02Test extends TestCase
{
    public function testPart1ExampleEquals15(): void
    {
        $day02 = new Day02();
        $day02->importInput('AdventOfCode2022/Day02/test_input.txt');

        $this->assertEquals(15, $day02->findFirstAnswer());
    }

    public function testPart1Equals10941(): void
    {
        $day02 = new Day02();
        $day02->importInput('AdventOfCode2022/Day02/input.txt');

        $this->assertEquals(10941, $day02->findFirstAnswer());
    }

    public function testPart2ExampleEquals12(): void
    {
        $day02 = new Day02();
        $day02->importInput('AdventOfCode2022/Day02/test_input.txt');

        $this->assertEquals(12, $day02->findSecondAnswer());
    }

    public function testPart2Equals13071(): void
    {
        $day02 = new Day02();
        $day02->importInput('AdventOfCode2022/Day02/input.txt');

        $this->assertEquals(13071, $day02->findSecondAnswer());
    }
}