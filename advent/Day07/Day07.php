<?php

namespace pwnstar\AdventOfCode2020\Day07;

use pwnstar\AdventOfCode2020\Day;

class Day07 extends Day
{


    public function formatInput(): void
    {
        $this->explodeInputByNewLine();
        $newBagArray = [];
        foreach($this->input as $rule) {
            $bag = explode("bags contain", $rule);
            if ($bag[1] == " no other bags.") {
                $newBagArray[trim($bag[0])] = null;
                continue;
            }
            $bagColor = trim($bag[0]);
            $bagContains = explode(",", $bag[1]);
            array_walk_recursive($bagContains, function(&$arrValue, $arrKey){
                $arrValue = trim(str_replace(['.', 'bags'], '', $arrValue));
            });
            $bag = implode(" ", $bagContains);
            preg_match_all("/(\d)\s([a-z\s]+)/", $bag, $newBags, PREG_SET_ORDER);
            array_walk_recursive($newBags, function(&$arrValue, $arrKey){
                $arrValue = trim($arrValue);
                $arrValue = str_replace('bag','', $arrValue);
            });
            $newArray = [];
            foreach ($newBags as &$bag) {
                array_shift($bag);
                $newArray[$bag[1]] = $bag[0];
            }

            $newBagArray[$bagColor] = $newArray;
        }
        dd($newBagArray);
    }

    protected function part1()
    {

    }

    protected function part2()
    {

    }

    public function findFirstAnswer()
    {
        return $this->part1();
    }

    public function findSecondAnswer()
    {
        return $this->part2();
    }
}
