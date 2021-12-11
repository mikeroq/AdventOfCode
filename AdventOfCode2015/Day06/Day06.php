<?php

namespace mikeroq\AdventOfCode\AdventOfCode2015\Day06;

use mikeroq\AdventOfCode\Shared\Day;

class Day06 extends Day
{
    protected array $lights = [];
    protected int $lightCount;

    protected function formatInput(): void
    {
        $this->explodeInputByNewLine();
    }

    protected function executeInstruction($instruction): void
    {
        preg_match('/(?<command>turn on|toggle|turn off) (?<startX>\d+),(?<startY>\d+) through (?<endX>\d+),(?<endY>\d+)/', $instruction, $command);
        for($i = $command['startX']; $i <= $command['endX']; $i++) {
            for ($j = $command['startY']; $j <= $command['endY']; $j++) {
                switch ($command['command']) {
                    case 'turn on':
                        $this->lights[$i][$j] = true;
                        break;
                    case 'toggle':
                        if (isset($this->lights[$i][$j])) {
                            unset($this->lights[$i][$j]);
                        } else {
                            $this->lights[$i][$j] = true;
                        }
                        break;
                    case 'turn off':
                        unset($this->lights[$i][$j]);
                        break;
                }
            }
        }
    }

    protected function executeInstructionPart2($instruction): void
    {
        preg_match('/(?<command>turn on|toggle|turn off) (?<startX>\d+),(?<startY>\d+) through (?<endX>\d+),(?<endY>\d+)/', $instruction, $command);
        for($i = $command['startX']; $i <= $command['endX']; $i++) {
            for ($j = $command['startY']; $j <= $command['endY']; $j++) {
                if (empty($this->lights[$i][$j])) {
                    $this->lights[$i][$j] = 0;
                }
                switch ($command['command']) {
                    case 'turn on':
                        $this->lights[$i][$j]++;
                        break;
                    case 'toggle':
                        $this->lights[$i][$j] += 2;
                        break;
                    case 'turn off':
                        if ($this->lights[$i][$j] == 0) {
                            // do nothing
                        } else {
                            $this->lights[$i][$j]--;
                        }
                        break;
                }
            }
        }
    }

    protected function setLights(): void
    {
        foreach ($this->input as $instruction) {
            $this->executeInstruction($instruction);
        }
        $this->lightCount = count($this->lights, COUNT_RECURSIVE) - count($this->lights);
    }

    protected function setLightBrightness(): void
    {
        $this->lightCount = 0;
        $this->lights = [];
        foreach ($this->input as $instruction) {
            $this->executeInstructionPart2($instruction);
        }
        $this->lightCount = $this->arraySum($this->lights);
    }

    public function findFirstAnswer(): int
    {
        $this->setLights();
        return $this->lightCount;
    }

    public function findSecondAnswer(): int
    {
        $this->setLightBrightness();
        return $this->lightCount;
    }

    public function arraySum(array $array) : int
    {
        foreach($array as $value) {

            if(is_array($value)) {
                $sum[] = $this->arraySum($value);
            } else {
                $sum[] = $value;
            }

        }

        return array_sum($sum);
    }
}
