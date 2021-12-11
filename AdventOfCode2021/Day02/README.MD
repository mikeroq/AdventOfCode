<article class="day-desc"><h2>--- Day 2: Dive! ---</h2><p>Now, you need to figure out how to <span title="Tank, I need a pilot program for a B212 helicopter.">pilot this thing</span>.</p>
<p>It seems like the submarine can take a series of commands like <code>forward 1</code>, <code>down 2</code>, or <code>up 3</code>:</p>
<ul>
<li><code>forward X</code> increases the horizontal position by <code>X</code> units.</li>
<li><code>down X</code> <b>increases</b> the depth by <code>X</code> units.</li>
<li><code>up X</code> <b>decreases</b> the depth by <code>X</code> units.</li>
</ul>
<p>Note that since you're on a submarine, <code>down</code> and <code>up</code> affect your <b>depth</b>, and so they have the opposite result of what you might expect.</p>
<p>The submarine seems to already have a planned course (your puzzle input). You should probably figure out where it's going. For example:</p>
<pre><code>forward 5
down 5
forward 8
up 3
down 8
forward 2
</code></pre>
<p>Your horizontal position and depth both start at <code>0</code>. The steps above would then modify them as follows:</p>
<ul>
<li><code>forward 5</code> adds <code>5</code> to your horizontal position, a total of <code>5</code>.</li>
<li><code>down 5</code> adds <code>5</code> to your depth, resulting in a value of <code>5</code>.</li>
<li><code>forward 8</code> adds <code>8</code> to your horizontal position, a total of <code>13</code>.</li>
<li><code>up 3</code> decreases your depth by <code>3</code>, resulting in a value of <code>2</code>.</li>
<li><code>down 8</code> adds <code>8</code> to your depth, resulting in a value of <code>10</code>.</li>
<li><code>forward 2</code> adds <code>2</code> to your horizontal position, a total of <code>15</code>.</li>
</ul>


</article>
<p>Your puzzle answer was <code>1488669</code>.</p><article class="day-desc"><h2 id="part2">--- Part Two ---</h2><p>Based on your calculations, the planned course doesn't seem to make any sense. You find the submarine manual and discover that the process is actually slightly more complicated.</p>
<p>In addition to horizontal position and depth, you'll also need to track a third value, <b>aim</b>, which also starts at <code>0</code>. The commands also mean something entirely different than you first thought:</p>
<ul>
<li><code>down X</code> <b>increases</b> your aim by <code>X</code> units.</li>
<li><code>up X</code> <b>decreases</b> your aim by <code>X</code> units.</li>
<li><code>forward X</code> does two things:<ul>
  <li>It increases your horizontal position by <code>X</code> units.</li>
  <li>It increases your depth by your aim <b>multiplied by</b> <code>X</code>.</li>
</ul></li>
</ul>
<p>Again note that since you're on a submarine, <code>down</code> and <code>up</code> do the opposite of what you might expect: "down" means aiming in the positive direction.</p>
<p>Now, the above example does something different:</p>
<ul>
<li><code>forward 5</code> adds <code>5</code> to your horizontal position, a total of <code>5</code>. Because your aim is <code>0</code>, your depth does not change.</li>
<li><code>down 5</code> adds <code>5</code> to your aim, resulting in a value of <code>5</code>.</li>
<li><code>forward 8</code> adds <code>8</code> to your horizontal position, a total of <code>13</code>. Because your aim is <code>5</code>, your depth increases by <code>8*5=40</code>.</li>
<li><code>up 3</code> decreases your aim by <code>3</code>, resulting in a value of <code>2</code>.</li>
<li><code>down 8</code> adds <code>8</code> to your aim, resulting in a value of <code>10</code>.</li>
<li><code>forward 2</code> adds <code>2</code> to your horizontal position, a total of <code>15</code>.  Because your aim is <code>10</code>, your depth increases by <code>2*10=20</code> to a total of <code>60</code>.</li>
</ul>


</article>
<p>Your puzzle answer was <code>1176514794</code>.</p><p class="day-success"><b>Both parts of this puzzle are complete! They provide two gold stars: 🌟🌟</b></p>
<h2>--- Results ---</h2>
<pre><code>*** TESTING 2021 DAY Day01 ***
PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

Day01 (mikeroq\AdventOfCode\AdventOfCode2021\Day01\Day01)
 ✔ Part 1 example equals 7
 ✔ Part 2 example equals 5
 ✔ Part 1 real answer equals 1713
 ✔ Part 2 real answer equals 1734

Time: 00:00.010, Memory: 6.00 MB

OK (4 tests, 4 assertions)
</code></pre>
<pre><code>*** TESTING 2021 DAY Day02 ***
PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

Day02 (mikeroq\AdventOfCode\AdventOfCode2021\Day02\Day02)
 ✔ Part 1 example equals 150
 ✔ Part 2 example equals 900
 ✔ Part 1 real answer equals 1488669
 ✔ Part 2 real answer equals 1176514794

Time: 00:00.010, Memory: 4.00 MB

OK (4 tests, 4 assertions)
</code></pre>