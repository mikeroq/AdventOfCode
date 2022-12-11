<?php

namespace mikeroq\AdventOfCode\AdventOfCode2022\Day04;

use PHPUnit\Framework\TestCase;

final class Day04Test extends TestCase
{
    public function testPart1ExampleEquals2(): void
    {
        $day04 = new Day04();
        $day04->importInput('AdventOfCode2022/Day04/test_input.txt');

        $this->assertEquals(2, $day04->findFirstAnswer());
    }

    public function testPart1Equals540(): void
    {
        $day04 = new Day04();
        $day04->importInput('AdventOfCode2022/Day04/input.txt');

        $this->assertEquals(540, $day04->findFirstAnswer());
    }

    public function testPart2ExampleEquals4(): void
    {
        $day04 = new Day04();
        $day04->importInput('AdventOfCode2022/Day04/test_input.txt');

        $this->assertEquals(4, $day04->findSecondAnswer());
    }

    public function testPart2Equals872(): void
    {
        $day04 = new Day04();
        $day04->importInput('AdventOfCode2022/Day04/input.txt');

        $this->assertEquals(872, $day04->findSecondAnswer());
    }
}