<?php 
namespace pwnstar\AdventOfCode2021\Day15;

use PHPUnit\Framework\TestCase;

final class Day15Test extends TestCase
{
    public function testPart1Equals0(): void
    {
        $day15 = new Day15();
        $day15->importInput('advent/Day15/test_input.txt');

        $this->assertEquals(0, $day15->findFirstAnswer());
    }
}