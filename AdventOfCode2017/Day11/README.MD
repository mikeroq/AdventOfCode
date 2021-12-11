<article class="day-desc"><h2>--- Day 11: Hex Ed ---</h2><p>Crossing the bridge, you've barely reached the other side of the stream when a program comes up to you, clearly in distress.  "It's my child process," she says, "he's gotten lost in an infinite grid!"</p>
<p>Fortunately for her, you have plenty of experience with infinite grids.</p>
<p>Unfortunately for you, it's a <a href="https://en.wikipedia.org/wiki/Hexagonal_tiling">hex grid</a>.</p>
<p>The hexagons ("hexes") in <span title="Raindrops on roses and whiskers on kittens.">this grid</span> are aligned such that adjacent hexes can be found to the north, northeast, southeast, south, southwest, and northwest:</p>
<pre><code>  \ n  /
nw +--+ ne
  /    \
-+      +-
  \    /
sw +--+ se
  / s  \
</code></pre>


<ul>
<li><code>ne,ne,ne</code> is <code>3</code> steps away.</li>
<li><code>ne,ne,sw,sw</code> is <code>0</code> steps away (back where you started).</li>
<li><code>ne,ne,s,s</code> is <code>2</code> steps away (<code>se,se</code>).</li>
<li><code>se,sw,se,sw,sw</code> is <code>3</code> steps away (<code>s,s,sw</code>).</li>
</ul>
</article>

<form method="post" action="11/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>