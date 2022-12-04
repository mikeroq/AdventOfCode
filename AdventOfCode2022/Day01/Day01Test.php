<?php

namespace mikeroq\AdventOfCode\AdventOfCode2022\Day01;

use PHPUnit\Framework\TestCase;

final class Day01Test extends TestCase
{
    public function testPart1ExampleEquals24000(): void
    {
        $day01 = new Day01();
        $day01->importInput('AdventOfCode2022/Day01/test_input.txt');

        $this->assertEquals(24000, $day01->findFirstAnswer());
    }

    public function testPart1Equals74198(): void
    {
        $day01 = new Day01();
        $day01->importInput('AdventOfCode2022/Day01/input.txt');

        $this->assertEquals(74198, $day01->findFirstAnswer());
    }

    public function testPart2ExampleEquals45000(): void
    {
        $day01 = new Day01();
        $day01->importInput('AdventOfCode2022/Day01/test_input.txt');

        $this->assertEquals(45000, $day01->findSecondAnswer());
    }

    public function testPart2Equals209914(): void
    {
        $day01 = new Day01();
        $day01->importInput('AdventOfCode2022/Day01/input.txt');

        $this->assertEquals(209914, $day01->findSecondAnswer());
    }
}