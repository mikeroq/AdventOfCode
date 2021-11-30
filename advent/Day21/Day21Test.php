<?php 
namespace pwnstar\AdventOfCode2021\Day21;

use PHPUnit\Framework\TestCase;

final class Day21Test extends TestCase
{
    public function testPart1Equals0(): void
    {
        $day21 = new Day21();
        $day21->importInput('advent/Day21/test_input.txt');

        $this->assertEquals(0, $day21->findFirstAnswer());
    }
}