<?php 
namespace mikeroq\AdventOfCode\AdventOfCode2021\Day11;

use PHPUnit\Framework\TestCase;

final class Day11Test extends TestCase
{
    public function testPart1Equals1656(): void
    {
        $day11 = new Day11();
        $day11->importInput('AdventOfCode2021/Day11/test_input.txt');

        $this->assertEquals(1656, $day11->findFirstAnswer());
    }

    public function testPart2Equals368(): void
    {
        $day11 = new Day11();
        $day11->importInput('AdventOfCode2021/Day11/test_input.txt');

        $this->assertEquals(195, $day11->findSecondAnswer());
    }

    public function testPart1RealAnswerEquals1601(): void
    {
        $day11 = new Day11();
        $day11->importInput('AdventOfCode2021/Day11/input.txt');

        $this->assertEquals(1601, $day11->findFirstAnswer());
    }

    public function testPart2RealAnswerEquals368(): void
    {
        $day11 = new Day11();
        $day11->importInput('AdventOfCode2021/Day11/input.txt');

        $this->assertEquals(368, $day11->findSecondAnswer());
    }
}