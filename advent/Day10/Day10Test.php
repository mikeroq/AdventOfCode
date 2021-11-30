<?php 
namespace pwnstar\AdventOfCode2021\Day10;

use PHPUnit\Framework\TestCase;

final class Day10Test extends TestCase
{
    public function testPart1Equals0(): void
    {
        $day10 = new Day10();
        $day10->importInput('advent/Day10/test_input.txt');

        $this->assertEquals(0, $day10->findFirstAnswer());
    }
}