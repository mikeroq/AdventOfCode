<article class="day-desc"><h2>--- Day 17: Set and Forget ---</h2><p>An early warning system detects an incoming <a href="https://en.wikipedia.org/wiki/Solar_flare">solar flare</a> and automatically activates the ship's electromagnetic shield. Unfortunately, this has cut off the Wi-Fi for many small robots that, unaware of the impending danger, are now trapped on exterior scaffolding on the unsafe side of the shield. To rescue them, you'll have to act quickly!</p>
<p>The only tools at your disposal are some wired cameras and a small vacuum robot currently asleep at its charging station. The video quality is poor, but the vacuum robot has a needlessly bright LED that makes it easy to spot no matter where it is.</p>
<p>An <a href="9">Intcode</a> program, the <b>Aft Scaffolding Control and Information Interface</b> (ASCII, your puzzle input), provides access to the cameras and the vacuum robot.  Currently, because the vacuum robot is asleep, you can only access the cameras.</p>
<p>Running the ASCII program on your Intcode computer will provide the current view of the scaffolds.  This is output, <span title="PURELY COINCIDENTALLY">purely coincidentally</span>, as <a href="https://simple.wikipedia.org/wiki/ASCII">ASCII code</a>: <code>35</code> means <code>#</code>, <code>46</code> means <code>.</code>, <code>10</code> starts a <a href="https://en.wikipedia.org/wiki/Newline#In_programming_languages">new line</a> of output below the current one, and so on. (Within a line, characters are drawn left-to-right.)</p>
<p>In the camera output, <code>#</code> represents a scaffold and <code>.</code> represents open space. The vacuum robot is visible as <code>^</code>, <code>v</code>, <code>&lt;</code>, or <code>&gt;</code> depending on whether it is facing up, down, left, or right respectively. When drawn like this, the vacuum robot is <b>always on a scaffold</b>; if the vacuum robot ever walks off of a scaffold and begins <b>tumbling through space uncontrollably</b>, it will instead be visible as <code>X</code>.</p>
<p>In general, the scaffold forms a path, but it sometimes loops back onto itself.  For example, suppose you can see the following view from the cameras:</p>
<pre><code>..#..........
..#..........
#######...###
#.#...#...#.#
#############
..#...#...#..
..#####...^..
</code></pre>
<p>Here, the vacuum robot, <code>^</code> is facing up and sitting at one end of the scaffold near the bottom-right of the image. The scaffold continues up, loops across itself several times, and ends at the top-left of the image.</p>
<p>The first step is to calibrate the cameras by getting the <b>alignment parameters</b> of some well-defined points.  Locate all <b>scaffold intersections</b>; for each, its alignment parameter is the distance between its left edge and the left edge of the view multiplied by the distance between its top edge and the top edge of the view.  Here, the intersections from the above image are marked <code>O</code>:</p>
<pre><code>..#..........
..#..........
##O####...###
#.#...#...#.#
##O###O###O##
..#...#...#..
..#####...^..
</code></pre>
<p>For these intersections:</p>
<ul>
<li>The top-left intersection is <code>2</code> units from the left of the image and <code>2</code> units from the top of the image, so its alignment parameter is <code>2 * 2 = <b>4</b></code>.</li>
<li>The bottom-left intersection is <code>2</code> units from the left and <code>4</code> units from the top, so its alignment parameter is <code>2 * 4 = <b>8</b></code>.</li>
<li>The bottom-middle intersection is <code>6</code> from the left and <code>4</code> from the top, so its alignment parameter is <code><b>24</b></code>.</li>
<li>The bottom-right intersection's alignment parameter is <code><b>40</b></code>.</li>
</ul>


</article>

<form method="post" action="17/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>