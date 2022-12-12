<?php

namespace mikeroq\AdventOfCode\AdventOfCode2022\Day10;

use mikeroq\AdventOfCode\Shared\Day;

class Day10 extends Day
{

    protected function formatInput(): void
    {
        $this->explodeInputByNewLine();
    }

    public function processInstructions()
    {
        $cycles = [];
        $start = 1;
        $xRegister = 1;
        foreach ($this->input as $key => $cycle) {
            $cycle = explode(' ', $cycle);

            switch($cycle[0]) {
                case 'noop':
                    $cycles[$start] = $xRegister;
                    $start++;
                    break;
                case 'addx':
                    $cycles[$start] = $xRegister;
                    $start++;
                    $cycles[$start] = $xRegister;
                    $start++;
                    $xRegister = $xRegister + intval(trim($cycle[1]));
                    break;
            }
        }
        return $cycles;
    }

    public function findFirstAnswer(): int
    {

        $cycles = $this->processInstructions();
        return ($cycles[20] * 20) + ($cycles[60] * 60) + ($cycles[100] * 100) + ($cycles[140] * 140) + ($cycles[180] *
                180) + ($cycles[220] * 220);
    }

    public function findSecondAnswer(): int
    {
        return 0;
    }
}