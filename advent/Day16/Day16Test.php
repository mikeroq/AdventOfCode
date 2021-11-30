<?php 
namespace pwnstar\AdventOfCode2021\Day16;

use PHPUnit\Framework\TestCase;

final class Day16Test extends TestCase
{
    public function testPart1Equals0(): void
    {
        $day16 = new Day16();
        $day16->importInput('advent/Day16/test_input.txt');

        $this->assertEquals(0, $day16->findFirstAnswer());
    }
}