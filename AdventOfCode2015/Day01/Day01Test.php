<?php 
namespace mikeroq\AdventOfCode\AdventOfCode2015\Day01;

use PHPUnit\Framework\TestCase;

final class Day01Test extends TestCase
{
    public function testPart1ExampleFiveEquals3(): void
    {
        $day01 = new Day01();
        $day01->importInput("))(((((", true);

        $this->assertEquals(3, $day01->findFirstAnswer());
    }

    public function testPart1ExampleThreeEqualsNegative3(): void
    {
        $day01 = new Day01();
        $day01->importInput(")())())", true);

        $this->assertEquals(-3, $day01->findFirstAnswer());
    }

    public function testPart1ExampleOneEquals0(): void
    {
        $day01 = new Day01();
        $day01->importInput("()()", true);

        $this->assertEquals(0, $day01->findFirstAnswer());
    }

    public function testPart2ExampleOneCharacterEquals1(): void
    {
        $day01 = new Day01();
        $day01->importInput(")", true);

        $this->assertEquals(1, $day01->findSecondAnswer());
    }

    public function testPart2ExampleTwoCharacterEquals5(): void
    {
        $day01 = new Day01();
        $day01->importInput("()())", true);

        $this->assertEquals(5, $day01->findSecondAnswer());
    }

//    public function testPart1RealAnswerEquals74(): void
//    {
//        $day01 = new Day01();
//        $day01->importInput("AdventOfCode2015/day01/input.txt");
//
//        $this->assertEquals(74, $day01->findFirstAnswer());
//    }
//
//    public function testPart2RealAnswerEquals1795(): void
//    {
//        $day01 = new Day01();
//        $day01->importInput("AdventOfCode2015/day01/input.txt");
//
//        $this->assertEquals(1795, $day01->findSecondAnswer());
//    }

}