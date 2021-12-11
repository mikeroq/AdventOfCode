<?php

namespace mikeroq\AdventOfCode\AdventOfCode2015\Day02;

use mikeroq\AdventOfCode\Shared\Day;

class Day02 extends Day
{
    private array $packages = [];
    private int $square_feet = 0;
    private int $ribbon = 0;

    protected function formatInput(): void
    {
        $this->explodeInputByNewLine();
        foreach ($this->input as $package) {
            $this->packages[] = explode("x", $package);
        }
    }

    public function calcSquareFeet()
    {
        // 0 = l, 1 = w, 2 = h
        // 2*l*w + 2*w*h + 2*h*l
        foreach ($this->packages as $package) {
            $area = [
                ($package[0]*$package[1]),
                ($package[1]*$package[2]),
                ($package[2]*$package[0])
            ];
            $this->square_feet += array_sum($area)*2 + min($area);
        }
    }

    public function calcRibbonRequired()
    {
        foreach ($this->packages as $package) {
            $perimeters = [
                2*($package[0] + $package[1]),
                2*($package[1] + $package[2]),
                2*($package[2] + $package[0])
            ];
            $this->ribbon += min($perimeters) + array_product($package);
        }
    }

    public function findFirstAnswer(): int
    {
        $this->calcSquareFeet();
        return $this->square_feet;
    }

    public function findSecondAnswer(): int
    {
        $this->calcRibbonRequired();
        return $this->ribbon;
    }
}
