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

    protected function findIncreased($input): void
    {
        foreach ($input as $key=>$depth) {
            if ($key == 0) {
                continue;
            } else {
                if ($depth > $input[$key-1]) {
                    $this->increaseCount++;
                }
            }
        }
    }

    protected function slidingWindowCalc(): void
    {
        $this->increaseCount = 0;
        foreach ($this->input as $key=>$depth) {
            if ($key == 0) {
                continue;
            } elseif ($key == count($this->input)-1) {
                break;
            } else {
                @$sum = $this->input[$key-1] + $depth + $this->input[$key+1];
                array_push($this->sumArray, $sum);
            }
        }
        $this->findIncreased($this->sumArray);
    }

    public function findFirstAnswer(): int
    {
        $this->findIncreased($this->input);
        return $this->increaseCount;
    }

    public function findSecondAnswer(): int
    {
        $this->slidingWindowCalc();
        return $this->increaseCount;
    }
}
