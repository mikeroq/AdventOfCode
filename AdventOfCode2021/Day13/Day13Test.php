<?php 
namespace mikeroq\AdventOfCode\AdventOfCode2021\Day13;

use PHPUnit\Framework\TestCase;

final class Day13Test extends TestCase
{
    public function testPart1Equals0(): void
    {
        $day13 = new Day13();
        $day13->importInput('AdventOfCode2021/Day13/test_input.txt');

        $this->assertEquals(0, $day13->findFirstAnswer());
    }
}