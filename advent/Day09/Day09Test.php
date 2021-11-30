<?php 
namespace pwnstar\AdventOfCode2021\Day09;

use PHPUnit\Framework\TestCase;

final class Day09Test extends TestCase
{
    public function testPart1Equals0(): void
    {
        $day09 = new Day09();
        $day09->importInput('advent/Day09/test_input.txt');

        $this->assertEquals(0, $day09->findFirstAnswer());
    }
}