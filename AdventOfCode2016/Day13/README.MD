<article class="day-desc"><h2>--- Day 13: A Maze of Twisty Little Cubicles ---</h2><p>You arrive at the first floor of this new building to discover a much less welcoming environment than the shiny atrium of the last one.  Instead, you are in a maze of <span title="You are in a twisty alike of little cubicles, all maze.">twisty little cubicles</span>, all alike.</p>
<p>Every location in this area is addressed by a pair of non-negative integers (<code>x,y</code>). Each such coordinate is either a wall or an open space. You can't move diagonally. The cube maze starts at <code>0,0</code> and seems to extend infinitely toward <b>positive</b> <code>x</code> and <code>y</code>; negative values are <b>invalid</b>, as they represent a location outside the building. You are in a small waiting area at <code>1,1</code>.</p>
<p>While it seems chaotic, a nearby morale-boosting poster explains, the layout is actually quite logical. You can determine whether a given <code>x,y</code> coordinate will be a wall or an open space using a simple system:</p>
<ul>
<li>Find <code>x*x + 3*x + 2*x*y + y + y*y</code>.</li>
<li>Add the office designer's favorite number (your puzzle input).</li>
<li>Find the <a href="https://en.wikipedia.org/wiki/Binary_number">binary representation</a> of that sum; count the <b>number</b> of <a href="https://en.wikipedia.org/wiki/Bit">bits</a> that are <code>1</code>.
<ul>
<li>If the number of bits that are <code>1</code> is <b>even</b>, it's an <b>open space</b>.</li>
<li>If the number of bits that are <code>1</code> is <b>odd</b>, it's a <b>wall</b>.</li>
</ul>
</li>
</ul>
<p>For example, if the office designer's favorite number were <code>10</code>, drawing walls as <code>#</code> and open spaces as <code>.</code>, the corner of the building containing <code>0,0</code> would look like this:</p>
<pre><code>  0123456789
0 .#.####.##
1 ..#..#...#
2 #....##...
3 ###.#.###.
4 .##..#..#.
5 ..##....#.
6 #...##.###
</code></pre>
<p>Now, suppose you wanted to reach <code>7,4</code>. The shortest route you could take is marked as <code>O</code>:</p>
<pre><code>  0123456789
0 .#.####.##
1 .O#..#...#
2 #OOO.##...
3 ###O#.###.
4 .##OO#OO#.
5 ..##OOO.#.
6 #...##.###
</code></pre>


</article>

<form method="post" action="13/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>