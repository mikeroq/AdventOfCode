<?php 
namespace mikeroq\AdventOfCode\AdventOfCode2021\Day06;

use PHPUnit\Framework\TestCase;

final class Day06Test extends TestCase
{
    public function testPart1ExampleEquals5934(): void
    {
        $day06 = new Day06();
        $day06->importInput('AdventOfCode2021/Day06/test_input.txt');

        $this->assertEquals(5934, $day06->findFirstAnswer());
    }

    public function testPart2ExampleEquals26984457539(): void
    {
        $day06 = new Day06();
        $day06->importInput('AdventOfCode2021/Day06/test_input.txt');

        $this->assertEquals(26984457539, $day06->findSecondAnswer());
    }

    public function testPart1RealAnswerEquals396210(): void
    {
        $day06 = new Day06();
        $day06->importInput('AdventOfCode2021/Day06/input.txt');

        $this->assertEquals(396210, $day06->findFirstAnswer());
    }

    public function testPart2RealAnswerEquals1770823541496(): void
    {
        $day06 = new Day06();
        $day06->importInput('AdventOfCode2021/Day06/input.txt');

        $this->assertEquals(1770823541496, $day06->findSecondAnswer());
    }
}