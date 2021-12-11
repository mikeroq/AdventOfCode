<?php

namespace mikeroq\AdventOfCode\AdventOfCode2020\Day04;

use mikeroq\AdventOfCode\Shared\Day;

class Day04 extends Day
{
    protected array $valid = [];
    protected array $validPart2 = [];

    public function formatInput(): void
    {
        $this->explodeInputByBlankLines();
        $new = [];
        foreach ($this->input as $line) {
            $re = '/(?<key>[^:]+):(?<value>[^\s]+)/';
            preg_match_all($re, $line, $new[], PREG_SET_ORDER, 0);
        }
        array_walk_recursive($new, function(&$arrValue, $arrKey){ $arrValue = trim($arrValue);});
        $this->input = [];

        foreach ($new as $line) {
            $passport = [];
            foreach ($line as $entry) {
                $passport[$entry['key']] = $entry['value'];
            }
            array_push($this->input, $passport);
        }
    }

    protected function part1(): int
    {
        $valid = 0;
        foreach ($this->input as $passport) {
            if (count($passport) == 8 || (count($passport) == 7 && !array_key_exists('cid', $passport))) {
                $valid++;
                array_push($this->valid, $passport);
            }
        }
        return $valid;
    }
    protected function checkRules($item): bool
    {
        $rules = [
            'byr' => "/(19)[2-9]{1}\d|(200)[0-2]{1}/", // 1920-2002
            'iyr' => "/(201)[0-9]{1}|(2020)/", // 2010-2020
            'eyr' => "/(20)[2]\d|(2030)/", // 2020-2030
            'hgt' => "/^59in$|^6\din$|^7[0-6]in$|^1[5-8]\dcm$|^1[6-8]\dcm$|^19[0-3]cm$/", //150-193cm 59-76in
            'hcl' => "/^#[0-9A-Fa-f]{6}$/", // hex color with # 6 digits
            'ecl' => "/^amb$|^blu$|^brn$|^gry$|^grn$|^hzl$|^oth$/", // amb, blu, brn, gry, grn, hzl, oth
            'pid' => "/^\d{9}$/", // 9 digits
            'cid' => "/(.*)/" // skip
        ];
        foreach ($item as $key => $value) {
            $match = preg_match($rules[$key], $value);
            if ($match !== 1) {
                return false;
            }
        }
        return true;
    }
    protected function part2(): int
    {
        if (empty($this->valid)) {
            $this->part1();
        }
        $valid = 0;
        foreach($this->valid as $passport) {
            if ($this->checkRules($passport)) {
                $valid++;
            }
        }
        return $valid;
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
