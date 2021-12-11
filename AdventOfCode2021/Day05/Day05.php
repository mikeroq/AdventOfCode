<?php

namespace mikeroq\AdventOfCode\AdventOfCode2021\Day05;

use mikeroq\AdventOfCode\Shared\Day;

class Day05 extends Day
{
    private array $vents = [];
    private array $ventMap = [];

    protected function formatInput(): void
    {
        $this->explodeInputByNewLine();
        foreach ($this->input as $line) {
            preg_match('/(?<x1>\d+),(?<y1>\d+)\D*(?<x2>\d+),(?<y2>\d+)/', $line, $output);
            $this->vents[] = array_filter($output, 'is_string', ARRAY_FILTER_USE_KEY);
        }
    }

    protected function plotMapPoint(int $y, int $x): void
    {
        isset($this->ventMap[$y][$x]) ? $this->ventMap[$y][$x]++ : $this->ventMap[$y][$x] = 1;
    }

    protected function findStartAndEnd(array $numbers): array
    {
        sort($numbers);
        return $numbers;
    }

    protected function plotVents(bool $diag = false): int
    {
        foreach ($this->vents as $ventLine) {
            if ($ventLine['x1'] == $ventLine['x2']) {
                $y = $this->findStartAndEnd([$ventLine['y1'], $ventLine['y2']]);
                for ($i = $y[0]; $i <= $y[1]; $i++) {
                    $this->plotMapPoint($i, $ventLine['x1']);
                }
            } elseif ($ventLine['y1'] == $ventLine['y2']) {
                $x = $this->findStartAndEnd([$ventLine['x1'], $ventLine['x2']]);
                for ($i = $x[0]; $i <= $x[1]; $i++) {
                    $this->plotMapPoint($ventLine['y1'], $i);
                }
            } else {
                if ($diag == true) {
                    foreach (range($ventLine['x1'], $ventLine['x2']) as $step => $v) {
                        $this->plotMapPoint(
                            ($ventLine['y1'] > $ventLine['y2']) ? $ventLine['y1'] - $step : $ventLine['y1'] + $step,
                            ($ventLine['x1'] > $ventLine['x2']) ? $ventLine['x1'] - $step : $ventLine['x1'] + $step
                        );
                    }
                }
            }
        }
        $count = 0;
        foreach ($this->ventMap as $row) {
            $values = array_count_values($row);
            unset($values[1]);
            $count += array_sum($values);
        }
        return $count;
    }

    public function findFirstAnswer(): int
    {
        return $this->plotVents();
    }

    public function findSecondAnswer(): int
    {
        return $this->plotVents(true);
    }
}