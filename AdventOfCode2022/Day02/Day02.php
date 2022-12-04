<?php

namespace mikeroq\AdventOfCode\AdventOfCode2022\Day02;

use mikeroq\AdventOfCode\Shared\Day;

class Day02 extends Day
{
    protected array $guide = [];

    protected function formatInput(): void
    {
        $this->explodeInputByNewLine();
    }

    public function generateGuide()
    {
        foreach ($this->input as $game) {
            $this->guide[] = explode(" ", $game);
        }
    }

    // Column 1 oponent A = Rock, B paper, C scissors
    // Column 2 your response X Rock, Y paper, Z scissors
    // Score: 1 for rock, 2 for paper, 3 for scissors, + 0 if lost, 3 if draw, and 6 if win

    public function determineOutcome($throw, $response)
    {
        $win = [
            'A' => 'Y', // Paper beats Rock
            'B' => 'Z', // Scissors beats paper
            'C' => 'X', // Rock beats scissors
        ];
        $tie = [
            'A' => 'X',
            'B' => 'Y',
            'C' => 'Z'
        ];
        $scoreChart = [
            'X' => 1,
            'Y' => 2,
            'Z' => 3
        ];
        $score = 0;
        if ($win[$throw] == $response) {
            $score += 6;
            $didWin = true;
        } elseif ($tie[$throw] == $response) {
            $score += 3;
            $didWin = false;
        } else {
            $score +=0;
            $didWin = false;
        }
        $score += $scoreChart[$response];
        return [$didWin, $score];
    }

    public function determineMove($throw, $outcome)
    {

        $outcomes = [
            // X lose, Y draw, Z win
            // X rock, Y paper, Z scissors
            'A' => ['X' => 'Z', 'Y' => 'X', 'Z' => 'Y'],
            'B' => ['X' => 'X', 'Y' => 'Y', 'Z' => 'Z'],
            'C' => ['X' => 'Y', 'Y' => 'Z', 'Z' => 'X'],

        ];
        return $outcomes[$throw][$outcome];
    }

    public function scoreGame()
    {
        $this->generateGuide();
        $score = 0;
        foreach($this->guide as $game) {
            $score += $this->determineOutcome($game[0], $game[1])[1];
        }
        return $score;
    }

    public function scoreGamePart2()
    {
        $this->generateGuide();
        $score = 0;
        foreach($this->guide as $game) {
            $score += $this->determineOutcome($game[0], $this->determineMove($game[0], $game[1]))[1];
        }
        return $score;
    }

    public function findFirstAnswer(): int
    {
        return $this->scoreGame();
    }

    public function findSecondAnswer(): int
    {
        return $this->scoreGamePart2();
    }
}