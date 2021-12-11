<article class="day-desc"><h2>--- Day 3: No Matter How You Slice It ---</h2><p>The Elves managed to locate the chimney-squeeze prototype fabric for Santa's suit (thanks to <span title="WAS IT YOU">someone</span> who helpfully wrote its box IDs on the wall of the warehouse in the middle of the night).  Unfortunately, anomalies are still affecting them - nobody can even agree on how to <b>cut</b> the fabric.</p>
<p>The whole piece of fabric they're working on is a very large square - at least <code>1000</code> inches on each side.</p>
<p>Each Elf has made a <b>claim</b> about which area of fabric would be ideal for Santa's suit.  All claims have an ID and consist of a single rectangle with edges parallel to the edges of the fabric.  Each claim's rectangle is defined as follows:</p>
<ul>
<li>The number of inches between the left edge of the fabric and the left edge of the rectangle.</li>
<li>The number of inches between the top edge of the fabric and the top edge of the rectangle.</li>
<li>The width of the rectangle in inches.</li>
<li>The height of the rectangle in inches.</li>
</ul>
<p>A claim like <code>#123 @ 3,2: 5x4</code> means that claim ID <code>123</code> specifies a rectangle <code>3</code> inches from the left edge, <code>2</code> inches from the top edge, <code>5</code> inches wide, and <code>4</code> inches tall. Visually, it claims the square inches of fabric represented by <code>#</code> (and ignores the square inches of fabric represented by <code>.</code>) in the diagram below:</p>
<pre><code>...........
...........
...#####...
...#####...
...#####...
...#####...
...........
...........
...........
</code></pre>
<p>The problem is that many of the claims <b>overlap</b>, causing two or more claims to cover part of the same areas.  For example, consider the following claims:</p>
<pre><code>#1 @ 1,3: 4x4
#2 @ 3,1: 4x4
#3 @ 5,5: 2x2
</code></pre>
<p>Visually, these claim the following areas:</p>
<pre><code>........
...2222.
...2222.
.11XX22.
.11XX22.
.111133.
.111133.
........
</code></pre>


</article>

<form method="post" action="3/answer"><input type="hidden" name="level" value="1"></form>