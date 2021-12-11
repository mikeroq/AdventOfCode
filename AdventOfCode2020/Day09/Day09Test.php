<?php 
namespace mikeroq\AdventOfCode\AdventOfCode2020\Day09;

use PHPUnit\Framework\TestCase;

final class Day09Test extends TestCase
{
    public function testPart1TestInputEquals5(): void
    {
        $Day09 = new Day09();
        $Day09->importInput('./advent/Day09/test_input.txt');

        $this->assertSame(5, $Day09->findFirstAnswer());
    }

    public function testPart2TestInputEquals8(): void
    {
        $Day09 = new Day09();
        $Day09->importInput('./advent/Day09/test_input.txt');

        $this->assertSame(8, $Day09->findSecondAnswer());
    }


    public function testPart1EqualsRealAnswer1594(): void
    {
        $Day09 = new Day09();
        $Day09->importInput('./advent/Day09/input.txt');

        $this->assertSame(1594, $Day09->findFirstAnswer());
    }

    public function testPart2EqualsRealAnswer758(): void
    {
        $Day09 = new Day09();
        $Day09->importInput('./advent/Day09/input.txt');

        $this->assertSame(758, $Day09->findSecondAnswer());
    }
}