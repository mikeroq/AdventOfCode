<?php

namespace pwnstar\AdventOfCode2021\Day03;

use pwnstar\AdventOfCode2021\Day;

class Day03 extends Day
{
    protected array $binary;

    protected function formatInput(): void
    {
        $this->explodeInputByNewLine();
        foreach ($this->input as $binary) {
            $this->binary[] = str_split($binary);
        }
    }

    protected function columnCount($column): array
    {
        $count = array_count_values($column);
        return [
            0 => array_key_exists(0, $count) ? $count[0] : 0,
            1 => array_key_exists(1, $count) ? $count[1] : 0
        ];
    }

    protected function removeRows(array $array, int $position, int $remove): array
    {
        foreach ($array as $key => $line) {
            if ($line[$position] == $remove) {
                unset($array[$key]);
            }
        }
        return $array;
    }

    protected function findPowerConsumption(): int
    {
        for ($position = 0, $g = 0, $e = 0; $position < strlen($this->input[0]); $position++) {
            $count = $this->columnCount(array_column($this->binary, $position));
            if ($count[0] > $count[1]) {
                $g .= "0";
                $e .= "1";
            } else {
                $g .= "1";
                $e .= "0";
            }
        }
        return bindec($g) * bindec($e);
    }

    protected function calculateLifeSupportRating(): int
    {
        $oxygenArray = $this->binary;
        $scrubberArray = $this->binary;

        for ($position = 0; $position < strlen($this->input[0]); $position++) {
            $oxygenColumn = array_column($oxygenArray, $position);
            $scrubberColumn = array_column($scrubberArray, $position);
            if (count($oxygenArray) != 1) {
                if ($this->columnCount($oxygenColumn)[0] > $this->columnCount($oxygenColumn)[1]) {
                    $oxygenArray = $this->removeRows($oxygenArray, $position, 1);

                } else {
                    $oxygenArray = $this->removeRows($oxygenArray, $position, 0);
                }
            }
            if (count($scrubberArray) != 1) {
                if ($this->columnCount($scrubberColumn)[0] > $this->columnCount($scrubberColumn)[1]) {
                    $scrubberArray = $this->removeRows($scrubberArray, $position, 0);
                } else {
                    $scrubberArray = $this->removeRows($scrubberArray, $position, 1);
                }
            }
        }
        $oxygen = implode(array_merge(...$oxygenArray));
        $scrubber = implode(array_merge(...$scrubberArray));

        return bindec($oxygen) * bindec($scrubber);
    }

    public function findFirstAnswer(): int
    {
        return $this->findPowerConsumption();
    }

    public function findSecondAnswer(): int
    {
        return $this->calculateLifeSupportRating();
    }
}