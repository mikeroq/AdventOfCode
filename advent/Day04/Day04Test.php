<?php 
namespace pwnstar\AdventOfCode2021\Day04;

use PHPUnit\Framework\TestCase;

final class Day04Test extends TestCase
{
    public function testPart1ExampleEquals4512(): void
    {
        $day04 = new Day04();
        $day04->importInput('advent/Day04/test_input.txt');

        $this->assertEquals(4512, $day04->findFirstAnswer());
    }

    public function testPart2ExampleEquals1924(): void
    {
        $day04 = new Day04();
        $day04->importInput('advent/Day04/test_input.txt');

        $this->assertEquals(1924, $day04->findSecondAnswer());
    }
}