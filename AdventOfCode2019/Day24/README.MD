<article class="day-desc"><h2>--- Day 24: Planet of Discord ---</h2><p>You land on <a href="https://en.wikipedia.org/wiki/Eris_(dwarf_planet)">Eris</a>, your last stop before reaching Santa.  As soon as you do, your sensors start picking up strange life forms moving around: Eris is infested with <a href="https://www.nationalgeographic.org/thisday/sep9/worlds-first-computer-bug/">bugs</a>! With an <span title="For a sad version of this story, look up Voices of a Distant Star.">over 24-hour roundtrip</span> for messages between you and Earth, you'll have to deal with this problem on your own.</p>
<p>Eris isn't a very large place; a scan of the entire area fits into a 5x5 grid (your puzzle input). The scan shows <b>bugs</b> (<code>#</code>) and <b>empty spaces</b> (<code>.</code>).</p>
<p>Each <b>minute</b>, The bugs live and die based on the number of bugs in the <b>four adjacent tiles</b>:</p>
<ul>
<li>A bug <b>dies</b> (becoming an empty space) unless there is <b>exactly one</b> bug adjacent to it.</li>
<li>An empty space <b>becomes infested</b> with a bug if <b>exactly one or two</b> bugs are adjacent to it.</li>
</ul>
<p>Otherwise, a bug or empty space remains the same.  (Tiles on the edges of the grid have fewer than four adjacent tiles; the missing tiles count as empty space.) This process happens in every location <b>simultaneously</b>; that is, within the same minute, the number of adjacent bugs is counted for every tile first, and then the tiles are updated.</p>
<p>Here are the first few minutes of an example scenario:</p>
<pre><code>Initial state:
....#
#..#.
#..##
..#..
#....

After 1 minute:
#..#.
####.
###.#
##.##
.##..

After 2 minutes:
#####
....#
....#
...#.
#.###

After 3 minutes:
#....
####.
...##
#.##.
.##.#

After 4 minutes:
####.
....#
##..#
.....
##...
</code></pre>
<p>To understand the nature of the bugs, watch for the first time a layout of bugs and empty spaces <b>matches any previous layout</b>. In the example above, the first layout to appear twice is:</p>
<pre><code>.....
.....
.....
#....
.#...
</code></pre>


</article>

<form method="post" action="24/answer"><input type="hidden" name="level" value="1"></form>