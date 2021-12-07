<?php

namespace pwnstar\AdventOfCode2021\Day07;

use pwnstar\AdventOfCode2021\Day;

class Day07 extends Day
{

    protected function formatInput(): void
    {
        $this->explodeInputByDelimiter(',', 'intval');
        $this->input = array_count_values($this->input);
        ksort($this->input);
    }

    protected function calculateBestPosition(bool $part2 = false): int
    {
        for ($i = 0, $positions = []; $i <= max(array_keys($this->input)); $i++) {
            $positions[$i] = 0;
            foreach ($this->input as $position => $crabs) {
                $fuel = abs($i - $position);
                $positions[$i] += ($part2 == false)
                    ? $crabs * $fuel
                    : $crabs * ((1/2) * $fuel * ($fuel + 1));
            }
        }
        return min($positions);
    }

    public function findFirstAnswer(): int
    {
        return $this->calculateBestPosition();
    }

    public function findSecondAnswer(): int
    {
        return $this->calculateBestPosition(true);
    }
}