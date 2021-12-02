<?php

namespace pwnstar\AdventOfCode2021;

require_once "vendor/autoload.php";

class Advent
{
    public function runDay(int $day)
    {
        $dayClass = 'Day' . sprintf('%02d', $day);
        $start_time = microtime(true);
        $class = "pwnstar\\AdventOfCode2021\\{$dayClass}\\{$dayClass}";
        if (class_exists(($class))) {
            $day = new $class();
            $day->importInput('advent/' . $dayClass . '/input.txt');
            echo $dayClass . ' - First Answer: ' . $day->findFirstAnswer() . PHP_EOL;
            $day = new $class();
            $day->importInput('advent/' . $dayClass . '/input.txt');
            echo $dayClass . ' - Second Answer: ' . $day->findSecondAnswer() . PHP_EOL;
            echo $dayClass . ' - Execution finished in ' . (microtime(true) - $start_time) . ' seconds.' . PHP_EOL;
        } else {
            echo $dayClass . ' does not exist!';
        }
    }
}