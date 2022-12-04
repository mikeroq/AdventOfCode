<?php

namespace mikeroq\AdventOfCode\AdventOfCode2022\Day01;

use mikeroq\AdventOfCode\Shared\Day;

class Day01 extends Day
{
    protected array $elves = [];
    protected array $totalCalories = [];

    protected function formatInput(): void
    {
        $this->explodeInputByBlankLines();
        $i = 1;
        foreach ($this->input as $elf) {
            $this->elves[$i] = explode("\r\n", $elf);
            $i++;
        }
    }

    public function sortElvesByTotalCalories()
    {
        foreach($this->elves as $key => $elf) {
            $this->totalCalories[$key+1] = array_sum($elf);
        }
        arsort($this->totalCalories);
    }

    public function findHighestCalorieElf()
    {
        $this->sortElvesByTotalCalories();
        return $this->totalCalories[key($this->totalCalories)];
    }

    public function findTopThreeHighestCaloriesElves()
    {
        $this->sortElvesByTotalCalories();
        return array_sum(array_slice($this->totalCalories, 0, 3));
    }

    public function findFirstAnswer(): int
    {
        return $this->findHighestCalorieElf();
    }

    public function findSecondAnswer(): int
    {
        return $this->findTopThreeHighestCaloriesElves();
    }
}