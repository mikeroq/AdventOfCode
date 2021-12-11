<?php 
namespace mikeroq\AdventOfCode\AdventOfCode2020\Day10;

use PHPUnit\Framework\TestCase;

final class Day10Test extends TestCase
{
    public function testPart1TestInputEquals220(): void
    {
        $Day10 = new Day10();
        $Day10->importInput('AdventOfCode2020/Day10/test_input.txt');

        $this->assertSame(220, $Day10->findFirstAnswer());
    }

    public function testPart2TestInputEquals19208(): void
    {
        $Day10 = new Day10();
        $Day10->importInput('AdventOfCode2020/Day10/test_input.txt');

        $this->assertSame(19208, $Day10->findSecondAnswer());
    }


    public function testPart1EqualsRealAnswer2470(): void
    {
        $Day10 = new Day10();
        $Day10->importInput('AdventOfCode2020/Day10/input.txt');

        $this->assertSame(2470, $Day10->findFirstAnswer());
    }

    public function testPart2EqualsRealAnswer1973822685184(): void
    {
        $Day10 = new Day10();
        $Day10->importInput('AdventOfCode2020/Day10/input.txt');

        $this->assertSame(1973822685184, $Day10->findSecondAnswer());
    }
}