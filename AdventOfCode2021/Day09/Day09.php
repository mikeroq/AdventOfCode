<?php

namespace mikeroq\AdventOfCode\AdventOfCode2021\Day09;

use mikeroq\AdventOfCode\Shared\Day;

class Day09 extends Day
{
    protected array $map = [];
    protected array $location = [];

    protected function formatInput(): void
    {
        $this->explodeInputByNewLine();
        foreach ($this->input as $line) {
            array_push($this->map, str_split(trim($line)));
        }
    }

    protected function checkAdjacent($map, $x, $y): bool
    {
        $l = $map[$x - 1][$y] ?? 9;
        $r = $map[$x + 1][$y] ?? 9;
        $t = $map[$x][$y - 1] ?? 9;
        $b = $map[$x][$y + 1] ?? 9;

        if ($map[$x][$y] < $l && $map[$x][$y] < $r && $map[$x][$y] < $t && $map[$x][$y] < $b) {
            return true;
        }
        return false;
    }

    protected function findBasin($map, $list): int
    {
        $count = 0;
        while ($current = array_pop($list)) {
            list($y, $x) = $current;
            foreach ([[$y - 1, $x], [$y + 1, $x], [$y, $x + 1], [$y, $x - 1]] as $i) {
                if (isset($map[$i[0]][$i[1]]) && $map[$i[0]][$i[1]] !== 9)
                {
                    $map[ $i[0] ][ $i[1] ] = 9;
                    array_push($list, [$i[0], $i[1]]);
                    $count++;
                }
            }
        }
        return $count;
    }

    protected function calculateLowPoints(): int
    {
        $width = count($this->map[0])-1;
        $height = count($this->map)-1;
        for($y = 0; $y <= $height; $y++) {
            for ($x = 0; $x <= $width; $x++) {
                if ($this->checkAdjacent($this->map, $y, $x)) {
                    array_push($this->location, ['y' => $y, 'x' => $x, 'value' => $this->map[$y][$x]+1]);
                }
            }
        }
        return array_sum(array_column($this->location, 'value'));
    }

    protected function calculateBasins(): int
    {
        $this->calculateLowPoints();
        foreach ($this->location as $value) {
            $sizes[] = $this->findBasin($this->map, [$value['y'], $value['x']]);
        }
        sort($sizes);
        return array_product(array_slice($sizes, -3));
    }

    public function findFirstAnswer(): int
    {
        return $this->calculateLowPoints();
    }

    public function findSecondAnswer(): int
    {

        return $this->calculateBasins();
    }
}
