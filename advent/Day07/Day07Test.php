<?php 
namespace pwnstar\AdventOfCode2021\Day07;

use PHPUnit\Framework\TestCase;

final class Day07Test extends TestCase
{
    public function testPart1Equals0(): void
    {
        $day07 = new Day07();
        $day07->importInput('advent/Day07/test_input.txt');

        $this->assertEquals(0, $day07->findFirstAnswer());
    }
}