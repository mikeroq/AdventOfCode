<?php
//$year = "2021";
//$classFile = file_get_contents('stubs/Day.php.stub');
//$testClassFile = file_get_contents('stubs/DayTest.php.stub');
//$readmeFile = file_get_contents('stubs/README.MD.stub');
//
//$days = ['11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25'];
//mkdir("AdventOfCode$year");
//foreach ($days as $day) {
//    $class = str_replace(['%DAY%', '%YEAR%'], [$day, $year], $classFile);
//    $test = str_replace(['%DAY%', '%YEAR%'], [$day, $year], $testClassFile);
//    $readme = str_replace(['%DAY%', '%YEAR%'], [$day, $year], $readmeFile);
//
//
//    mkdir("AdventOfCode$year/Day$day");
//
//    file_put_contents("AdventOfCode$year/Day$day/Day$day.php", $class);
//    file_put_contents("AdventOfCode$year/Day$day/Day".$day."Test.php", $test);
//    file_put_contents("AdventOfCode$year/Day$day/README.MD", $readme);
//    file_put_contents("AdventOfCode$year/Day$day/input.txt", '');
//    file_put_contents("AdventOfCode$year/Day$day/test_input.txt", '');
//}