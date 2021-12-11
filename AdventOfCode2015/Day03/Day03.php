<?php

namespace mikeroq\AdventOfCode\AdventOfCode2015\Day03;

use mikeroq\AdventOfCode\Shared\Day;

class Day03 extends Day
{
    protected array $grid = [ 0 => [0] ];
    protected array $santaArray = [ 0 => ['x' => 0, 'y' => 0], 1 => ['x' => 0, 'y' => 0] ];

    protected function formatInput(): void
    {
        $this->splitInputByCharacter();
    }

    protected function moveSanta(int $santa, string $direction): void
    {
        match($direction) {
            "^" => $this->santaArray[$santa]['y']++,
            "v" => $this->santaArray[$santa]['y']--,
            ">" => $this->santaArray[$santa]['x']++,
            "<" => $this->santaArray[$santa]['x']--
        };

        $this->grid[$this->santaArray[$santa]['x']][$this->santaArray[$santa]['y']] = true;
    }

    protected function santaDeliver(bool $roboSanta = false): int
    {
        foreach ($this->input as $key => $direction) {
            if ($roboSanta) {
                $santa = ($key % 2) ? 0 : 1;
            } else {
                $santa = 0;
            }
            $this->moveSanta($santa,$direction);
        }
        return count($this->grid, COUNT_RECURSIVE) - count($this->grid);
    }

    public function findFirstAnswer(): int
    {
        return $this->santaDeliver();
    }

    public function findSecondAnswer(): int
    {
        return $this->santaDeliver(true);
    }
}
