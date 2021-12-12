<?php

namespace mikeroq\AdventOfCode\AdventOfCode2021\Day11;

use mikeroq\AdventOfCode\Shared\Day;

class Day11 extends Day
{
    protected array $grid = [];

    protected function formatInput(): void
    {
        $this->explodeInputByNewLine();
        array_map(function ($line) {
            $this->grid[] = str_split($line);
        }, $this->input);
    }

    protected function doFlashes(array $input, array &$inputCopy, int $y, int $x): int
    {
        $flashes = 0;
        $adjacent = [
            [$y - 1, $x - 1],
            [$y - 1 , $x],
            [$y - 1, $x + 1],
            [$y, $x - 1],
            [$y, $x + 1],
            [$y + 1, $x - 1],
            [$y + 1, $x],
            [$y + 1, $x + 1]
        ];
        if (!($inputCopy[$y][$x] === 0 && 0 !== $input[$y][$x]) && $inputCopy[$y][$x]++ >= 9) {
            $flashes++;
            $inputCopy[$y][$x] = 0;
            foreach ($adjacent as $pos) {
                $flashes += isset($inputCopy[$pos[0]][$pos[1]]) ? $this->doFlashes($input, $inputCopy, $pos[0], $pos[1]) : 0;
            }
        }
        return $flashes;
    }

    protected function doStep(): int
    {
        $flashes = 0;
        $gridCopy = $this->grid;
        foreach ($this->grid as $y => $row) {
            foreach ($row as $x => $column) {
                $flashes += $this->doFlashes($this->grid, $gridCopy, $y, $x);
            }
        }
        $this->grid = $gridCopy;
        return $flashes;
    }

    protected function doPart1(int $steps = 0): int
    {
        for ($flashes = 0, $i = 0; $i < $steps; $i++) {
            $flashes += $this->doStep();
        }
        return $flashes;
    }

    protected function doPart2(): int
    {
        $total = array_sum(array_map('count', $this->grid));
        for ($flashes = 0, $step = 0; $flashes != $total; $step++) {
            $flashes = 0;
            $flashes += $this->doStep();
        }
        return $step;
    }

    public function findFirstAnswer(): int
    {
        return $this->doPart1(100);
    }

    public function findSecondAnswer(): int
    {
        return $this->doPart2();
    }
}