<?php 
namespace mikeroq\AdventOfCode\AdventOfCode2020\Day06;

use PHPUnit\Framework\TestCase;

final class Day06Test extends TestCase
{
    public function testPart1TestInputEquals11(): void
    {
        $Day06 = new Day06();
        $Day06->importInput('./advent/Day06/test_input.txt');

        $this->assertSame(11, $Day06->findFirstAnswer());
    }

    public function testPart2TestInputEquals6(): void
    {
        $Day06 = new Day06();
        $Day06->importInput('./advent/Day06/test_input.txt');

        $this->assertSame(6, $Day06->findSecondAnswer());
    }


    public function testPart1EqualsRealAnswer6612(): void
    {
        $Day06 = new Day06();
        $Day06->importInput('./advent/Day06/input.txt');

        $this->assertSame(6612, $Day06->findFirstAnswer());
    }

    public function testPart2EqualsRealAnswer3268(): void
    {
        $Day06 = new Day06();
        $Day06->importInput('./advent/Day06/input.txt');

        $this->assertSame(3268, $Day06->findSecondAnswer());
    }
}