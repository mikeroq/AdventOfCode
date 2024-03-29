<article class="day-desc"><h2>--- Day 22: Grid Computing ---</h2><p>You gain access to a massive storage cluster arranged in a grid; each storage node is only connected to the four nodes directly adjacent to it (three if the node is on an edge, two if it's in a corner).</p>
<p>You can directly access data <b>only</b> on node <code>/dev/grid/node-x0-y0</code>, but you can perform some limited actions on the other nodes:</p>
<ul>
<li>You can get the disk usage of all nodes (via <a href="https://en.wikipedia.org/wiki/Df_(Unix)#Example"><code>df</code></a>). The result of doing this is in your puzzle input.</li>
<li>You can instruct a node to <span title="You suspect someone misunderstood the x86 MOV instruction."><b>move</b></span> (not copy) <b>all</b> of its data to an adjacent node (if the destination node has enough space to receive the data). The sending node is left empty after this operation.</li>
</ul>
<p>Nodes are named by their position: the node named <code>node-x10-y10</code> is adjacent to nodes <code>node-x9-y10</code>, <code>node-x11-y10</code>, <code>node-x10-y9</code>, and <code>node-x10-y11</code>.</p>
<p>Before you begin, you need to understand the arrangement of data on these nodes. Even though you can only move data between directly connected nodes, you're going to need to rearrange a lot of the data to get access to the data you need.  Therefore, you need to work out how you might be able to shift data around.</p>

<ul>
<li>Node A is <b>not</b> empty (its <code>Used</code> is not zero).</li>
<li>Nodes A and B are <b>not the same</b> node.</li>
<li>The data on node A (its <code>Used</code>) <b>would fit</b> on node B (its <code>Avail</code>).</li>
</ul>

</article>

<form method="post" action="22/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>