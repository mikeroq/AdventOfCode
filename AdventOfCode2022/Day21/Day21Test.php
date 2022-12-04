<?php

namespace mikeroq\AdventOfCode\AdventOfCode2022\Day21;

use PHPUnit\Framework\TestCase;

final class Day21Test extends TestCase
{
    public function testPart1Equals0(): void
    {
        $day21 = new Day21();
        $day21->importInput('AdventOfCode2022/Day21/test_input.txt');

        $this->assertEquals(0, $day21->findFirstAnswer());
    }

    public function testPart2Equals0(): void
    {
        $day21 = new Day21();
        $day21->importInput('AdventOfCode2022/Day21/test_input.txt');

        $this->assertEquals(0, $day21->findSecondAnswer());
    }
}