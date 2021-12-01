<?php

namespace pwnstar\AdventOfCode2021;

class Day
{
    protected array $input = [];
    protected string $file;

    public function importInput($file, $string = false): void
    {
        $this->file = ($string == true) ? $string : file_get_contents($file);
        $this->formatInput();
    }

    protected function formatInput(): void
    {

    }

    protected function explodeInputByNewLine()
    {
        $this->input = explode("\r\n", trim($this->file));
    }

    protected function explodeInputByBlankLines()
    {
        $this->input = explode(PHP_EOL.PHP_EOL, $this->file);
    }

    protected function splitInputByCharacter()
    {
        $this->input = str_split($this->file);
    }

    public function findFirstAnswer(): int
    {
        return 0;
    }

    public function findSecondAnswer(): int
    {
        return 0;
    }
}