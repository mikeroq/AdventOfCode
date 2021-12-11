<?php

namespace mikeroq\AdventOfCode\AdventOfCode2020\Day08;

use mikeroq\AdventOfCode\Shared\Day;

class Day08 extends Day
{
    protected array $instructions;
    protected int $acc = 0;
    protected int $count;

    public function formatInput(): void
    {
        $this->explodeInputByNewLine();
        foreach ($this->input as $instruction) {
            preg_match("/^(?<instruction>\bnop|acc|jmp\b)\s(?<direction>\+|\-)(?<number>\d+)$/", $instruction, $found);

            $this->instructions[] = [
                'instruction' => $found['instruction'],
                'direction' => $found['direction'],
                'number' => $found['number'],
                'executed' => 0
            ];

        }
        $this->count = count($this->instructions);
    }

    protected function executeFunction($instructions, $index): mixed
    {
        if ($index == $this->count) {
            return "found";
        } else {
            if ($instructions[$index]['executed'] == 1) {
                return true;
            }
            if ($instructions[$index]['instruction'] == "nop") {
                // next
                $instructions[$index]['executed'] = 1;
                return $this->executeFunction($instructions, $index+1);
            } elseif ($instructions[$index]['instruction'] == "acc") {
                if ($instructions[$index]['direction'] == "+") {
                    $this->acc += $instructions[$index]['number'];
                } elseif ($instructions[$index]['direction'] == "-") {
                    $this->acc -= $instructions[$index]['number'];
                }
                $instructions[$index]['executed'] = 1;
                return $this->executeFunction($instructions, $index+1);
            } elseif ($instructions[$index]['instruction'] == "jmp") {
                $instructions[$index]['executed'] = 1;
                if ($instructions[$index]['direction'] == "+") {
                    return $this->executeFunction($instructions, $index + $instructions[$index]['number']);
                } elseif ($instructions[$index]['direction'] == "-") {
                    return $this->executeFunction($instructions, $index - $instructions[$index]['number']);
                }
            }
        }
    }

    protected function part1(): int
    {
        $this->executeFunction($this->instructions, 0);
        return $this->acc;
    }

    protected function part2(): int
    {
        $i = 0;
        $this->acc = 0;
        foreach ($this->instructions as $instruction) {
            $newInstructions = $this->instructions;
            if ($instruction['instruction'] == "jmp") {
                $newInstructions[$i]['instruction'] = "nop";
                if ($this->executeFunction($newInstructions, 0) === "found") {
                    break;
                } else {
                    $this->acc = 0;
                    $newInstructions[$i]['instruction'] = "jmp";
                }
            } elseif ($instruction['instruction'] == "nop") {
                $newInstructions[$i]['instruction'] = "jmp";
                if ($this->executeFunction($newInstructions, 0) === "found") {
                    break;
                } else {
                    $this->acc = 0;
                    $newInstructions[$i]['instruction'] = "nop";
                }
            }
            $i++;
        }
        return $this->acc;
    }

    public function findFirstAnswer(): int
    {
        return $this->part1();
    }

    public function findSecondAnswer(): int
    {
        return $this->part2();
    }
}
