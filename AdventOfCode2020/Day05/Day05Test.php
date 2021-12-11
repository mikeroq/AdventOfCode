<?php 
namespace mikeroq\AdventOfCode\AdventOfCode2020\Day05;

use PHPUnit\Framework\TestCase;

final class Day05Test extends TestCase
{
    public function testDecodeTestBoardingPassesHighest820(): void
    {
        $Day05 = new Day05();
        $Day05->importInput('AdventOfCode2020/Day05/test_input.txt');

        $this->assertSame(820, $Day05->findFirstAnswer());
    }

    public function testPart1AnswerEqualsRealAnswer991(): void
    {
        $Day05 = new Day05();
        $Day05->importInput('AdventOfCode2020/Day05/input.txt');

        $this->assertSame(991, $Day05->findFirstAnswer());
    }

    public function testPart2AnswerEqualsRealAnswer534(): void
    {
        $Day05 = new Day05();
        $Day05->importInput('AdventOfCode2020/Day05/input.txt');

        $this->assertSame(534, $Day05->findSecondAnswer());
    }
}