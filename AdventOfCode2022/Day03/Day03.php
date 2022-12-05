<?php

namespace mikeroq\AdventOfCode\AdventOfCode2022\Day03;

use mikeroq\AdventOfCode\Shared\Day;

class Day03 extends Day
{

    protected function formatInput(): void
    {
        $this->explodeInputByNewLine();
    }

    private function getPriority($letter): int
    {
        return ctype_lower($letter) ? ord($letter) - ord('a') + 1 : ord($letter) - ord('A') + 27;
    }

    private function findCommonItemType($rucksacks)
    {
        $itemTypes = array_unique(array_merge(...array_map(function ($rucksack) {
            return str_split($rucksack);
        }, $rucksacks)));
        foreach ($itemTypes as $type) {
            if (count(array_filter($rucksacks, function($rucksack) use ($type) {
                    return str_contains($rucksack, $type);
                })) == 3) {
                return $type;
            }
        }
        return null;
    }

    public function findFirstAnswer(): int
    {
        $commonItems = array_reduce($this->input, function($carry, $rucksack) {
            $ruck = str_split($rucksack, strlen($rucksack)/2);
            $common = array_intersect(array_unique(str_split($ruck[0])), array_unique(str_split($ruck[1])));
            if (!empty($common)) {
                $carry[] = $common;
            }
            return $carry;
        }, []);

        return array_reduce($commonItems, function($carry, $commonItem) {
            return $carry + $this->getPriority(array_shift($commonItem));
        }, 0);
    }

    public function findSecondAnswer(): int
    {
        $commonTypes = array_map(function ($group) {
            return $this->findCommonItemType($group);
        }, array_chunk($this->input, 3));

        return array_reduce($commonTypes, function ($carry, $type) {
            return $carry + $this->getPriority($type);
        }, 0);
    }
}