<?php 
namespace pwnstar\AdventOfCode2021\Day03;

use PHPUnit\Framework\TestCase;

final class Day03Test extends TestCase
{
    public function testPart1Equals0(): void
    {
        $day03 = new Day03();
        $day03->importInput('advent/Day03/test_input.txt');

        $this->assertEquals(0, $day03->findFirstAnswer());
    }
}