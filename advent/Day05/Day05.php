<?php

namespace pwnstar\AdventOfCode2021\Day05;

use pwnstar\AdventOfCode2021\Day;

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

    protected function doPart1(): int
    {
        foreach ($this->vents as $key=>$ventLine) {
            if ($ventLine['x1'] == $ventLine['x2']) {
                if ($ventLine['y1'] > $ventLine['y2']) {
                    $startY = $ventLine['y2'];
                    $endY = $ventLine['y1'];
                } else {
                    $startY = $ventLine['y1'];
                    $endY = $ventLine['y2'];
                }
                for($i = $startY; $i <= $endY; $i++) {
                    @$this->ventMap[$ventLine['x1']][$i]++;
                }
            } elseif ($ventLine['y1'] == $ventLine['y2']) {
                if ($ventLine['x1'] > $ventLine['x2']) {
                    $startX = $ventLine['x2'];
                    $endX = $ventLine['x1'];
                } else {
                    $startX = $ventLine['x1'];
                    $endX = $ventLine['x2'];
                }
                for($i = $startX; $i <= $endX; $i++) {
                    @$this->ventMap[$i][$ventLine['y1']]++;
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

        return $this->doPart1();
    }

    public function findSecondAnswer(): int
    {
        return 0;
    }
}
