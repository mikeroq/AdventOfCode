<?php

namespace pwnstar\AdventOfCode2021\Day01;

use pwnstar\AdventOfCode2021\Day;

class Day01 extends Day
{
    private int $increaseCount = 0;

    protected function formatInput(): void
    {
        $this->explodeInputByNewLine();
    }

    protected function findIncreasedDepth(array $input): int
    {
        for ($i = 0; $i < count($input)-1; $i++) {
            if ($input[$i+1] > $input[$i]) {
                $this->increaseCount++;
            }
        }
        return $this->increaseCount;
    }

    protected function slidingWindowCalc(): int
    {
        $sumArray = [];
        for ($i = 0; $i < count($this->input)-2; $i++) {
            array_push($sumArray, ($this->input[$i] + $this->input[$i+1] + $this->input[$i+2]));
        }
        return $this->findIncreasedDepth($sumArray);
    }

    public function findFirstAnswer(): int
    {
        return $this->findIncreasedDepth($this->input);
    }

    public function findSecondAnswer(): int
    {
        return $this->slidingWindowCalc();
    }
}