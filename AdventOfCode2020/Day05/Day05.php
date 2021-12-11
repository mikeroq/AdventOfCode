<?php

namespace mikeroq\AdventOfCode\AdventOfCode2020\Day05;

use mikeroq\AdventOfCode\Shared\Day;

class Day05 extends Day
{
    protected array $seats;

    public function formatInput(): void
    {
        $this->explodeInputByNewLine();
    }

    protected function part1(): int
    {
        $this->seats = array_map(function ($a) {
            $a = str_replace(array("F", "B", "L", "R"), array(0, 1, 0, 1), $a);
            return (bindec(substr($a, 0, 7)) * 8) + bindec(substr($a, -3));
        }, $this->input);
        sort($this->seats);
        return max($this->seats);
    }

    protected function part2(): int
    {
        if (empty($this->seats)) {
            $this->part1();
        }
        for($seat=reset($this->seats); in_array($seat, $this->seats); $seat++);

        return $seat;
    }

    public function findFirstAnswer(): int
    {
        return $this->part1();
    }

    public function findSecondAnswer(): int
    {
        return $this->part2();
    }
}
