<?php

namespace pwnstar\AdventOfCode2021\Day04;

use pwnstar\AdventOfCode2021\Day;

class Day04 extends Day
{
    private array $numbers = [];
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

    protected function hasBingo(array $board, array $calledNumbers): bool
    {
        foreach ($board as $row) {
            if (count(array_filter($row, fn ($num) => in_array($num, $calledNumbers))) == 5) {
                return true;
            }
        }
        for ($col = 1; $col <= count($board[0]); $col++) {
            if (count(array_filter(array_column($board, $col), fn ($num) => in_array($num, $calledNumbers))) == 5) {
                return true;
            }
        }
        return false;
    }

    protected function sumUnmarked($card, array $calledNumbers): int
    {
        $sum = 0;
        foreach($card as $row) {
            foreach ($row as $col) {
                if (!in_array($col, $calledNumbers)) {
                    $sum += $col;
                }
            }
        }
        return $sum;
    }

//    protected function doPart1(): int
//    {
//        $justCalled = 0;
//        $boardSum = 0;
//        foreach($this->numbers as $callout) {
//            array_push($this->calledNumbers, $callout);
//            foreach ($this->cards as $card) {
//                if ($this->hasBingo($card) == true) {
//                    $justCalled = $callout;
//                    $boardSum = $this->sumUnmarked($card);
//                    return $justCalled * $boardSum;
//                }
//            }
//        }
//        return 0;
//    }

    protected function playBingo(bool $stopOnFirst = true): int
    {
        $lastBingo = ['card' => 0, 'callout' => 0, 'sum' => 0, 'boardsWon' => []];
        $calledNumbers = [];
        foreach ($this->numbers as $callout) {
            array_push($calledNumbers, $callout);
            foreach ($this->cards as $key => $card) {
                if (!in_array($key, $lastBingo['boardsWon'])) {
                    if ($this->hasBingo($card, $calledNumbers) == true) {
                        array_push($lastBingo['boardsWon'], $key);
                        $lastBingo['card'] = $key;
                        $lastBingo['callout'] = $callout;
                        $lastBingo['sum'] = $this->sumUnmarked($this->cards[$lastBingo['card']], $calledNumbers) * $lastBingo['callout'];
                        if ($stopOnFirst == true) {
                            break 2;
                        }
                    }
                }
            }
        }
        return $lastBingo['sum'];
    }

//    protected function doPart2(): int
//    {
//        $lastBingo = ['card' => 0, 'callout' => 0];
//        $boardsWon = [];
//        $sum = 0;
//        foreach($this->numbers as $callout) {
//            array_push($this->calledNumbers, $callout);
//            foreach ($this->cards as $key => $card) {
//                if(!in_array($key, $boardsWon)) {
//                    if ($this->hasBingo($card) == true) {
//                        if (in_array($key, $boardsWon)) {
//                            break;
//                        } else {
//                            array_push($boardsWon, $key);
//                            $lastBingo['card'] = $key;
//                            $lastBingo['callout'] = $callout;
//                            $sum = $this->sumUnmarked($this->cards[$lastBingo['card']]) * $lastBingo['callout'];
//                        }
//                    }
//                }
//            }
//        }
//        return $sum;
//    }

    public function findFirstAnswer(): int
    {
        return $this->playBingo(true);
    }

    public function findSecondAnswer(): int
    {
        return $this->playBingo();
    }
}
