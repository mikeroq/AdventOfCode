<?php

namespace pwnstar\AdventOfCode2021\Day04;

use pwnstar\AdventOfCode2021\Day;

class Day04 extends Day
{
    private array $numbers = [];
    private array $calledNumbers = [];
    private array $cards = [];

    protected function formatInput(): void
    {
        $this->explodeInputByBlankLines();
        foreach ($this->input as $key => $line) {
            // line one is numbers
            if ($key == 0) {
                $this->numbers = array_map('intval',explode(',', $line));
            } else {
                $array = [];
                foreach(explode("\r\n", trim($line)) as $bingoLine) {
                    array_push($array, array_map("intval",explode(" ",trim(preg_replace('/\s+/', ' ',$bingoLine)))));
                }
                array_push($this->cards, $array);
            }
        }
    }

    protected function hasBingo(array $board): bool
    {
        foreach ($board as $row) {
            if (count(array_filter($row, fn ($num) => in_array($num, $this->calledNumbers))) == 5) {
                return true;
            }
        }
        for ($col = 1; $col <= count($board[0]); $col++) {
            if (count(array_filter(array_column($board, $col), fn ($num) => in_array($num, $this->calledNumbers))) == 5) {
                return true;
            }
        }
        return false;
    }

    protected function sumUnmarked($card): int
    {
        $sum = 0;
        foreach($card as $row) {
            foreach ($row as $col) {
                if (!in_array($col, $this->calledNumbers)) {

                    $sum += $col;
                }
            }
        }
        return $sum;
    }

    protected function doPart1(): int
    {
        $justCalled = 0;
        $boardSum = 0;
        foreach($this->numbers as $callout) {
            array_push($this->calledNumbers, $callout);
            foreach ($this->cards as $card) {
                if ($this->hasBingo($card) == true) {
                    $justCalled = $callout;
                    $boardSum = $this->sumUnmarked($card);
                    return $justCalled * $boardSum;
                }
            }
        }
        return 0;
    }

    protected function doPart2(): int
    {
        $lastBingo = ['card' => 0, 'callout' => 0];
        $justCalled = 0;
        $boardSum = 0;
        $boardsWon = [];
        foreach($this->numbers as $callout) {
            array_push($this->calledNumbers, $callout);
            foreach ($this->cards as $key => $card) {
                if(!in_array($key, $boardsWon)) {
                    if ($this->hasBingo($card) == true) {
                        if (in_array($key, $boardsWon)) {
                            break;
                        } else {
                            array_push($boardsWon, $key);
                            $lastBingo['card'] = $key;
                        }
                    }
                }
            }
        }
        $this->calledNumbers = [];
        foreach($this->numbers as $called) {
            array_push($this->calledNumbers, $called);
            if ($this->hasBingo($this->cards[$lastBingo['card']]) == true) {
                $lastBingo['callout'] = $called;
                $sum = $this->sumUnmarked($this->cards[$lastBingo['card']]);
                return $sum * $lastBingo['callout'];
            }
        }
        return 0;
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
