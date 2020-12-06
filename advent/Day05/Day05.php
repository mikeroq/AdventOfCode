<?php

namespace pwnstar\AdventOfCode2020\Day05;

use pwnstar\AdventOfCode2020\Day;

class Day05 extends Day
{
    protected array $seats;

    public function formatInput(): void
    {
        $this->explodeInputByNewLine();
    }

    protected function part1()
    {
        $this->seats = array_map(function ($a) {
            $a = str_replace(array("F", "B", "L", "R"), array(0, 1, 0, 1), $a);
            return (bindec(substr($a, 0, 7)) * 8) + bindec(substr($a, -3));
        }, $this->input);
        sort($this->seats);
        return max($this->seats);
    }

    protected function part2()
    {
        if (empty($this->seats)) {
            $this->part1();
        }
        for($seat=reset($this->seats); in_array($seat, $this->seats); $seat++);

        return $seat;
    }

    public function findFirstAnswer()
    {
        return $this->part1();
    }

    public function findSecondAnswer()
    {
        return $this->part2();
    }
}
