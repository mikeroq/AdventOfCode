<article class="day-desc"><h2>--- Day 8: Treetop Tree House ---</h2><p>The expedition comes across a peculiar patch of tall trees all planted carefully in a grid. The Elves explain that a previous expedition planted these trees as a reforestation effort. Now, they're curious if this would be a good location for a <a href="https://en.wikipedia.org/wiki/Tree_house" target="_blank">tree house</a>.</p>
<p>First, determine whether there is enough tree cover here to keep a tree house <b>hidden</b>. To do this, you need to count the number of trees that are <b>visible from outside the grid</b> when looking directly along a row or column.</p>
<p>The Elves have already launched a <a href="https://en.wikipedia.org/wiki/Quadcopter" target="_blank">quadcopter</a> to generate a map with the height of each tree (<span title="The Elves have already launched a quadcopter (your puzzle input).">your puzzle input</span>). For example:</p>
<pre><code>30373
25512
65332
33549
35390
</code></pre>
<p>Each tree is represented as a single digit whose value is its height, where <code>0</code> is the shortest and <code>9</code> is the tallest.</p>
<p>A tree is <b>visible</b> if all of the other trees between it and an edge of the grid are <b>shorter</b> than it. Only consider trees in the same row or column; that is, only look up, down, left, or right from any given tree.</p>
<p>All of the trees around the edge of the grid are <b>visible</b> - since they are already on the edge, there are no trees to block the view. In this example, that only leaves the <b>interior nine trees</b> to consider:</p>
<ul>
<li>The top-left <code>5</code> is <b>visible</b> from the left and top. (It isn't visible from the right or bottom since other trees of height <code>5</code> are in the way.)</li>
<li>The top-middle <code>5</code> is <b>visible</b> from the top and right.</li>
<li>The top-right <code>1</code> is not visible from any direction; for it to be visible, there would need to only be trees of height <b>0</b> between it and an edge.</li>
<li>The left-middle <code>5</code> is <b>visible</b>, but only from the right.</li>
<li>The center <code>3</code> is not visible from any direction; for it to be visible, there would need to be only trees of at most height <code>2</code> between it and an edge.</li>
<li>The right-middle <code>3</code> is <b>visible</b> from the right.</li>
<li>In the bottom row, the middle <code>5</code> is <b>visible</b>, but the <code>3</code> and <code>4</code> are not.</li>
</ul>


</article>

<form method="post" action="8/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>