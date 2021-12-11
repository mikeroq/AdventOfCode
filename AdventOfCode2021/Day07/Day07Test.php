<?php 
namespace mikeroq\AdventOfCode\AdventOfCode2021\Day07;

use PHPUnit\Framework\TestCase;

final class Day07Test extends TestCase
{
    public function testPart1ExampleEquals37(): void
    {
        $day07 = new Day07();
        $day07->importInput('AdventOfCode2021/Day07/test_input.txt');

        $this->assertEquals(37, $day07->findFirstAnswer());
    }

    public function testPart2ExampleEquals168(): void
    {
        $day07 = new Day07();
        $day07->importInput('AdventOfCode2021/Day07/test_input.txt');

        $this->assertEquals(168, $day07->findSecondAnswer());
    }

    public function testPart1RealAnswerEquals357353(): void
    {
        $day07 = new Day07();
        $day07->importInput('AdventOfCode2021/Day07/input.txt');

        $this->assertEquals(357353, $day07->findFirstAnswer());
    }

    public function testPart2ExampleEquals104822130(): void
    {
        $day07 = new Day07();
        $day07->importInput('AdventOfCode2021/Day07/input.txt');

        $this->assertEquals(104822130, $day07->findSecondAnswer());
    }
}