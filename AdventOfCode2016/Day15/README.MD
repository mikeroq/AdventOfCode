<article class="day-desc"><h2>--- Day 15: Timing is Everything ---</h2><p>The halls open into an interior plaza containing a large kinetic sculpture. The sculpture is in a sealed enclosure and seems to involve a set of identical spherical capsules that are carried to the top and allowed to <a href="https://youtu.be/IxDoO9oODOk?t=177">bounce through the maze</a> of spinning pieces.</p>
<p>Part of the sculpture is even interactive! When a button is pressed, a capsule is dropped and tries to fall through slots in a set of rotating discs to finally go through a little hole at the bottom and come out of the sculpture. If any of the slots aren't aligned with the capsule as it passes, the capsule bounces off the disc and soars away. You feel compelled to <span title="These machines are everywhere in Japan, but on a MUCH smaller scale.">get one of those capsules</span>.</p>
<p>The discs pause their motion each second and come in different sizes; they seem to each have a fixed number of positions at which they stop.  You decide to call the position with the slot <code>0</code>, and count up for each position it reaches next.</p>
<p>Furthermore, the discs are spaced out so that after you push the button, one second elapses before the first disc is reached, and one second elapses as the capsule passes from one disc to the one below it.  So, if you push the button at <code>time=100</code>, then the capsule reaches the top disc at <code>time=101</code>, the second disc at <code>time=102</code>, the third disc at <code>time=103</code>, and so on.</p>
<p>The button will only drop a capsule at an integer time - no fractional seconds allowed.</p>
<p>For example, at <code>time=0</code>, suppose you see the following arrangement:</p>
<pre><code>Disc #1 has 5 positions; at time=0, it is at position 4.
Disc #2 has 2 positions; at time=0, it is at position 1.
</code></pre>
<p>If you press the button exactly at <code>time=0</code>, the capsule would start to fall; it would reach the first disc at <code>time=1</code>. Since the first disc was at position <code>4</code> at <code>time=0</code>, by <code>time=1</code> it has ticked one position forward.  As a five-position disc, the next position is <code>0</code>, and the capsule falls through the slot.</p>



</article>

<form method="post" action="15/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>