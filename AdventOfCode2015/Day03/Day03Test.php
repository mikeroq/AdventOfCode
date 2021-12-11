<?php 
namespace mikeroq\AdventOfCode\AdventOfCode2015\Day03;

use PHPUnit\Framework\TestCase;

final class Day03Test extends TestCase
{
    public function testPart1FirstExampleEquals2(): void
    {
        $day03 = new Day03();
        $day03->importInput(">", true);

        $this->assertEquals(2, $day03->findFirstAnswer());
    }

    public function testPart1SecondExampleEquals4(): void
    {
        $day03 = new Day03();
        $day03->importInput("^>v<", true);
        $this->assertEquals(4, $day03->findFirstAnswer());
    }

    public function testPart1ThirdExampleEquals2(): void
    {
        $day03 = new Day03();
        $day03->importInput("^v^v^v^v^v", true);

        $this->assertEquals(2, $day03->findFirstAnswer());
    }

    public function testPart2SecondExampleEquals3(): void
    {
        $day03 = new Day03();
        $day03->importInput("^>v<", true);

        $this->assertEquals(3, $day03->findSecondAnswer());
    }

    public function testPart2ThirdExampleEquals11(): void
    {
        $day03 = new Day03();
        $day03->importInput("^v^v^v^v^v", true);

        $this->assertEquals(11, $day03->findSecondAnswer());
    }

}