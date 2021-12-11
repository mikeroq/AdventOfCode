<?php 
namespace mikeroq\AdventOfCode\AdventOfCode2020\Day07;

use PHPUnit\Framework\TestCase;

final class Day07Test extends TestCase
{
    public function testPart1TestInputEquals11(): void
    {
        $Day07 = new Day07();
        $Day07->importInput('./advent/Day07/test_input.txt');

        $this->assertSame(11, $Day07->findFirstAnswer());
    }

    public function testPart2TestInputEquals6(): void
    {
        $Day07 = new Day07();
        $Day07->importInput('./advent/Day07/test_input.txt');

        $this->assertSame(6, $Day07->findSecondAnswer());
    }


    public function testPart1EqualsRealAnswer6612(): void
    {
        $Day07 = new Day07();
        $Day07->importInput('./advent/Day07/input.txt');

        $this->assertSame(6612, $Day07->findFirstAnswer());
    }

    public function testPart2EqualsRealAnswer3268(): void
    {
        $Day07 = new Day07();
        $Day07->importInput('./advent/Day07/input.txt');

        $this->assertSame(3268, $Day07->findSecondAnswer());
    }
}