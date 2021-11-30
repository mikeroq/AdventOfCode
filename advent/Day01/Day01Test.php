<?php 
namespace pwnstar\AdventOfCode2021\Day01;

use PHPUnit\Framework\TestCase;

final class Day01Test extends TestCase
{
    public function testPart1Equals0(): void
    {
        $day01 = new Day01();
        $day01->importInput('advent/Day01/test_input.txt');

        $this->assertEquals(0, $day01->findFirstAnswer());
    }
}