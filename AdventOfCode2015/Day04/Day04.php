<?php

namespace mikeroq\AdventOfCode\AdventOfCode2015\Day04;

use mikeroq\AdventOfCode\Shared\Day;

class Day04 extends Day
{
    protected string $secret;

    protected function formatInput(): void
    {
        $this->secret = $this->file;
    }

    protected function md5Search(string $target): int
    {
        for ($i = 0; true; $i++) {

            $hash = md5($this->secret . $i);
            if (str_starts_with($hash, $target)) {
                return $i;
            }
        }
    }

    public function findFirstAnswer(): int
    {
        return $this->md5Search("00000");
    }

    public function findSecondAnswer(): int
    {
        return $this->md5Search("000000");
    }
}
