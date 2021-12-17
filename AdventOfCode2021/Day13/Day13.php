<?php

namespace mikeroq\AdventOfCode\AdventOfCode2021\Day13;

use mikeroq\AdventOfCode\Shared\Day;

class Day13 extends Day
{
    protected array $grid = [];
    protected array $instructions = [];


    protected function formatInput(): void
    {
        $this->explodeInputByBlankLines();
        $array = explode("\r\n", $this->input[0]);
        $this->instructions = explode("\r\n", $this->input[1]);
        $newArray = [];
        foreach ($array as $line) {
            $newArray[] = explode(",", $line);
        }
        $maxX = max(array_column($newArray, 0));
        $maxY = max(array_column($newArray, 1));
        foreach ($array as $key => $line) {
            $coords = explode(",", $line);
            $this->grid[$coords[1]][$coords[0]] = true;
        }
//        $output = "";
//        for($y = 0; $y <= $maxY; $y++) {
//            for($x = 0; $x <= $maxX; $x++) {
//                if (isset($this->grid[$y][$x])) {
//                    $output .= "#";
//                } else {
//                    $output .= ".";
//                }
//            }
//            $output .= PHP_EOL;
//        }
//        dd($output);


//        dd("max x: $maxX max y: $maxY");
    }

    protected function foldArray($array, $direction, $location)
    {
        // fold y
        switch ($direction) {
            case "y":
                // split the array
                $firstHalf = array_slice($array, 0, $location, false);
                $secondHalf = array_slice($array, $location);
                dd($firstHalf);
                break;
            case "x":
                break;
        }
    }

    protected function doPart1()
    {
        foreach ($this->instructions as $instruction) {
            preg_match("/(?<direction>x|y)=(?<position>\d*)/", $instruction, $instructions);
            dd($this->grid);
            $this->foldArray($this->grid, $instructions['direction'], $instructions['position']);
        }
        return 0;
    }

    public function findFirstAnswer(): int
    {
        return $this->doPart1();
    }

    public function findSecondAnswer(): int
    {
        return 0;
    }
}
