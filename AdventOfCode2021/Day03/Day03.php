<?php

namespace mikeroq\AdventOfCode\AdventOfCode2021\Day03;

use mikeroq\AdventOfCode\Shared\Day;

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
        return array_filter($array, function($key) use ($position, $remove, $array) {
            return $array[$key][$position] == $remove;
        }, ARRAY_FILTER_USE_KEY);
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
            $oxygenColumnCount = $this->columnCount(array_column($oxygenArray, $position));
            $scrubberColumnCount = $this->columnCount(array_column($scrubberArray, $position));
            if (count($oxygenArray) != 1) {
                $remove = ($oxygenColumnCount[0] > $oxygenColumnCount[1]) ? 1 : 0;
                $oxygenArray = $this->removeRows($oxygenArray, $position, $remove);
            }
            if (count($scrubberArray) != 1) {
                $remove = ($scrubberColumnCount[0] > $scrubberColumnCount[1]) ? 0 : 1;
                $scrubberArray = $this->removeRows($scrubberArray, $position, $remove);
            }
        }
        return bindec(implode(array_merge(...$oxygenArray))) * bindec(implode(array_merge(...$scrubberArray)));
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