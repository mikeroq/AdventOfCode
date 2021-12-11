<?php 
namespace mikeroq\AdventOfCode\AdventOfCode2021\Day05;

use PHPUnit\Framework\TestCase;

final class Day05Test extends TestCase
{
    public function testPart1ExampleEquals5(): void
    {
        $day05 = new Day05();
        $day05->importInput('AdventOfCode2021/Day05/test_input.txt');

        $this->assertEquals(5, $day05->findFirstAnswer());
    }

    public function testPart1RealAnswerEquals7473(): void
    {
        $day05 = new Day05();
        $day05->importInput('AdventOfCode2021/Day05/input.txt');

        $this->assertEquals(7473, $day05->findFirstAnswer());
    }

    public function testPart2ExampleEquals12(): void
    {
        $day05 = new Day05();
        $day05->importInput('AdventOfCode2021/Day05/test_input.txt');

        $this->assertEquals(12, $day05->findSecondAnswer());
    }

    public function testPart2RealAnswerEquals24164(): void
    {
        $day05 = new Day05();
        $day05->importInput('AdventOfCode2021/Day05/input.txt');

        $this->assertEquals(24164, $day05->findSecondAnswer());
    }
}