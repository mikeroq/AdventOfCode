<?php 
namespace mikeroq\AdventOfCode\AdventOfCode2015\Day05;

use PHPUnit\Framework\TestCase;

final class Day05Test extends TestCase
{
    public function testThatTwoExampleStringsAreNice(): void
    {
        $day05 = new Day05();
        $day05->importInput('AdventOfCode2015/Day05/test_input.txt');

        $this->assertEquals(2, $day05->findFirstAnswer());
    }

    public function testPart2ThatTwoExampleStringsAreNice(): void
    {
        $day05 = new Day05();
        $day05->importInput('AdventOfCode2015/Day05/test_input2.txt');

        $this->assertEquals(2, $day05->findSecondAnswer());
    }
}