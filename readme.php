<?php
require_once "vendor/autoload.php";

use Symfony\Component\DomCrawler\Crawler;

$json = json_decode(file_get_contents("progress.json"));

foreach ($json->completed as $year => $days) {
    $yearReadme = "<h2>Advent Of Code $year</h2>\n<p>Here are my Advent Of Code $year solutions, written in PHP. </p>\n<h3>Progess</h3>\n";
    $yearReadme .= "<table>\n<thead>\n<tr>\n<th>Day</th>\n<th>Part 1</th>\n<th>Part 2</th>\n</tr></thead><tbody>\n";
    foreach ($days as $day => $parts) {
        $icon = ($parts->part1 == true && $parts->part2 == true) ? '✅ ' : '⌚ ';
        $part1 = $parts->part1 == true ? '✨' : '';
        $part2 = $parts->part2 == true ? '✨' : '';
        $title = "Day $day: TBD";
        $dayReadme = "";
        $htmlFile = "HTML/$year"."Day".$day.".html";
        $pathSelector = "AdventOfCode". $year ."/Day" . sprintf("%02d", $day);
        if (file_exists($htmlFile)) {
            $crawler = new Crawler(file_get_contents($htmlFile));
            $title = trim(str_replace('---', '', $crawler->filter('h2:first-of-type')->text()));
            $crawler->filter('script')->each(function (Crawler $crawler) {
                $node = $crawler->getNode(0);
                $node->parentNode->removeChild($node);
            });
            $crawler->filter('main p:nth-last-child(-n+3)')->each(function (Crawler $crawler) {
                $node = $crawler->getNode(0);
                $node->parentNode->removeChild($node);
            });
            $dayReadme .= trim(str_replace(['<em', '</em>', '<p class="day-success">', '**</p>'], ['<b','</b>', '<p class="day-success"><b>', '🌟🌟</b></p>'], $crawler->filter('main')->html()));
            if (file_exists("$pathSelector/results.txt")) {
                $output = file_get_contents("$pathSelector/results.txt");
            } else {
                $output = shell_exec("php cli.php run --year $year --day " . sprintf("%02d", $day));
                file_put_contents("$pathSelector/results.txt", $output);
            }
            $dayReadme .= "\n<h2>--- Results ---</h2>\n<pre><code>$output</code></pre>";
            if (file_exists("$pathSelector/test_results.txt")) {
                $output = file_get_contents("$pathSelector/test_results.txt");
            } else {
                $output = shell_exec("php cli.php test --year $year --day " . sprintf("%02d", $day));
                file_put_contents("$pathSelector/test_results.txt", $output);
            }
            $dayReadme .= "\n<pre><code>$output</code></pre>";
            file_put_contents("$pathSelector/README.MD", $dayReadme);
            $dayReadme = "";
        }
        $yearReadme .= "<tr>\n<td>$icon <a href=''>$title</a></td>\n<td>$part1</td>\n<td>$part2</td>\n</tr>\n";
    }
    $yearReadme .= "</tbody>\n</table>";
    file_put_contents("AdventOfCode". $year ."/README.MD", $yearReadme);
    dd("end test year 2015");
}