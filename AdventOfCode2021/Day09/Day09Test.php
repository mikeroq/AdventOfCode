<?php 
namespace mikeroq\AdventOfCode\AdventOfCode2021\Day09;

use PHPUnit\Framework\TestCase;

final class Day09Test extends TestCase
{
    public function testPart1ExampleEquals15(): void
    {
        $day09 = new Day09();
        $day09->importInput('AdventOfCode2021/Day09/test_input.txt');

        $this->assertEquals(15, $day09->findFirstAnswer());
    }
}