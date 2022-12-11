<?php

namespace mikeroq\AdventOfCode\AdventOfCode2022\Day04;

use mikeroq\AdventOfCode\Shared\Day;

class Day04 extends Day
{
    protected array $assignments = [];

    protected function formatInput(): void
    {
        $this->explodeInputByNewLine();
        foreach ($this->input as $assignment) {
            $assignment = explode(',', $assignment);
            $range1 = explode('-', $assignment[0]);
            $range2 = explode('-', $assignment[1]);
            $this->assignments[] = [
                range($range1[0], $range1[1]),
                range($range2[0], $range2[1])
            ];
        }
    }

    public function findFirstAnswer(): int
    {
        $count = 0;
        foreach ($this->assignments as $assignment) {
            if (count(array_intersect($assignment[0], $assignment[1])) == count($assignment[0])) {
                $count++;
            } elseif (count(array_intersect($assignment[1], $assignment[0])) == count($assignment[1])) {
                $count++;
            }
        }
        return $count;
    }

    public function findSecondAnswer(): int
    {
        $count = 0;
        foreach ($this->assignments as $assignment) {
            if (count(array_intersect($assignment[0], $assignment[1])) >= 1) {
                $count++;
            } elseif (count(array_intersect($assignment[1], $assignment[0])) >= 1) {
                $count++;
            }
        }
        return $count;
    }
}