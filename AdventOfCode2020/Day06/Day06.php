<?php

namespace mikeroq\AdventOfCode\AdventOfCode2020\Day06;

use mikeroq\AdventOfCode\Shared\Day;

class Day06 extends Day
{
    protected array $answersCount;
    protected array $answers;

    public function formatInput(): void
    {
        $this->explodeInputByBlankLines();
        array_walk_recursive($this->input, function(&$arrValue, $arrKey){ $arrValue = str_replace(PHP_EOL.PHP_EOL, '', $arrValue);});

    }

    protected function part1()
    {
        foreach ($this->input as $answer) {
            $answer = str_replace("\r\n", '', $answer);
            $this->answersCount[] = count(array_filter(count_chars($answer)));
        }
        return array_sum($this->answersCount);
    }

    protected function part2()
    {
        foreach ($this->input as $answer) {
            // input is an array, each element in array is the lines in the group as a single string
            // split by line so now we have an array which each element is a person
            $people = explode("\r\n", $answer);
            // init an array to store the answers
            $peopleArrays = [];
            foreach ($people as $person) {
                // loop through and count the characters
                // count_chars returns an array of the number of occurrences of every byte value 0-255
                $peopleArrays[] = array_filter(count_chars($person));
            }
            // check the number of elements in the array, if there is more then one we compare them
            if (count($peopleArrays) > 1) {
                // array_intersect_key returns an array containing all the keys that are present in all provided arrays
                $result = count(array_intersect_key(...$peopleArrays));
            } else {
                // this is a single element array so we just count the answers
                $result = count($peopleArrays[0]);
            }
            $this->answers[] = $result;
        }
        return array_sum($this->answers);
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
