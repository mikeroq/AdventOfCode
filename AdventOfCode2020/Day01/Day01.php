<?php

namespace mikeroq\AdventOfCode\AdventOfCode2020\Day01;

use mikeroq\AdventOfCode\Shared\Day;

class Day01 extends Day
{
    /**
     * @var int
     */
    protected int $target = 2020;
    /**
     * @var array
     */
    protected array $found = [];

    protected function formatInput(): void
    {
        $this->explodeInputByNewLine();
    }

    /**
     * @return bool
     */
    protected function findTwoSums(): bool
    {
        $haystack = $this->input;
        foreach ($haystack as $key => $value) {
            unset($haystack[$key]);
            $findMatch = array_search(($this->target - $value), $haystack);
            if ($findMatch) {
                $this->found = [$this->input[$key], $this->input[$findMatch]];
                return true;
            }
        }
        return false;
    }

    protected function findThreeSums(): mixed
    {
        $haystack = $this->input;
        sort($haystack);
        $size = sizeof($haystack);
        for ($i = 0; $i < $size - 2; $i++) {
            $left = $i + 1;
            $right = $size - 1;
            while ($left < $right) {
                if ($haystack[$i] + $haystack[$left] + $haystack[$right] == $this->target) {
                    return $this->found = [$haystack[$i], $haystack[$left], $haystack[$right]];
                } elseif ($haystack[$i] + $haystack[$left] + $haystack[$right] < $this->target) {
                    $left++;
                } else {
                    $right--;
                }
            }
        }
        return false;
    }

    public function findFirstAnswer(): int
    {
        if ($this->findTwoSums()) {
            return array_product($this->found);
        }
        return 0;
    }

    public function findSecondAnswer(): int
    {
        if ($this->findThreeSums()) {
            return array_product($this->found);
        }
        return 0;
    }
}
