<article class="day-desc"><h2>--- Day 12: Rain Risk ---</h2><p>Your ferry made decent progress toward the island, but the storm came in <span title="At least it wasn't a Category Six!">faster than anyone expected</span>. The ferry needs to take <b>evasive actions</b>!</p>
<p>Unfortunately, the ship's navigation computer seems to be malfunctioning; rather than giving a route directly to safety, it produced extremely circuitous instructions. When the captain uses the <a href="https://en.wikipedia.org/wiki/Public_address_system" target="_blank">PA system</a> to ask if anyone can help, you quickly volunteer.</p>
<p>The navigation instructions (your puzzle input) consists of a sequence of single-character <b>actions</b> paired with integer input <b>values</b>. After staring at them for a few minutes, you work out what they probably mean:</p>
<ul>
<li>Action <b><code>N</code></b> means to move <b>north</b> by the given value.</li>
<li>Action <b><code>S</code></b> means to move <b>south</b> by the given value.</li>
<li>Action <b><code>E</code></b> means to move <b>east</b> by the given value.</li>
<li>Action <b><code>W</code></b> means to move <b>west</b> by the given value.</li>
<li>Action <b><code>L</code></b> means to turn <b>left</b> the given number of degrees.</li>
<li>Action <b><code>R</code></b> means to turn <b>right</b> the given number of degrees.</li>
<li>Action <b><code>F</code></b> means to move <b>forward</b> by the given value in the direction the ship is currently facing.</li>
</ul>
<p>The ship starts by facing <b>east</b>. Only the <code>L</code> and <code>R</code> actions change the direction the ship is facing. (That is, if the ship is facing east and the next instruction is <code>N10</code>, the ship would move north 10 units, but would still move east if the following action were <code>F</code>.)</p>
<p>For example:</p>
<pre><code>F10
N3
F7
R90
F11
</code></pre>
<p>These instructions would be handled as follows:</p>
<ul>
<li><code>F10</code> would move the ship 10 units east (because the ship starts by facing east) to <b>east 10, north 0</b>.</li>
<li><code>N3</code> would move the ship 3 units north to <b>east 10, north 3</b>.</li>
<li><code>F7</code> would move the ship another 7 units east (because the ship is still facing east) to <b>east 17, north 3</b>.</li>
<li><code>R90</code> would cause the ship to turn right by 90 degrees and face <b>south</b>; it remains at <b>east 17, north 3</b>.</li>
<li><code>F11</code> would move the ship 11 units south to <b>east 17, south 8</b>.</li>
</ul>


</article>
<p>Your puzzle answer was <code>439</code>.</p><article class="day-desc"><h2 id="part2">--- Part Two ---</h2><p>Before you can give the destination to the captain, you realize that the actual action meanings were printed on the back of the instructions the whole time.</p>
<p>Almost all of the actions indicate how to move a <b>waypoint</b> which is relative to the ship's position:</p>
<ul>
<li>Action <b><code>N</code></b> means to move the waypoint <b>north</b> by the given value.</li>
<li>Action <b><code>S</code></b> means to move the waypoint <b>south</b> by the given value.</li>
<li>Action <b><code>E</code></b> means to move the waypoint <b>east</b> by the given value.</li>
<li>Action <b><code>W</code></b> means to move the waypoint <b>west</b> by the given value.</li>
<li>Action <b><code>L</code></b> means to rotate the waypoint around the ship <b>left</b> (<b>counter-clockwise</b>) the given number of degrees.</li>
<li>Action <b><code>R</code></b> means to rotate the waypoint around the ship <b>right</b> (<b>clockwise</b>) the given number of degrees.</li>
<li>Action <b><code>F</code></b> means to move <b>forward</b> to the waypoint a number of times equal to the given value.</li>
</ul>
<p>The waypoint starts <b>10 units east and 1 unit north</b> relative to the ship. The waypoint is relative to the ship; that is, if the ship moves, the waypoint moves with it.</p>
<p>For example, using the same instructions as above:</p>
<ul>
<li><code>F10</code> moves the ship to the waypoint 10 times (a total of <b>100 units east and 10 units north</b>), leaving the ship at <b>east 100, north 10</b>. The waypoint stays 10 units east and 1 unit north of the ship.</li>
<li><code>N3</code> moves the waypoint 3 units north to <b>10 units east and 4 units north of the ship</b>. The ship remains at <b>east 100, north 10</b>.</li>
<li><code>F7</code> moves the ship to the waypoint 7 times (a total of <b>70 units east and 28 units north</b>), leaving the ship at <b>east 170, north 38</b>. The waypoint stays 10 units east and 4 units north of the ship.</li>
<li><code>R90</code> rotates the waypoint around the ship clockwise 90 degrees, moving it to <b>4 units east and 10 units south of the ship</b>. The ship remains at <b>east 170, north 38</b>.</li>
<li><code>F11</code> moves the ship to the waypoint 11 times (a total of <b>44 units east and 110 units south</b>), leaving the ship at <b>east 214, south 72</b>. The waypoint stays 4 units east and 10 units south of the ship.</li>
</ul>


</article>
<p>Your puzzle answer was <code>12385</code>.</p><p class="day-success"><b>Both parts of this puzzle are complete! They provide two gold stars: 🌟🌟</b></p>
<h2>--- Results ---</h2>
<pre><code>
Fatal error: Uncaught TypeError: mikeroq\AdventOfCode\AdventOfCode2020\Day12\Day12::findFirstAnswer(): Return value must be of type int, none returned in C:\Code\AdventOfCode\AdventOfCode2020\Day12\Day12.php:17
Stack trace:
#0 C:\Code\AdventOfCode\Shared\Advent.php(15): mikeroq\AdventOfCode\AdventOfCode2020\Day12\Day12->findFirstAnswer()
#1 C:\Code\AdventOfCode\cli.php(28): mikeroq\AdventOfCode\Shared\Advent->runDay(2020, Object(mikeroq\AdventOfCode\AdventOfCode2020\Day12\Day12))
#2 {main}
  thrown in C:\Code\AdventOfCode\AdventOfCode2020\Day12\Day12.php on line 17
</code></pre>
<pre><code>*** TESTING 2020 DAY Day12 ***
PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

Day12 (mikeroq\AdventOfCode\AdventOfCode2020\Day12\Day12)
 ✘ Part 1 equals 0
   │
   │ TypeError: mikeroq\AdventOfCode\AdventOfCode2020\Day12\Day12::findFirstAnswer(): Return value must be of type int, none returned
   │
   │ C:\Code\AdventOfCode\AdventOfCode2020\Day12\Day12.php:17
   │ C:\Code\AdventOfCode\AdventOfCode2020\Day12\Day12Test.php:14
   │

 ✘ Part 2 equals 0
   │
   │ TypeError: mikeroq\AdventOfCode\AdventOfCode2020\Day12\Day12::findSecondAnswer(): Return value must be of type int, none returned
   │
   │ C:\Code\AdventOfCode\AdventOfCode2020\Day12\Day12.php:22
   │ C:\Code\AdventOfCode\AdventOfCode2020\Day12\Day12Test.php:22
   │

Time: 00:00.023, Memory: 6.00 MB


ERRORS!
Tests: 2, Assertions: 0, Errors: 2.
</code></pre>