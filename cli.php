<?php
require_once "vendor/autoload.php";

use Garden\Cli\Cli;
use mikeroq\AdventOfCode\Shared\Advent;

$cli = new Cli();
$advent = new Advent();

$cli->command('run')
    ->description('Run Advent of Code Challenges')
    ->opt('year:y', 'Specify a year to run/test', true, 'integer')
    ->opt('day:d', 'Specify a day to run/test', false, 'integer')
    ->command('test')
    ->description('Test Advent of Code Challenges')
    ->opt('year:y', 'Specify a year to run/test', true, 'integer')
    ->opt('day:d', 'Specify a day to run/test', false, 'integer');
try {
    $args = $cli->parse($argv, true);
} catch (Exception $e) {
    echo "There was an error: $e";
}

if (isset($args)) {
    switch ($args->getCommand()) {
        case 'run':
            if (!empty($args->getOpt('day'))) {
                $advent->runDay($args->getOpt('year'),$args->getOpt('day'));
            } else {
                $doneDays = 25;
                for ($i = 1; $i <= $doneDays; $i++) {
                    $advent->runDay($args->getOpt('year'), $i);
                }
            }
        break;
        case 'test':
            if (!empty($args->getOpt('day'))) {
                $year = $args->getOpt('year');
                $day = 'Day' . sprintf('%02d', $args->getOpt('day'));
                echo "*** TESTING $year DAY $day ***" . PHP_EOL;
                system("\"vendor/bin/phpunit\" --testdox AdventOfCode$year/$day/{$day}Test.php");
            } else {
                system("\"vendor/bin/phpunit\" --testdox AdventOfCode$year/.");
            }
        break;
    }
}