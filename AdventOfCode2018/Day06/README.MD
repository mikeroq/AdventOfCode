<article class="day-desc"><h2>--- Day 6: Chronal Coordinates ---</h2><p>The device on your wrist beeps several times, and once again you feel like you're falling.</p>
<p>"<span title="Why is the situation always critical? Why can't the situation just be boring for once?">Situation critical</span>," the device announces. "Destination indeterminate. Chronal interference detected. Please specify new target coordinates."</p>
<p>The device then produces a list of coordinates (your puzzle input). Are they places it thinks are safe or dangerous? It recommends you check manual page 729. The Elves did not give you a manual.</p>
<p><b>If they're dangerous,</b> maybe you can minimize the danger by finding the coordinate that gives the largest distance from the other points.</p>
<p>Using only the <a href="https://en.wikipedia.org/wiki/Taxicab_geometry">Manhattan distance</a>, determine the <b>area</b> around each coordinate by counting the number of <a href="https://en.wikipedia.org/wiki/Integer">integer</a> X,Y locations that are <b>closest</b> to that coordinate (and aren't <b>tied in distance</b> to any other coordinate).</p>
<p>Your goal is to find the size of the <b>largest area</b> that isn't infinite. For example, consider the following list of coordinates:</p>
<pre><code>1, 1
1, 6
8, 3
3, 4
5, 5
8, 9
</code></pre>
<p>If we name these coordinates <code>A</code> through <code>F</code>, we can draw them on a grid, putting <code>0,0</code> at the top left:</p>
<pre><code>..........
.A........
..........
........C.
...D......
.....E....
.B........
..........
..........
........F.
</code></pre>
<p>This view is partial - the actual grid extends infinitely in all directions.  Using the Manhattan distance, each location's closest coordinate can be determined, shown here in lowercase:</p>
<pre><code>aaaaa.cccc
a<b>A</b>aaa.cccc
aaaddecccc
aadddecc<b>C</b>c
..d<b>D</b>deeccc
bb.de<b>E</b>eecc
b<b>B</b>b.eeee..
bbb.eeefff
bbb.eeffff
bbb.ffff<b>F</b>f
</code></pre>



</article>

<form method="post" action="6/answer"><input type="hidden" name="level" value="1"></form>