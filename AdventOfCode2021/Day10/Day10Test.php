<?php 
namespace mikeroq\AdventOfCode\AdventOfCode2021\Day10;

use PHPUnit\Framework\TestCase;

final class Day10Test extends TestCase
{
    public function testPart1ExampleEquals26397(): void
    {
        $day10 = new Day10();
        $day10->importInput('AdventOfCode2021/Day10/test_input.txt');

        $this->assertEquals(26397, $day10->findFirstAnswer());
    }

    public function testPart2ExampleEquals288957(): void
    {
        $day10 = new Day10();
        $day10->importInput('AdventOfCode2021/Day10/test_input.txt');

        $this->assertEquals(288957, $day10->findSecondAnswer());
    }
}