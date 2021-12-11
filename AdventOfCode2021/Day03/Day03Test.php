<?php 
namespace mikeroq\AdventOfCode\AdventOfCode2021\Day03;

use PHPUnit\Framework\TestCase;

final class Day03Test extends TestCase
{
    public function testPart1ExampleEquals198(): void
    {
        $day03 = new Day03();
        $day03->importInput('AdventOfCode2021/Day03/test_input.txt');

        $this->assertEquals(198, $day03->findFirstAnswer());
    }

    public function testPart2ExampleEquals230(): void
    {
        $day03 = new Day03();
        $day03->importInput('AdventOfCode2021/Day03/test_input.txt');

        $this->assertEquals(230, $day03->findSecondAnswer());
    }

    public function testPart1RealAnswerEquals3882564(): void
    {
        $day03 = new Day03();
        $day03->importInput('AdventOfCode2021/Day03/input.txt');

        $this->assertEquals(3882564, $day03->findFirstAnswer());
    }

    public function testPart2RealAnswerEquals3385170(): void
    {
        $day03 = new Day03();
        $day03->importInput('AdventOfCode2021/Day03/input.txt');

        $this->assertEquals(3385170, $day03->findSecondAnswer());
    }
}