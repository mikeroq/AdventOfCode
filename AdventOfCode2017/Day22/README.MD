<article class="day-desc"><h2>--- Day 22: Sporifica Virus ---</h2><p>Diagnostics indicate that the local <b>grid computing cluster</b> has been contaminated with the <b>Sporifica Virus</b>. The grid computing cluster is a seemingly-<span title="The infinite is possible at AdventOfCodeCom.">infinite</span> two-dimensional grid of compute nodes.  Each node is either <b>clean</b> or <b>infected</b> by the virus.</p><p>
</p><p>To <a href="https://en.wikipedia.org/wiki/Morris_worm#The_mistake">prevent overloading</a> the nodes (which would render them useless to the virus) or detection by system administrators, exactly one <b>virus carrier</b> moves through the network, infecting or cleaning nodes as it moves. The virus carrier is always located on a single node in the network (the <b>current node</b>) and keeps track of the <b>direction</b> it is facing.</p>
<p>To avoid detection, the virus carrier works in bursts; in each burst, it <b>wakes up</b>, does some <b>work</b>, and goes back to <b>sleep</b>. The following steps are all executed <b>in order</b> one time each burst:</p>
<ul>
<li>If the <b>current node</b> is <b>infected</b>, it turns to its <b>right</b>.  Otherwise, it turns to its <b>left</b>. (Turning is done in-place; the <b>current node</b> does not change.)</li>
<li>If the <b>current node</b> is <b>clean</b>, it becomes <b>infected</b>.  Otherwise, it becomes <b>cleaned</b>. (This is done <b>after</b> the node is considered for the purposes of changing direction.)</li>
<li>The virus carrier <a href="https://www.youtube.com/watch?v=2vj37yeQQHg">moves</a> <b>forward</b> one node in the direction it is facing.</li>
</ul>
<p>Diagnostics have also provided a <b>map of the node infection status</b> (your puzzle input).  <b>Clean</b> nodes are shown as <code>.</code>; <b>infected</b> nodes are shown as <code>#</code>.  This map only shows the center of the grid; there are many more nodes beyond those shown, but none of them are currently infected.</p>
<p>The virus carrier begins in the middle of the map facing <b>up</b>.</p>
<p>For example, suppose you are given a map like this:</p>
<pre><code>..#
#..
...
</code></pre>
<p>Then, the middle of the infinite grid looks like this, with the virus carrier's position marked with <code>[ ]</code>:</p>
<pre><code>. . . . . . . . .
. . . . . . . . .
. . . . . . . . .
. . . . . # . . .
. . . #[.]. . . .
. . . . . . . . .
. . . . . . . . .
. . . . . . . . .
</code></pre>
<p>The virus carrier is on a <b>clean</b> node, so it turns <b>left</b>, <b>infects</b> the node, and moves left:</p>
<pre><code>. . . . . . . . .
. . . . . . . . .
. . . . . . . . .
. . . . . # . . .
. . .[#]# . . . .
. . . . . . . . .
. . . . . . . . .
. . . . . . . . .
</code></pre>
<p>The virus carrier is on an <b>infected</b> node, so it turns <b>right</b>, <b>cleans</b> the node, and moves up:</p>
<pre><code>. . . . . . . . .
. . . . . . . . .
. . . . . . . . .
. . .[.]. # . . .
. . . . # . . . .
. . . . . . . . .
. . . . . . . . .
. . . . . . . . .
</code></pre>
<p>Four times in a row, the virus carrier finds a <b>clean</b>, <b>infects</b> it, turns <b>left</b>, and moves forward, ending in the same place and still facing up:</p>
<pre><code>. . . . . . . . .
. . . . . . . . .
. . . . . . . . .
. . #[#]. # . . .
. . # # # . . . .
. . . . . . . . .
. . . . . . . . .
. . . . . . . . .
</code></pre>
<p>Now on the same node as before, it sees an infection, which causes it to turn <b>right</b>, <b>clean</b> the node, and move forward:</p>
<pre><code>. . . . . . . . .
. . . . . . . . .
. . . . . . . . .
. . # .[.]# . . .
. . # # # . . . .
. . . . . . . . .
. . . . . . . . .
. . . . . . . . .
</code></pre>
<p>After the above actions, a total of <code>7</code> bursts of activity had taken place. Of them, <code>5</code> bursts of activity caused an infection.</p>
<p>After a total of <code>70</code>, the grid looks like this, with the virus carrier facing up:</p>
<pre><code>. . . . . # # . .
. . . . # . . # .
. . . # . . . . #
. . # . #[.]. . #
. . # . # . . # .
. . . . . # # . .
. . . . . . . . .
. . . . . . . . .
</code></pre>



</article>

<form method="post" action="22/answer"><input type="hidden" name="level" value="1"></form>