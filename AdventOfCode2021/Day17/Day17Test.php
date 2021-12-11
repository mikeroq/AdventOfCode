<?php 
namespace mikeroq\AdventOfCode\AdventOfCode2021\Day17;

use PHPUnit\Framework\TestCase;

final class Day17Test extends TestCase
{
    public function testPart1Equals0(): void
    {
        $day17 = new Day17();
        $day17->importInput('AdventOfCode2021/Day17/test_input.txt');

        $this->assertEquals(0, $day17->findFirstAnswer());
    }
}