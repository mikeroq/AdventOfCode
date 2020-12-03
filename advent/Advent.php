<?php 
namespace pwnstar\AdventOfCode2020;
require_once "vendor/autoload.php";

class Advent 
{
    public function runDay(int $day)
    {
        $dayClass = 'Day' . sprintf('%02d', $day); 
        $start_time = microtime(true);
        $class = 'pwnstar\AdventOfCode2020\\' . $dayClass . '\\' . $dayClass;
        if (class_exists(($class))) {
            $day = new $class();
            $day->importInput('advent/' . $dayClass . '/input.txt');
            echo $dayClass . ' - First Answer: ' . $day->findFirstAnswer() . PHP_EOL
                . $dayClass . ' - Second Answer: ' . $day->findSecondAnswer() . PHP_EOL
                . $dayClass . ' - Execution finished in ' . (microtime(true) - $start_time) . ' seconds.' . PHP_EOL;
        } else {
            echo $dayClass . ' does not exist!';
        }
    }
}