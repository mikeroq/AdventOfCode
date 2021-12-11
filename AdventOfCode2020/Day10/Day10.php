<?php

namespace mikeroq\AdventOfCode\AdventOfCode2020\Day10;

use mikeroq\AdventOfCode\Shared\Day;

class Day10 extends Day
{

    public function formatInput(): void
    {
        $this->explodeInputByNewLine();
        $this->input[] = 0;
        $this->input[] = max($this->input) + 3;
        sort($this->input);
    }

    protected function part1()
    {
        for($i = 0, $diff = []; $i < count($this->input); $i++) {
            if (array_key_exists($i + 1, $this->input)) {
                $diff[] = $this->input[$i + 1] - $this->input[$i];
            }
        }
        return array_product(array_count_values($diff));
    }

    protected function part2()
    {
        for ($i = 1, $d = [1]; $i < count($this->input); $i++) {
            for ($k = 0, $j = $i - 3; $j < $i; $j++) {
                if (array_key_exists($i, $this->input) && array_key_exists($j, $this->input)) {
                    $k += (($this->input[$i] - $this->input[$j]) <= 3) ? $d[$j] : null;
                }
            }
            $d[] = $k;
        }
        return max($d);
    }

    public function findFirstAnswer()
    {
        return $this->part1();
    }

    public function findSecondAnswer()
    {
        return $this->part2();
    }
}
