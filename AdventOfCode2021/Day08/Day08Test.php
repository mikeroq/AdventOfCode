<?php 
namespace mikeroq\AdventOfCode\AdventOfCode2021\Day08;

use PHPUnit\Framework\TestCase;

final class Day08Test extends TestCase
{
    public function testPart1ExampleEquals26(): void
    {
        $day08 = new Day08();
        $day08->importInput('AdventOfCode2021/Day08/test_input.txt');

        $this->assertEquals(26, $day08->findFirstAnswer());
    }

    public function testPart2ExampleEquals61229(): void
    {
        $day08 = new Day08();
        $day08->importInput('AdventOfCode2021/Day08/test_input2.txt');

        $this->assertEquals(61229, $day08->findSecondAnswer());
    }
}