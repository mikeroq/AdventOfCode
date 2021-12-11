<?php 
namespace mikeroq\AdventOfCode\AdventOfCode2020\Day04;

use PHPUnit\Framework\TestCase;

final class Day04Test extends TestCase
{
    public function testValidPassportsEquals2WithTestList(): void
    {
        $Day04 = new Day04();
        $Day04->importInput('./advent/Day04/test_input.txt');

        $this->assertSame(2, $Day04->findFirstAnswer());
    }

    public function testValidPassportsEquals4WithAllValidList(): void
    {
        $Day04 = new Day04();
        $Day04->importInput('./advent/Day04/test_valid_passports.txt');

        $this->assertSame(4, $Day04->findSecondAnswer());
    }

    public function testValidPassportsEquals0WithAllInvalidList(): void
    {
        $Day04 = new Day04();
        $Day04->importInput('./advent/Day04/test_invalid_passports.txt');

        $this->assertSame(0, $Day04->findSecondAnswer());
    }
    public function testValidPassportsEqualsRealAnswer(): void
    {
        $Day04 = new Day04();
        $Day04->importInput('./advent/Day04/input.txt');

        $this->assertSame(156, $Day04->findSecondAnswer());
    }
}