<?php

namespace mikeroq\AdventOfCode\AdventOfCode2021\Day10;

use mikeroq\AdventOfCode\Shared\Day;

class Day10 extends Day
{
    protected array $pairs = [
        ']' => '[',
        ')' => '(',
        '}' => '{',
        '>' => '<'
    ];

    protected array $tags = [
        '(',
        '[',
        '{',
        '<'
    ];

    protected function formatInput(): void
    {
        $this->explodeInputByNewLine();
    }

    protected function findCorruptedLines(): int
    {
        $score = 0;
        foreach ($this->input as $key => $line) {
            $openPairs = [];
            foreach (str_split($line) as $character) {
                if (in_array($character, $this->pairs)) {
                    $openPairs[] = $character;
                } elseif (array_pop($openPairs) !== $this->pairs[$character]) {
                    $score += [
                        ')' => 3,
                        ']' => 57,
                        '}' => 1197,
                        '>' => 25137
                    ][$character];
                    unset($this->input[$key]);
                    break;
                }
            }
        }
        return $score;
    }

    protected function completeIncompleteLines(): int
    {
        $this->findCorruptedLines();
        $score = [];
        foreach ($this->input as $key => $line) {
            $score[$key] = 0;
            $openPairs = [];
            foreach (str_split($line) as $character) {
                if (in_array($character, $this->tags)) {
                    $openPairs[] = $character;
                } else {
                    array_pop($openPairs);
                }
            }
            while ($tag = array_pop($openPairs)) {
                $score[$key] = $score[$key] * 5 + array_search($tag, $this->tags) +1;
            }
        }
        sort($score);
        return $score[count($score) / 2];
    }

    public function findFirstAnswer(): int
    {
        return $this->findCorruptedLines();
    }

    public function findSecondAnswer(): int
    {
        return $this->completeIncompleteLines();
    }
}
