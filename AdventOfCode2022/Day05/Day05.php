<?php

namespace mikeroq\AdventOfCode\AdventOfCode2022\Day05;

use mikeroq\AdventOfCode\Shared\Day;

class Day05 extends Day
{
    protected array $moves = [];
    protected array $map = [];

    protected function formatInput(): void
    {
        $this->explodeInputByBlankLines();

        $map = explode("\r\n", $this->input[0]);

        foreach($map as $key => $stack) {
            $this->map[$key+1] = str_split(explode(' ', $stack)[1], 1);
        }
        $moves = explode("\r\n", trim($this->input[1]));
        foreach ($moves as $move) {
            $move = explode('move ', $move);
            $from = explode('from ', $move[1]);
            $to = explode('to ', $from[1]);
            $this->moves[] = [
                'move' => intval(trim($from[0])),
                'from' => intval(trim($to[0])),
                'to' => intval(trim($to[1])),
            ];
        }


    }

    public function findFirstAnswer(): string
    {
        foreach($this->moves as $move) {
            for($i = 1; $i <= $move['move']; $i++) {
                array_unshift($this->map[$move['to']], array_shift($this->map[$move['from']]));
            }
        }
        $letters = "";
        foreach($this->map as $stack) {
            $letters .= $stack[0];
        }
        return $letters;
    }

    public function findSecondAnswer(): string
    {
        foreach($this->moves as $move) {
            $moved = array_slice($this->map[$move['from']], 0, $move['move']);
            $this->map[$move['to']] = array_merge($moved, $this->map[$move['to']]);
            array_splice($this->map[$move['from']], 0, $move['move']);
        }
        $letters = "";
        foreach($this->map as $stack) {
            $letters .= $stack[0];
        }
        return $letters;
    }
}