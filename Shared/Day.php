<?php

namespace mikeroq\AdventOfCode\Shared;

class Day
{
    protected array $input = [];
    protected string $file;

    public function importInput($file, $string = false): void
    {
        $this->file = ($string == true) ? $file : file_get_contents($file);
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

    protected function explodeInputByDelimiter(string $delimiter, string $callback = '')
    {
        if ($callback) {
            $this->input = array_map($callback, explode($delimiter, $this->file));
        } else {
            $this->input = explode($delimiter, $this->file);
        }
    }

    public function findFirstAnswer(): mixed
    {
        return 0;
    }

    public function findSecondAnswer(): mixed
    {
        return 0;
    }
}