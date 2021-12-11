<article class="day-desc"><h2>--- Day 5: Hydrothermal Venture ---</h2><p>You come across a field of <a href="https://en.wikipedia.org/wiki/Hydrothermal_vent" target="_blank">hydrothermal vents</a> on the ocean floor! These vents constantly produce large, opaque clouds, so it would be best to avoid them if possible.</p>
<p>They tend to form in <b>lines</b>; the submarine helpfully produces a list of nearby <span title="Maybe they're Bresenham vents.">lines of vents</span> (your puzzle input) for you to review. For example:</p>
<pre><code>0,9 -&gt; 5,9
8,0 -&gt; 0,8
9,4 -&gt; 3,4
2,2 -&gt; 2,1
7,0 -&gt; 7,4
6,4 -&gt; 2,0
0,9 -&gt; 2,9
3,4 -&gt; 1,4
0,0 -&gt; 8,8
5,5 -&gt; 8,2
</code></pre>
<p>Each line of vents is given as a line segment in the format <code>x1,y1 -&gt; x2,y2</code> where <code>x1</code>,<code>y1</code> are the coordinates of one end the line segment and <code>x2</code>,<code>y2</code> are the coordinates of the other end. These line segments include the points at both ends. In other words:</p>
<ul>
<li>An entry like <code>1,1 -&gt; 1,3</code> covers points <code>1,1</code>, <code>1,2</code>, and <code>1,3</code>.</li>
<li>An entry like <code>9,7 -&gt; 7,7</code> covers points <code>9,7</code>, <code>8,7</code>, and <code>7,7</code>.</li>
</ul>
<p>For now, <b>only consider horizontal and vertical lines</b>: lines where either <code>x1 = x2</code> or <code>y1 = y2</code>.</p>
<p>So, the horizontal and vertical lines from the above list would produce the following diagram:</p>
<pre><code>.......1..
..1....1..
..1....1..
.......1..
.112111211
..........
..........
..........
..........
222111....
</code></pre>



</article>
<p>Your puzzle answer was <code>7473</code>.</p><article class="day-desc"><h2 id="part2">--- Part Two ---</h2><p>Unfortunately, considering only horizontal and vertical lines doesn't give you the full picture; you need to also consider <b>diagonal lines</b>.</p>
<p>Because of the limits of the hydrothermal vent mapping system, the lines in your list will only ever be horizontal, vertical, or a diagonal line at exactly 45 degrees. In other words:</p>
<ul>
<li>An entry like <code>1,1 -&gt; 3,3</code> covers points <code>1,1</code>, <code>2,2</code>, and <code>3,3</code>.</li>
<li>An entry like <code>9,7 -&gt; 7,9</code> covers points <code>9,7</code>, <code>8,8</code>, and <code>7,9</code>.</li>
</ul>
<p>Considering all lines from the above example would now produce the following diagram:</p>
<pre><code>1.1....11.
.111...2..
..2.1.111.
...1.2.2..
.112313211
...1.2....
..1...1...
.1.....1..
1.......1.
222111....
</code></pre>


</article>
<p>Your puzzle answer was <code>24164</code>.</p><p class="day-success"><b>Both parts of this puzzle are complete! They provide two gold stars: 🌟🌟</b></p>
<h2>--- Results ---</h2>
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
<pre><code>*** TESTING 2021 DAY Day05 ***
PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

Day05 (mikeroq\AdventOfCode\AdventOfCode2021\Day05\Day05)
 ✔ Part 1 example equals 5
 ✔ Part 1 real answer equals 7473
 ✔ Part 2 example equals 12
 ✔ Part 2 real answer equals 24164

Time: 00:00.117, Memory: 20.00 MB

OK (4 tests, 4 assertions)
</code></pre>