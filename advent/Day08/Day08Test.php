<?php 
namespace pwnstar\AdventOfCode2021\Day08;

use PHPUnit\Framework\TestCase;

final class Day08Test extends TestCase
{
    public function testPart1Equals0(): void
    {
        $day08 = new Day08();
        $day08->importInput('advent/Day08/test_input.txt');

        $this->assertEquals(0, $day08->findFirstAnswer());
    }
}