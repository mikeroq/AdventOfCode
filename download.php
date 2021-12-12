<?php
require_once "vendor/autoload.php";
$years = ['2021'];
$days = ['11'];

foreach($years as $year) {
    foreach ($days as $day) {
        $c = curl_init("https://adventofcode.com/$year/day/$day");
        curl_setopt($c, CURLOPT_VERBOSE, 1);
        curl_setopt($c, CURLOPT_COOKIE, 'session=53616c7465645f5f4771c3dd63698c59cce79783e8471219ea09a0443d42993a3978362151ffaecf751243970509fa65');
        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
        $page = curl_exec($c);
        curl_close($c);

        file_put_contents("HTML/$year"."Day".$day.".html", $page);
    }
}