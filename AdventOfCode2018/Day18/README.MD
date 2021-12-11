<article class="day-desc"><h2>--- Day 18: Settlers of The North Pole ---</h2><p>On the outskirts of the North Pole base construction project, many Elves are collecting <span title="Trade wood for sheep?">lumber</span>.</p>
<p>The lumber collection area is 50 acres by 50 acres; each acre can be either <b>open ground</b> (<code>.</code>), <b>trees</b> (<code>|</code>), or a <b>lumberyard</b> (<code>#</code>). You take a scan of the area (your puzzle input).</p>
<p>Strange magic is at work here: each minute, the landscape looks entirely different. In exactly <b>one minute</b>, an open acre can fill with trees, a wooded acre can be converted to a lumberyard, or a lumberyard can be cleared to open ground (the lumber having been sent to other projects).</p>
<p>The change to each acre is based entirely on <b>the contents of that acre</b> as well as <b>the number of open, wooded, or lumberyard acres adjacent to it</b> at the start of each minute. Here, "adjacent" means any of the eight acres surrounding that acre. (Acres on the edges of the lumber collection area might have fewer than eight adjacent acres; the missing acres aren't counted.)</p>
<p>In particular:</p>
<ul>
<li>An <b>open</b> acre will become filled with <b>trees</b> if <b>three or more</b> adjacent acres contained trees. Otherwise, nothing happens.</li>
<li>An acre filled with <b>trees</b> will become a <b>lumberyard</b> if <b>three or more</b> adjacent acres were lumberyards. Otherwise, nothing happens.</li>
<li>An acre containing a <b>lumberyard</b> will remain a <b>lumberyard</b> if it was adjacent to <b>at least one other lumberyard and at least one acre containing trees</b>. Otherwise, it becomes <b>open</b>.</li>
</ul>
<p>These changes happen across all acres <b>simultaneously</b>, each of them using the state of all acres at the beginning of the minute and changing to their new form by the end of that same minute. Changes that happen during the minute don't affect each other.</p>
<p>For example, suppose the lumber collection area is instead only 10 by 10 acres with this initial configuration:</p>
<pre><code>Initial state:
.#.#...|#.
.....#|##|
.|..|...#.
..|#.....#
#.#|||#|#|
...#.||...
.|....|...
||...#|.#|
|.||||..|.
...#.|..|.

After 1 minute:
.......##.
......|###
.|..|...#.
..|#||...#
..##||.|#|
...#||||..
||...|||..
|||||.||.|
||||||||||
....||..|.

After 2 minutes:
.......#..
......|#..
.|.|||....
..##|||..#
..###|||#|
...#|||||.
|||||||||.
||||||||||
||||||||||
.|||||||||

After 3 minutes:
.......#..
....|||#..
.|.||||...
..###|||.#
...##|||#|
.||##|||||
||||||||||
||||||||||
||||||||||
||||||||||

After 4 minutes:
.....|.#..
...||||#..
.|.#||||..
..###||||#
...###||#|
|||##|||||
||||||||||
||||||||||
||||||||||
||||||||||

After 5 minutes:
....|||#..
...||||#..
.|.##||||.
..####|||#
.|.###||#|
|||###||||
||||||||||
||||||||||
||||||||||
||||||||||

After 6 minutes:
...||||#..
...||||#..
.|.###|||.
..#.##|||#
|||#.##|#|
|||###||||
||||#|||||
||||||||||
||||||||||
||||||||||

After 7 minutes:
...||||#..
..||#|##..
.|.####||.
||#..##||#
||##.##|#|
|||####|||
|||###||||
||||||||||
||||||||||
||||||||||

After 8 minutes:
..||||##..
..|#####..
|||#####|.
||#...##|#
||##..###|
||##.###||
|||####|||
||||#|||||
||||||||||
||||||||||

After 9 minutes:
..||###...
.||#####..
||##...##.
||#....###
|##....##|
||##..###|
||######||
|||###||||
||||||||||
||||||||||

After 10 minutes:
.||##.....
||###.....
||##......
|##.....##
|##.....##
|##....##|
||##.####|
||#####|||
||||#|||||
||||||||||
</code></pre>


</article>

<form method="post" action="18/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>