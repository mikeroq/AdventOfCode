<?php

namespace mikeroq\AdventOfCode\AdventOfCode2021\Day08;

use mikeroq\AdventOfCode\Shared\Day;

class Day08 extends Day
{
    protected function formatInput(): void
    {
        $this->explodeInputByNewLine();
    }

    protected function doPart1(): int
    {
        // 0,6,9 are 6 segments
        // 2,3,5 are 5 segments
        // 1 is 2 segments
        // 4 is 4 segments
        // 7 is 3 segments
        // 8 is 7 segments
        $count = 0;
        foreach ($this->input as $line) {
            $line = explode(" | ", $line);
            $uniquePattern = explode(" ", $line[0]);
            $outputValue = explode(" ", $line[1]);
            foreach ($outputValue as $output) {
                switch (strlen($output)) {
                    case 2:
                    case 3:
                    case 4:
                    case 7:
                        $count++;
                        break;
                }
            }

        }
        return $count;
    }

    protected function findNumbers($string): int
    {
        $segment = [];
        foreach ($string as $digit) {
            switch (strlen($digit)) {
                case 2:
                    $segment[1] = str_split($digit);
                    break;
                case 3:
                    $segment[7] = str_split($digit);
                    break;
                case 4:
                    $segment[4] = str_split($digit);
                    break;
                case 7:
                    $segment[8] = str_split($digit);
                    break;
                case 5:
                    $segment[2][] = str_split($digit);
                    $segment[3][] = str_split($digit);
                    $segment[5][] = str_split($digit);
                    break;
                case 6:
                    $segment[0][] = str_split($digit);
                    $segment[6][] = str_split($digit);
                    $segment[9][] = str_split($digit);
                    break;
            }
        }
    }

    protected function doPart2(): int
    {
        // 0,6,9 are 6 segments
        // 2,3,5 are 5 segments
        // 1 is 2 segments
        // 4 is 4 segments
        // 7 is 3 segments
        // 8 is 7 segments

        //  aaaa   normal layhout
        // b    c
        // b    c
        //  dddd
        // e    f
        // e    f
        //  gggg

        // acedgfb cdfbe gcdfa fbcad dab cefabd cdfgeb eafb cagedb ab

        // ab is 1,
        // dab is 7, so ab are cf, d is a
        // eafb is 4 ab are still cf, f/e is b/d
        // acedgfb is 8, which is all 7 segments
        // cdfbe
        foreach ($this->input as $line) {
            $line = explode(" | ", $line);
            $uniquePattern = explode(" ", $line[0]);
            $this->findNumbers($uniquePattern);
        }
        return $count;

    }

    public function findFirstAnswer(): int
    {
        return $this->doPart1();
    }

    public function findSecondAnswer(): int
    {
        return $this->doPart2();
    }
}
