<?php 
namespace mikeroq\AdventOfCode\AdventOfCode2021\Day04;

use PHPUnit\Framework\TestCase;

final class Day04Test extends TestCase
{
    public function testPart1ExampleEquals4512(): void
    {
        $day04 = new Day04();
        $day04->importInput('AdventOfCode2021/Day04/test_input.txt');

        $this->assertEquals(4512, $day04->findFirstAnswer());
    }

    public function testPart2ExampleEquals1924(): void
    {
        $day04 = new Day04();
        $day04->importInput('AdventOfCode2021/Day04/test_input.txt');

        $this->assertEquals(1924, $day04->findSecondAnswer());
    }

    public function testPart1RealAnswerEquals10680(): void
    {
        $day04 = new Day04();
        $day04->importInput('AdventOfCode2021/Day04/input.txt');

        $this->assertEquals(10680, $day04->findFirstAnswer());
    }

    public function testPart2RealAnswerEquals31892(): void
    {
        $day04 = new Day04();
        $day04->importInput('AdventOfCode2021/Day04/input.txt');

        $this->assertEquals(31892, $day04->findSecondAnswer());
    }
}