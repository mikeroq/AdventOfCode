<?php 
namespace pwnstar\AdventOfCode2021\Day02;

use PHPUnit\Framework\TestCase;

final class Day02Test extends TestCase
{
    public function testPart1ExampleEquals150(): void
    {
        $day02 = new Day02();
        $day02->importInput('advent/Day02/test_input.txt');

        $this->assertEquals(150, $day02->findFirstAnswer());
    }

    public function testPart2ExampleEquals900(): void
    {
        $day02 = new Day02();
        $day02->importInput('advent/Day02/test_input.txt');

        $this->assertEquals(900, $day02->findSecondAnswer());
    }
}