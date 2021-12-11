<?php 
namespace mikeroq\AdventOfCode\AdventOfCode2021\Day02;

use PHPUnit\Framework\TestCase;

final class Day02Test extends TestCase
{
    public function testPart1ExampleEquals150(): void
    {
        $day02 = new Day02();
        $day02->importInput('AdventOfCode2021/Day02/test_input.txt');

        $this->assertEquals(150, $day02->findFirstAnswer());
    }

    public function testPart2ExampleEquals900(): void
    {
        $day02 = new Day02();
        $day02->importInput('AdventOfCode2021/Day02/test_input.txt');

        $this->assertEquals(900, $day02->findSecondAnswer());
    }

    public function testPart1RealAnswerEquals1488669(): void
    {
        $day02 = new Day02();
        $day02->importInput('AdventOfCode2021/Day02/input.txt');

        $this->assertEquals(1488669, $day02->findFirstAnswer());
    }

    public function testPart2RealAnswerEquals1176514794(): void
    {
        $day02 = new Day02();
        $day02->importInput('AdventOfCode2021/Day02/input.txt');

        $this->assertEquals(1176514794, $day02->findSecondAnswer());
    }
}