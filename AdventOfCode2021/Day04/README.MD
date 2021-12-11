<article class="day-desc"><h2>--- Day 4: Giant Squid ---</h2><p>You're already almost 1.5km (almost a mile) below the surface of the ocean, already so deep that you can't see any sunlight. What you <b>can</b> see, however, is a giant squid that has attached itself to the outside of your submarine.</p>
<p>Maybe it wants to play <a href="https://en.wikipedia.org/wiki/Bingo_(American_version)" target="_blank">bingo</a>?</p>
<p>Bingo is played on a set of boards each consisting of a 5x5 grid of numbers. Numbers are chosen at random, and the chosen number is <b>marked</b> on all boards on which it appears. (Numbers may not appear on all boards.) If all numbers in any row or any column of a board are marked, that board <b>wins</b>. (Diagonals don't count.)</p>
<p>The submarine has a <b>bingo subsystem</b> to help passengers (currently, you and the giant squid) pass the time. It automatically generates a random order in which to draw numbers and a random set of boards (your puzzle input). For example:</p>
<pre><code>7,4,9,5,11,17,23,2,0,14,21,24,10,16,13,6,15,25,12,22,18,20,8,19,3,26,1

22 13 17 11  0
 8  2 23  4 24
21  9 14 16  7
 6 10  3 18  5
 1 12 20 15 19

 3 15  0  2 22
 9 18 13 17  5
19  8  7 25 23
20 11 10 24  4
14 21 16 12  6

14 21 17 24  4
10 16 15  9 19
18  8 23 26 20
22 11 13  6  5
 2  0 12  3  7
</code></pre>
<p>After the first five numbers are drawn (<code>7</code>, <code>4</code>, <code>9</code>, <code>5</code>, and <code>11</code>), there are no winners, but the boards are marked as follows (shown here adjacent to each other to save space):</p>
<pre><code>22 13 17 <b>11</b>  0         3 15  0  2 22        14 21 17 24  <b>4</b>
 8  2 23  <b>4</b> 24         <b>9</b> 18 13 17  <b>5</b>        10 16 15  <b>9</b> 19
21  <b>9</b> 14 16  <b>7</b>        19  8  <b>7</b> 25 23        18  8 23 26 20
 6 10  3 18  <b>5</b>        20 <b>11</b> 10 24  <b>4</b>        22 <b>11</b> 13  6  <b>5</b>
 1 12 20 15 19        14 21 16 12  6         2  0 12  3  <b>7</b>
</code></pre>
<p>After the next six numbers are drawn (<code>17</code>, <code>23</code>, <code>2</code>, <code>0</code>, <code>14</code>, and <code>21</code>), there are still no winners:</p>
<pre><code>22 13 <b>17</b> <b>11</b>  <b>0</b>         3 15  <b>0</b>  <b>2</b> 22        <b>14</b> <b>21</b> <b>17</b> 24  <b>4</b>
 8  <b>2</b> <b>23</b>  <b>4</b> 24         <b>9</b> 18 13 <b>17</b>  <b>5</b>        10 16 15  <b>9</b> 19
<b>21</b>  <b>9</b> <b>14</b> 16  <b>7</b>        19  8  <b>7</b> 25 <b>23</b>        18  8 <b>23</b> 26 20
 6 10  3 18  <b>5</b>        20 <b>11</b> 10 24  <b>4</b>        22 <b>11</b> 13  6  <b>5</b>
 1 12 20 15 19        <b>14</b> <b>21</b> 16 12  6         <b>2</b>  <b>0</b> 12  3  <b>7</b>
</code></pre>
<p>Finally, <code>24</code> is drawn:</p>
<pre><code>22 13 <b>17</b> <b>11</b>  <b>0</b>         3 15  <b>0</b>  <b>2</b> 22        <b>14</b> <b>21</b> <b>17</b> <b>24</b>  <b>4</b>
 8  <b>2</b> <b>23</b>  <b>4</b> <b>24</b>         <b>9</b> 18 13 <b>17</b>  <b>5</b>        10 16 15  <b>9</b> 19
<b>21</b>  <b>9</b> <b>14</b> 16  <b>7</b>        19  8  <b>7</b> 25 <b>23</b>        18  8 <b>23</b> 26 20
 6 10  3 18  <b>5</b>        20 <b>11</b> 10 <b>24</b>  <b>4</b>        22 <b>11</b> 13  6  <b>5</b>
 1 12 20 15 19        <b>14</b> <b>21</b> 16 12  6         <b>2</b>  <b>0</b> 12  3  <b>7</b>
</code></pre>



</article>
<p>Your puzzle answer was <code>10680</code>.</p><article class="day-desc"><h2 id="part2">--- Part Two ---</h2><p>On the other hand, it might be wise to try a different strategy: <span title="That's 'cuz a submarine don't pull things' antennas out of their sockets when they lose. Giant squid are known to do that.">let the giant squid win</span>.</p>



</article>
<p>Your puzzle answer was <code>31892</code>.</p><p class="day-success"><b>Both parts of this puzzle are complete! They provide two gold stars: 🌟🌟</b></p>
<h2>--- Results ---</h2>
<pre><code>*** TESTING 2021 DAY Day03 ***
PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

Day03 (mikeroq\AdventOfCode\AdventOfCode2021\Day03\Day03)
 ✔ Part 1 example equals 198
 ✔ Part 2 example equals 230
 ✔ Part 1 real answer equals 3882564
 ✔ Part 2 real answer equals 3385170

Time: 00:00.014, Memory: 6.00 MB

OK (4 tests, 4 assertions)
</code></pre>
<pre><code>*** TESTING 2021 DAY Day04 ***
PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

Day04 (mikeroq\AdventOfCode\AdventOfCode2021\Day04\Day04)
 ✔ Part 1 example equals 4512
 ✔ Part 2 example equals 1924
 ✔ Part 1 real answer equals 10680
 ✔ Part 2 real answer equals 31892

Time: 00:00.074, Memory: 6.00 MB

OK (4 tests, 4 assertions)
</code></pre>