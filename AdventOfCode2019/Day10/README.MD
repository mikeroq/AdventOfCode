<article class="day-desc"><h2>--- Day 10: Monitoring Station ---</h2><p>You fly into the asteroid belt and reach the Ceres monitoring station.  The Elves here have an emergency: they're having trouble tracking all of the asteroids and can't be sure they're safe.</p>
<p>The Elves would like to build a new monitoring station in a nearby area of space; they hand you a map of all of the asteroids in that region (your puzzle input).</p>
<p>The map indicates whether each position is empty (<code>.</code>) or contains an asteroid (<code>#</code>).  The asteroids are much smaller than they appear on the map, and every asteroid is exactly in the center of its marked position.  The asteroids can be described with <code>X,Y</code> coordinates where <code>X</code> is the distance from the left edge and <code>Y</code> is the distance from the top edge (so the top-left corner is <code>0,0</code> and the position immediately to its right is <code>1,0</code>).</p>
<p>Your job is to figure out which asteroid would be the best place to build a <b>new monitoring station</b>. A monitoring station can <b>detect</b> any asteroid to which it has <b>direct line of sight</b> - that is, there cannot be another asteroid <b>exactly</b> between them. This line of sight can be at any angle, not just lines aligned to the grid or <span title="The Elves on Ceres are clearly not concerned with honor.">diagonally</span>. The <b>best</b> location is the asteroid that can <b>detect</b> the largest number of other asteroids.</p>
<p>For example, consider the following map:</p>
<pre><code>.#..#
.....
#####
....#
...<b>#</b>#
</code></pre>
<p>The best location for a new monitoring station on this map is the highlighted asteroid at <code>3,4</code> because it can detect <code>8</code> asteroids, more than any other location. (The only asteroid it cannot detect is the one at <code>1,0</code>; its view of this asteroid is blocked by the asteroid at <code>2,2</code>.) All other asteroids are worse locations; they can detect <code>7</code> or fewer other asteroids. Here is the number of other asteroids a monitoring station on each asteroid could detect:</p>
<pre><code>.7..7
.....
67775
....7
...87
</code></pre>
<p>Here is an asteroid (<code>#</code>) and some examples of the ways its line of sight might be blocked. If there were another asteroid at the location of a capital letter, the locations marked with the corresponding lowercase letter would be blocked and could not be detected:</p>
<pre><code>#.........
...A......
...B..a...
.EDCG....a
..F.c.b...
.....c....
..efd.c.gb
.......c..
....f...c.
...e..d..c
</code></pre>

<ul>
<li>
<pre><code>......#.#.
#..#.#....
..#######.
.#.#.###..
.#..#.....
..#....#.#
#..#....#.
.##.#..###
##...<b>#</b>..#.
.#....####
</code></pre></li>
<li>
<pre><code>#.#...#.#.
.###....#.
.<b>#</b>....#...
##.#.#.#.#
....#.#.#.
.##..###.#
..#...##..
..##....##
......#...
.####.###.
</code></pre></li>
<li>
<pre><code>.#..#..###
####.###.#
....###.#.
..###.<b>#</b>#.#
##.##.#.#.
....###..#
..#.#..#.#
#..#.#.###
.##...##.#
.....#.#..
</code></pre></li>
<li>
<pre><code>.#..##.###...#######
##.############..##.
.#.######.########.#
.###.#######.####.#.
#####.##.#.##.###.##
..#####..#.#########
####################
#.####....###.#.#.##
##.#################
#####.##.###..####..
..######..##.#######
####.##.####...##..#
.#####..#.######.###
##...#.####<b>#</b>#####...
#.##########.#######
.####.#.###.###.#.##
....##.##.###..#####
.#.#.###########.###
#.#.#.#####.####.###
###.##.####.##.#..##
</code></pre></li>
</ul>

</article>

<form method="post" action="10/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>