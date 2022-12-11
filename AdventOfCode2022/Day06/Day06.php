<?php

namespace mikeroq\AdventOfCode\AdventOfCode2022\Day06;

use mikeroq\AdventOfCode\Shared\Day;

class Day06 extends Day
{
    protected function formatInput(): void
    {
        $this->splitInputByCharacter();
    }

    public function findFirstAnswer(): int
    {
        for($i = 3; $i <= count($this->input); $i++){

            $test = array_slice($this->input,$i-3, 4);
            if (count(array_unique($test)) == 4) {
                return $i+1;
            }
        }
    }

    public function findSecondAnswer(): int
    {
        for($i = 13; $i <= count($this->input); $i++){

            $test = array_slice($this->input,$i-13, 14);
            if (count(array_unique($test)) == 14) {
                return $i+1;
            }
        }
    }
}