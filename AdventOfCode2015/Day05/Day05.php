<?php

namespace mikeroq\AdventOfCode\AdventOfCode2015\Day05;

use mikeroq\AdventOfCode\Shared\Day;

class Day05 extends Day
{
    protected int $niceStringCount = 0;

    protected function formatInput(): void
    {
        $this->explodeInputByNewLine();
    }

    protected function testStringForNicenessPart1($string): bool
    {
        // Rules
        // Must have 3 vowels from aeiou
        // Must have at least one set of double letters aa bb etc
        // Does not contain ab, cd, pq, or xy
        if (preg_match_all('/[aeiou]/i',$string,$matches) >= 3) {
            if (preg_match_all('/(.)\1+/', $string, $matches) > 0) {
                if (preg_match_all('/(ab)|(cd)|(pq)|(xy)/', $string, $matches) == 0) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    protected function testStringForNicenessPart2($string): bool
    {
        // Rules
        // Must contain a pair of any two letters that appears twice without overlapping
        // contains at least one letter that repeats with exactly one letter between them
        if (preg_match_all('/S*(\S\S)\S*\1\S*/',$string,$matches) != 0) {
            if (preg_match_all('/(.).\1/',$string,$matches) != 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    protected function findNiceStrings(): void
    {
        foreach ($this->input as $string) {
            if ($this->testStringForNicenessPart1($string) == true) {
                $this->niceStringCount++;
            }
        }
    }

    protected function findNiceStringsPart2(): void
    {
        $this->niceStringCount = 0;
        foreach ($this->input as $string) {
            if ($this->testStringForNicenessPart2($string) == true) {
                $this->niceStringCount++;
            }
        }
    }

    public function findFirstAnswer(): int
    {
        $this->findNiceStrings();
        return $this->niceStringCount;
    }

    public function findSecondAnswer(): int
    {
        $this->findNiceStringsPart2();
        return $this->niceStringCount;
    }
}
