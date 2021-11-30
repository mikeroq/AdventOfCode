<?php 
namespace pwnstar\AdventOfCode2021\Day06;

use PHPUnit\Framework\TestCase;

final class Day06Test extends TestCase
{
    public function testPart1Equals0(): void
    {
        $day06 = new Day06();
        $day06->importInput('advent/Day06/test_input.txt');

        $this->assertEquals(0, $day06->findFirstAnswer());
    }
}