<?php

namespace mikeroq\AdventOfCode\AdventOfCode2020\Day03;

use mikeroq\AdventOfCode\Shared\Day;

class Day03 extends Day
{
    public function formatInput(): void
    {
        $this->explodeInputByNewLine();
        $new = [];
        foreach ($this->input as $line) {
            $new[] = str_split($line, 1);
        }
        $this->input = $new;
    }

    protected function countTrees($right, $down)
    {
        $tree = 0;
        for ($x = 0, $y = 0; $y < count($this->input); $x += $right, $y += $down) {
            if ($this->input[$y][$x % count($this->input[0])] === "#") {
                $tree++;
            }
        }
        return $tree;
    }

    public function findFirstAnswer()
    {
        $match = $this->countTrees(3, 1);
        if ($match > 0) {
            return $match;
        }
        return false;
    }

    public function findSecondAnswer()
    {
        $match = array_product(
            [
                $this->countTrees(1, 1),
                $this->countTrees(3, 1),
                $this->countTrees(5, 1),
                $this->countTrees(7, 1),
                $this->countTrees(1, 2)
            ]
        );
        if ($match > 0) {
            return $match;
        }
        return false;
    }
}
