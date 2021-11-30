<?php 
namespace pwnstar\AdventOfCode2021\Day05;

use PHPUnit\Framework\TestCase;

final class Day05Test extends TestCase
{
    public function testPart1Equals0(): void
    {
        $day05 = new Day05();
        $day05->importInput('advent/Day05/test_input.txt');

        $this->assertEquals(0, $day05->findFirstAnswer());
    }
}