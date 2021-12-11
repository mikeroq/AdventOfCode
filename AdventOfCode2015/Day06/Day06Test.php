<?php 
namespace mikeroq\AdventOfCode\AdventOfCode2015\Day06;

use PHPUnit\Framework\TestCase;

final class Day06Test extends TestCase
{
    public function testPart1ExampleLightsOnEquals998996(): void
    {
        $day06 = new Day06();
        $day06->importInput('AdventOfCode2015/Day06/test_input.txt');

        $this->assertEquals(998996, $day06->findFirstAnswer());
    }

    public function testPart2ExampleLightBrightnessTotalEquals2000001(): void
    {
        $day06 = new Day06();
        $day06->importInput('AdventOfCode2015/Day06/test_input2.txt');

        $this->assertEquals(2000001, $day06->findSecondAnswer());
    }

    public function testPart1RealAnswerEquals400410(): void
    {
        $day06 = new Day06();
        $day06->importInput('AdventOfCode2015/Day06/input.txt');

        $this->assertEquals(400410, $day06->findFirstAnswer());
    }

    public function testPart2RealAnswerEquals15343601(): void
    {
        $day06 = new Day06();
        $day06->importInput('AdventOfCode2015/Day06/input.txt');

        $this->assertEquals(15343601, $day06->findSecondAnswer());
    }
}