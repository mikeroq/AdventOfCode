<?php

namespace mikeroq\AdventOfCode\AdventOfCode2015\Day07;

use mikeroq\AdventOfCode\Shared\Day;

class Day07 extends Day
{
    protected array $wires = [];
    protected array $map = [];

    protected function formatInput(): void
    {
        $this->explodeInputByNewLine();
    }

    protected function processInstruction(string $instruction): void
    {
        $instruction = explode(" -> ", $instruction);
        $targetWire = $instruction[1];
        $instruction = explode(" ", $instruction[0]);
        switch (count($instruction)) {
            case 1:
                //provide signal to wire
                $this->wires[$targetWire] = ((int) $instruction[0] & 0xFFFF);
                break;
            case 2:
                // this is a NOT
                
                $this->wires[$targetWire] = ~ ((int) $this->map);
                break;
            case 3:
                // this is everything else
                break;
        }

        // & AND, | OR, ~ NOT, << LSHIFT, >> RSHIFT
        // wire AND wire
        // wire RSHIFT number
        // wire LSHIFT number
        // NOT wire
        // wire OR wire
        // number


    }

    protected function doPart1(): int
    {
        foreach ($this->input as $instruction) {
            $this->processInstruction($instruction);
        }
        return 0;
    }

    public function findFirstAnswer(): int
    {
        return $this->doPart1();
    }

    public function findSecondAnswer(): int
    {
        return 0;
    }
}
