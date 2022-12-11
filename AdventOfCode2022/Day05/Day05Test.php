<?php

namespace mikeroq\AdventOfCode\AdventOfCode2022\Day05;

use PHPUnit\Framework\TestCase;

final class Day05Test extends TestCase
{
    public function testPart1ExampleEqualsCMZ(): void
    {
        $day05 = new Day05();
        $day05->importInput('AdventOfCode2022/Day05/test_input.txt');

        $this->assertEquals('CMZ', $day05->findFirstAnswer());
    }

    public function testPart2ExampleEqualsMCD(): void
    {
        $day05 = new Day05();
        $day05->importInput('AdventOfCode2022/Day05/test_input.txt');

        $this->assertEquals('MCD', $day05->findSecondAnswer());
    }
}