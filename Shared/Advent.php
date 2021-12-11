<?php

namespace mikeroq\AdventOfCode\Shared;

class Advent
{
    public function runDay(int $year, int $day)
    {
        $dayClass = 'Day' . sprintf('%02d', $day);
        $start_time = microtime(true);
        $class = "mikeroq\\AdventOfCode\\AdventOfCode$year\\{$dayClass}\\{$dayClass}";
        if (class_exists(($class))) {
            $day = new $class();
            $day->importInput('AdventOfCode'.$year.'/' . $dayClass . '/input.txt');
            echo $year. " ".$dayClass . ' - First Answer: ' . $day->findFirstAnswer() . PHP_EOL;
            $day = new $class();
            $day->importInput('AdventOfCode'.$year.'/' . $dayClass . '/input.txt');
            echo $year. " ".$dayClass . ' - Second Answer: ' . $day->findSecondAnswer() . PHP_EOL;
            echo $year. " ".$dayClass . ' - Execution finished in ' . (microtime(true) - $start_time) . ' seconds.' . PHP_EOL;
        } else {
            echo $year. " ".$dayClass . ' does not exist!';

        }
    }
}