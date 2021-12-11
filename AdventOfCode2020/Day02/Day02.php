<?php

namespace mikeroq\AdventOfCode\AdventOfCode2020\Day02;

use mikeroq\AdventOfCode\Shared\Day;

class Day02 extends Day
{

    protected function formatInput(): void
    {
        $this->explodeInputByNewLine();
        $new = [];
        foreach ($this->input as $row) {
            $array = explode(" ", $row);
            $range = explode("-", $array[0]);
            $letter = str_replace(":", "", $array[1]);
            $new[] = [
                'min' => $range[0],
                'max' => $range[1],
                'letter' => $letter,
                'password' => $array[2],
            ];
        }
        $this->input = $new;
    }

    protected function findValidPasswords()
    {
        $match = 0;
        foreach ($this->input as $password) {
            $count = substr_count($password['password'], $password['letter']);
            if ($count >= $password['min'] && $count <= $password['max']) {
                $match++;
            }
        }
        return $match;
    }

    protected function findValidPasswordsPart2()
    {
        $match = 0;
        foreach ($this->input as $password) {
            $count1 = substr($password['password'], $password['min'] - 1, 1);
            $count2 = substr($password['password'], $password['max'] - 1, 1);
            if ($count1 == $password['letter'] xor $count2 == $password['letter']) {
                $match++;
            }
        }
        return $match;
    }

    public function findFirstAnswer()
    {
        $match = $this->findValidPasswords();
        if ($match > 0) {
            return $match;
        }
        return false;
    }

    public function findSecondAnswer()
    {
        $match = $this->findValidPasswordsPart2();
        if ($match > 0) {
            return $match;
        }
        return false;
    }
}
