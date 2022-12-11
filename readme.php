<?php
require_once "vendor/autoload.php";

use Symfony\Component\DomCrawler\Crawler;

$json = json_decode(file_get_contents("progress.json"));
$githubURL = "https://github.com/mikeroq/adventofcode/tree/master";

foreach ($json->completed as $year => $days) {
    $yearReadme = "<h2>Advent Of Code $year</h2>\n<p>Here are my Advent Of Code $year solutions, written in PHP. </p>\n<h3>Progess</h3>\n";
    $yearReadme .= "<table>\n<thead>\n<tr>\n<th>Day</th>\n<th>1</th>\n<th>2</th>\n</tr></thead><tbody>\n";
    foreach ($days as $day => $parts) {
        echo "Processing $year day $day\n";
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
            if ($parts->part1 == true && $parts->part2 == true)
            {
                if (file_exists("$pathSelector/results.txt")) {
                    $output = file_get_contents("$pathSelector/results.txt");
                } else {
                    $output = shell_exec("php cli.php run --year $year --day " . sprintf("%02d", $day));
                    file_put_contents("$pathSelector/results.txt", $output);
                }

                if (file_exists("$pathSelector/test_results.txt")) {
                    $testOutput = file_get_contents("$pathSelector/test_results.txt");
                } else {
                    $testOutput = shell_exec("php cli.php test --year $year --day " . sprintf("%02d", $day));
                    file_put_contents("$pathSelector/test_results.txt", $output);
                }

            } else {
                $output = "Not completed";
                $testOutput = "Not completed";
                unlink("$pathSelector/results.txt");
                unlink("$pathSelector/test_results.txt");
            }
            $dayReadme .= "\n<h2>--- Results ---</h2>\n<pre><code>$output</code></pre>";
            $dayReadme .= "\n<pre><code>$testOutput</code></pre>";

            file_put_contents("$pathSelector/README.MD", $dayReadme);
            $dayReadme = "";
        }
        $yearReadme .= "<tr>\n<td>$icon <a href='$githubURL/$pathSelector/'>$title</a></td>\n<td>$part1</td>\n<td>$part2</td>\n</tr>\n";
    }
    $yearReadme .= "</tbody>\n</table>";
    file_put_contents("AdventOfCode". $year ."/README.MD", $yearReadme);
}
$masterReadme = '<table><thead><tr><th rowspan="2" colspan="2">Year</th><th colspan="2">Progress</th><th>Stars</th></tr></thead><tbody>';

foreach ($json->completed as $year => $days) {
    $masterReadme .= '<tr><td rowspan="2"><a href="'.$githubURL.'/AdventOfCode'.$year.'/">'.$year.'</a></td><td>1</td><td>';
    $count1 = 0;
    $count2 = 0;
    foreach ($days as $day) {
        if ($day->part1 == true) {
            $count1 ++;
        }
        if ($day->part2 == true) {
            $count2 ++;
        }
    }
    foreach ($days as $day => $parts) {
        $pathSelector = "AdventOfCode". $year ."/Day" . sprintf("%02d", $day);
        $emoji = $parts->part1 == true ? '✅' : '⬛';
        $masterReadme .= '<a title="Day '.$day.'" href="'.$githubURL.'/'.$pathSelector.'">'.$emoji.'</a>';
    }
    $masterReadme .= '</td><td>'.$count1.'/25</td><td rowspan="2" align="center">'.($count1 + $count2).'/50<br />✨</td></tr><tr><td>2</td><td>';
    foreach ($days as $day => $parts) {
        $pathSelector = "AdventOfCode". $year ."/Day" . sprintf("%02d", $day);
        $emoji = $parts->part2 == true ? '✅' : '⬛';
        $masterReadme .= '<a title="Day '.$day.'" href="'.$githubURL.'/'.$pathSelector.'">'.$emoji.'</a>';
    }
    $masterReadme .= '</td><td>'.$count2.'/25</td></tr>';

}
$masterReadme .= "</tbody></table>";
file_put_contents("README.MD", $masterReadme);