<?php 
namespace mikeroq\AdventOfCode\AdventOfCode2015\Day04;

use PHPUnit\Framework\TestCase;

final class Day04Test extends TestCase
{
    public function testPart1Equals609043(): void
    {
        $day04 = new Day04();
        $day04->importInput("abcdef", true);

        $this->assertEquals(609043, $day04->findFirstAnswer());
    }

    public function testPart1Equals1048970(): void
    {
        $day04 = new Day04();
        $day04->importInput("pqrstuv", true);

        $this->assertEquals(1048970, $day04->findfirstAnswer());
    }

    public function testPart1RealAnswerEquals117946(): void
    {
        $day04 = new Day04();
        $day04->importInput("AdventOfCode2015/day04/input.txt");

        $this->assertEquals(117946, $day04->findFirstAnswer());
    }

    public function testPart12RealAnswerEquals3938038(): void
    {
        $day04 = new Day04();
        $day04->importInput("AdventOfCode2015/day04/input.txt");

        $this->assertEquals(3938038, $day04->findSecondAnswer());
    }
}