<?php

namespace mikeroq\AdventOfCode\AdventOfCode2015\Day01;

use mikeroq\AdventOfCode\Shared\Day;

class Day01 extends Day
{
    protected int $floor = 0;

    protected function formatInput(): void
    {
        $this->splitInputByCharacter();
    }

    protected function moveElevator($direction): void
    {
        match($direction) {
            "(" => $this->floor++,
            ")" => $this->floor--
        };
    }

    public function findFloor(): int
    {
        foreach ($this->input as $direction) {
            $this->moveElevator($direction);
        }
        return $this->floor;
    }

    public function findBasement(): int
    {
        for ($i = 1; $i < count($this->input); $i++) {
            $this->moveElevator($this->input[$i-1]);
            if ($this->floor == -1) {
                break;
            }
        }
        return $i;
    }

    public function findFirstAnswer(): int
    {
        return $this->findFloor();
    }

    public function findSecondAnswer(): int
    {
        return $this->findBasement();
    }
}
