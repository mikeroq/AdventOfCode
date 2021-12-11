<?php

namespace mikeroq\AdventOfCode\AdventOfCode2021\Day06;

use mikeroq\AdventOfCode\Shared\Day;

class Day06 extends Day
{
    protected array $fishCount;

    protected function formatInput(): void
    {
        $this->explodeInputByDelimiter(',', 'intval');
        $this->fishCount = array_fill(0, 9, 0);
        foreach ($this->input as $count) {
            $this->fishCount[$count]++;
        }
    }

    protected function growLanternfish(int $daysToRun): int
    {
        for ($i=1; $i <= $daysToRun; $i++) {
            $newFish = array_shift($this->fishCount);
            $this->fishCount[8] = $newFish;
            $this->fishCount[6] += $newFish;
        }
        return array_sum($this->fishCount);
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
