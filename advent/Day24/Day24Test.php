<?php 
namespace pwnstar\AdventOfCode2021\Day24;

use PHPUnit\Framework\TestCase;

final class Day24Test extends TestCase
{
    public function testPart1Equals0(): void
    {
        $day24 = new Day24();
        $day24->importInput('advent/Day24/test_input.txt');

        $this->assertEquals(0, $day24->findFirstAnswer());
    }
}