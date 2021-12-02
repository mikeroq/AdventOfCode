<?php

namespace pwnstar\AdventOfCode2021\Day01;

use pwnstar\AdventOfCode2021\Day;

class Day01 extends Day
{
    private int $increaseCount = 0;
    private array $sumArray = [];

    protected function formatInput(): void
    {
        $this->explodeInputByNewLine();
    }

    protected function findIncreasedDepth(array $input): void
    {
        for ($i = 0; $i < count($input)-1; $i++) {
            if ($input[$i+1] > $input[$i]) {
                $this->increaseCount++;
            }
        }
    }

    protected function slidingWindowCalc(): void
    {
        for ($i = 0; $i < count($this->input)-2; $i++) {
            array_push($this->sumArray, ($this->input[$i] + $this->input[$i+1] + $this->input[$i+2]));
        }
        $this->findIncreasedDepth($this->sumArray);
    }

    public function findFirstAnswer(): int
    {
        $this->findIncreasedDepth($this->input);
        return $this->increaseCount;
    }

    public function findSecondAnswer(): int
    {
        $this->slidingWindowCalc();
        return $this->increaseCount;
    }
}