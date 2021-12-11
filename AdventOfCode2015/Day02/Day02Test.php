<?php 
namespace mikeroq\AdventOfCode\AdventOfCode2015\Day02;

use PHPUnit\Framework\TestCase;

final class Day02Test extends TestCase
{
    // total is 101
    public function testPart1Equals101(): void
    {
        $day02 = new Day02();
        $day02->importInput('AdventOfCode2015/Day02/test_input.txt');

        $this->assertEquals(101, $day02->findFirstAnswer());
    }

    public function testPart2Equals48(): void
    {
        $day02 = new Day02();
        $day02->importInput('AdventOfCode2015/Day02/test_input.txt');

        $this->assertEquals(48, $day02->findSecondAnswer());
    }

}