<?php 
namespace pwnstar\AdventOfCode2021\Day04;

use PHPUnit\Framework\TestCase;

final class Day04Test extends TestCase
{
    public function testPart1Equals0(): void
    {
        $day04 = new Day04();
        $day04->importInput('advent/Day04/test_input.txt');

        $this->assertEquals(0, $day04->findFirstAnswer());
    }
}