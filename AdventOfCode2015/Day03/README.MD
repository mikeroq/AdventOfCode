<article class="day-desc"><h2>--- Day 3: Perfectly Spherical Houses in a Vacuum ---</h2><p>Santa is delivering presents to an infinite two-dimensional grid of houses.</p>
<p>He begins by delivering a present to the house at his starting location, and then an elf at the North Pole calls him via radio and tells him where to move next.  Moves are always exactly one house to the north (<code>^</code>), south (<code>v</code>), east (<code>&gt;</code>), or west (<code>&lt;</code>).  After each move, he delivers another present to the house at his new location.</p>


<ul>
<li><code>&gt;</code> delivers presents to <code>2</code> houses: one at the starting location, and one to the east.</li>
<li><code>^&gt;v&lt;</code> delivers presents to <code>4</code> houses in a square, including twice to the house at his starting/ending location.</li>
<li><code>^v^v^v^v^v</code> delivers a bunch of presents to some very lucky children at only <code>2</code> houses.</li>
</ul>
</article>
<p>Your puzzle answer was <code>2592</code>.</p><article class="day-desc"><h2 id="part2">--- Part Two ---</h2><p>The next year, to speed up the process, Santa creates a robot version of himself, <b>Robo-Santa</b>, to deliver presents with him.</p>
<p>Santa and Robo-Santa start at the same location (delivering two presents to the same starting house), then take turns moving based on instructions from the elf, who is <span title="This absolutely real word was invented by someone flipping eggnoggedly through a dictionary.">eggnoggedly</span> reading from the same script as the previous year.</p>


<ul>
<li><code>^v</code> delivers presents to <code>3</code> houses, because Santa goes north, and then Robo-Santa goes south.</li>
<li><code>^&gt;v&lt;</code> now delivers presents to <code>3</code> houses, and Santa and Robo-Santa end up back where they started.</li>
<li><code>^v^v^v^v^v</code> now delivers presents to <code>11</code> houses, with Santa going one direction and Robo-Santa going the other.</li>
</ul>
</article>
<p>Your puzzle answer was <code>2360</code>.</p><p class="day-success"><b>Both parts of this puzzle are complete! They provide two gold stars: 🌟🌟</b></p>
<h2>--- Results ---</h2>
<pre><code>*** TESTING 2015 DAY Day02 ***
PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

Day02 (mikeroq\AdventOfCode\AdventOfCode2015\Day02\Day02)
 ✔ Part 1 equals 101
 ✔ Part 2 equals 48

Time: 00:00.009, Memory: 4.00 MB

OK (2 tests, 2 assertions)
</code></pre>
<pre><code>*** TESTING 2015 DAY Day03 ***
PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

Day03 (mikeroq\AdventOfCode\AdventOfCode2015\Day03\Day03)
 ✔ Part 1 first example equals 2
 ✔ Part 1 second example equals 4
 ✔ Part 1 third example equals 2
 ✔ Part 2 second example equals 3
 ✔ Part 2 third example equals 11

Time: 00:00.009, Memory: 4.00 MB

OK (5 tests, 5 assertions)
</code></pre>