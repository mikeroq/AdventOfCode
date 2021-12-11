<?php 
namespace mikeroq\AdventOfCode\AdventOfCode2020\Day08;

use PHPUnit\Framework\TestCase;

final class Day08Test extends TestCase
{
    public function testPart1TestInputEquals5(): void
    {
        $Day08 = new Day09();
        $Day08->importInput('./advent/Day08/test_input.txt');

        $this->assertSame(5, $Day08->findFirstAnswer());
    }

    public function testPart2TestInputEquals8(): void
    {
        $Day08 = new Day09();
        $Day08->importInput('./advent/Day08/test_input.txt');

        $this->assertSame(8, $Day08->findSecondAnswer());
    }


    public function testPart1EqualsRealAnswer1594(): void
    {
        $Day08 = new Day09();
        $Day08->importInput('./advent/Day08/input.txt');

        $this->assertSame(1594, $Day08->findFirstAnswer());
    }

    public function testPart2EqualsRealAnswer758(): void
    {
        $Day08 = new Day09();
        $Day08->importInput('./advent/Day08/input.txt');

        $this->assertSame(758, $Day08->findSecondAnswer());
    }
}