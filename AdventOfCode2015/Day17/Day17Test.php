<?php 
namespace mikeroq\AdventOfCode\AdventOfCode2015\Day17;

use PHPUnit\Framework\TestCase;

final class Day17Test extends TestCase
{
    public function testPart1Equals0(): void
    {
        $day17 = new Day17();
        $day17->importInput('AdventOfCode2015/Day17/test_input.txt');

        $this->assertEquals(0, $day17->findFirstAnswer());
    }

    public function testPart2Equals0(): void
    {
        $day17 = new Day17();
        $day17->importInput('AdventOfCode2015/Day17/test_input.txt');

        $this->assertEquals(0, $day17->findSecondAnswer());
    }
}