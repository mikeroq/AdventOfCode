<?php

namespace pwnstar\AdventOfCode2020\Day09;

use pwnstar\AdventOfCode2020\Day;

class Day09 extends Day
{
    protected array $instructions;
    protected int $acc = 0;
    protected int $count;

    public function formatInput(): void
    {
        $this->explodeInputByNewLine();
    }

    protected function findTwoSums($input, $target)
    {
        $haystack = $input;
        foreach ($haystack as $key => $value) {
            unset($haystack[$key]);
            $findMatch = array_search(($target - $value), $haystack);
            if ($findMatch) {
                return true;
            }
        }
        return false;
    }

    public function findSubArray($input, $target)
    {
        for ($i = 0; $i < count($input)-1; $i++) {
            for ($sumArray = [], $currentSum = $input[$i], $j = $i + 1; $j < count($input)-1; $j++) {
                if ($currentSum == $target) {
                    return $sumArray;
                }
                if ($currentSum > $target) {
                    break;
                }
                $currentSum += $input[$j];
                $sumArray[] = $input[$j];
            }
        }
        return false;
    }
    protected function part1()
    {
        $start = 0;
        $start2 = 25;
        for ($i = 0; $i < count($this->input); $i++) {
            $inputs = array_slice($this->input, $start+$i,25);
            if (array_key_exists($start2+$i, $this->input)) {
                if ($this->findTwoSums($inputs, $this->input[$start2+$i]) == false) {
                    return $this->input[$start2+$i];
                }
            }
        }

    }

    protected function part2()
    {
        $result = $this->findSubArray($this->input, 258585477);
        return min($result) + max($result);
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
