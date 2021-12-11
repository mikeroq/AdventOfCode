<?php 
namespace mikeroq\AdventOfCode\AdventOfCode2021\Day01;

use PHPUnit\Framework\TestCase;

final class Day01Test extends TestCase
{
    public function testPart1ExampleEquals7(): void
    {
        $day01 = new Day01();
        $day01->importInput('AdventOFCode2021/Day01/test_input.txt');

        $this->assertEquals(7, $day01->findFirstAnswer());
    }

    public function testPart2ExampleEquals5(): void
    {
        $day01 = new Day01();
        $day01->importInput('AdventOFCode2021/Day01/test_input.txt');

        $this->assertEquals(5, $day01->findSecondAnswer());
    }

    public function testPart1RealAnswerEquals1713(): void
    {
        $day01 = new Day01();
        $day01->importInput('AdventOFCode2021/Day01/input.txt');

        $this->assertEquals(1713, $day01->findFirstAnswer());
    }

    public function testPart2RealAnswerEquals1734(): void
    {
        $day01 = new Day01();
        $day01->importInput('AdventOFCode2021/Day01/input.txt');

        $this->assertEquals(1734, $day01->findSecondAnswer());
    }
}