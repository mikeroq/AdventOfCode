<?php 
namespace mikeroq\AdventOfCode\AdventOfCode2020\Day01;

use PHPUnit\Framework\TestCase;

final class Day01Test extends TestCase
{
    public function testPart1Equals514579(): void 
    {
        $day01 = new Day01();
        $day01->importInput('advent/Day01/test_input.txt');

        $this->assertSame(514579, $day01->findFirstAnswer());
    }

    public function testPart2Equals241861950(): void
    {
        $day01 = new Day01();
        $day01->importInput('advent/Day01/test_input.txt');

        $this->assertSame(241861950, $day01->findSecondAnswer());
    }

    public function testPart1EqualsRealAnswer802011(): void
    {
        $day01 = new Day01();
        $day01->importInput('advent/Day01/input.txt');

        $this->assertSame(802011, $day01->findFirstAnswer());
    }

    public function testPart2EqualsRealAnswer248607374(): void
    {
        $day01 = new Day01();
        $day01->importInput('advent/Day01/input.txt');

        $this->assertSame(248607374, $day01->findSecondAnswer());
    }
}