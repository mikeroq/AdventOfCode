<?php

namespace pwnstar\AdventOfCode2021\Day02;

use pwnstar\AdventOfCode2021\Day;

class Day02 extends Day
{
    private array $submarinePosition = [];

    protected function formatInput(): void
    {
        $this->explodeInputByNewLine();
    }

    protected function startSubmarine(): void
    {
        $this->submarinePosition = ['depth' => 0, 'horizontal' => 0, 'aim' => 0];
    }

    protected function moveSubmarine($instruction, $x, $withAim): void
    {
        if ($withAim == true) {
            switch($instruction) {
                case 'forward':
                    $this->submarinePosition['horizontal'] += $x;
                    $this->submarinePosition['depth'] += ($this->submarinePosition['aim'] * $x);
                    break;
                case 'down':
                    $this->submarinePosition['aim'] += $x;
                    break;
                case 'up':
                    $this->submarinePosition['aim'] -= $x;
                    break;
            }
        } else {
            match($instruction) {
                'forward' => $this->submarinePosition['horizontal'] += $x,
                'down' => $this->submarinePosition['depth'] += $x,
                'up' => $this->submarinePosition['depth'] -= $x
            };
        }
    }

    protected function processCourse($withAim): void
    {
        $this->startSubmarine();
        foreach ($this->input as $movement) {
            preg_match("/(?<command>forward|down|up) (?<X>\d+)/", $movement, $instruction);
            $this->moveSubmarine($instruction['command'], $instruction['X'], $withAim);
        }
    }

    public function findFirstAnswer(): int
    {
        $this->processCourse(false);
        return ($this->submarinePosition['depth'] * $this->submarinePosition['horizontal']);
    }

    public function findSecondAnswer(): int
    {
        $this->processCourse(true);
        return ($this->submarinePosition['depth'] * $this->submarinePosition['horizontal']);
    }
}
