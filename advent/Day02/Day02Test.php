<?php 
namespace pwnstar\AdventOfCode2021\Day02;

use PHPUnit\Framework\TestCase;

final class Day02Test extends TestCase
{
    public function testPart1Equals0(): void
    {
        $day02 = new Day02();
        $day02->importInput('advent/Day02/test_input.txt');

        $this->assertEquals(0, $day02->findFirstAnswer());
    }
}