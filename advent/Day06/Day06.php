<?php

namespace pwnstar\AdventOfCode2021\Day06;

use pwnstar\AdventOfCode2021\Day;

class Day06 extends Day
{
    protected array $lanternfish = [];

    protected function formatInput(): void
    {
        $this->explodeInputByDelimiter(",");
        $this->lanternfish = $this->input;
    }

    protected function growLanternfish(int $daysToRun): int
    {
        $fishCount = array_fill(0, 9, 0);
        foreach ($this->lanternfish as $count) {
            $fishCount[$count]++;
        }
        for ($i=1; $i <= $daysToRun; $i++) {
            $newFish = array_shift($fishCount);
            $fishCount[8] = $newFish;
            $fishCount[6] += $newFish;
        }
        return array_sum($fishCount);
    }

    public function findFirstAnswer(): int
    {
        return $this->growLanternfish(80);
    }

    public function findSecondAnswer(): int
    {
        return $this->growLanternfish(256);
    }
}
