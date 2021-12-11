<article class="day-desc"><h2>--- Day 21: Fractal Art ---</h2><p>You find a program trying to generate some art. It uses a strange process that involves <span title="This technique is also often used on TV.">repeatedly enhancing</span> the detail of an image through a set of rules.</p>
<p>The image consists of a two-dimensional square grid of pixels that are either on (<code>#</code>) or off (<code>.</code>). The program always begins with this pattern:</p>
<pre><code>.#.
..#
###
</code></pre>
<p>Because the pattern is both <code>3</code> pixels wide and <code>3</code> pixels tall, it is said to have a <b>size</b> of <code>3</code>.</p>
<p>Then, the program repeats the following process:</p>
<ul>
<li>If the size is evenly divisible by <code>2</code>, break the pixels up into <code>2x2</code> squares, and convert each <code>2x2</code> square into a <code>3x3</code> square by following the corresponding <b>enhancement rule</b>.</li>
<li>Otherwise, the size is evenly divisible by <code>3</code>; break the pixels up into <code>3x3</code> squares, and convert each <code>3x3</code> square into a <code>4x4</code> square by following the corresponding <b>enhancement rule</b>.</li>
</ul>
<p>Because each square of pixels is replaced by a larger one, the image gains pixels and so its <b>size</b> increases.</p>
<p>The artist's book of enhancement rules is nearby (your puzzle input); however, it seems to be missing rules.  The artist explains that sometimes, one must <b>rotate</b> or <b>flip</b> the input pattern to find a match. (Never rotate or flip the output pattern, though.) Each pattern is written concisely: rows are listed as single units, ordered top-down, and separated by slashes. For example, the following rules correspond to the adjacent patterns:</p>
<pre><code>../.#  =  ..
          .#

                .#.
.#./..#/###  =  ..#
                ###

                        #..#
#..#/..../#..#/.##.  =  ....
                        #..#
                        .##.
</code></pre>
<p>When searching for a rule to use, rotate and flip the pattern as necessary.  For example, all of the following patterns match the same rule:</p>
<pre><code>.#.   .#.   #..   ###
..#   #..   #.#   ..#
###   ###   ##.   .#.
</code></pre>
<p>Suppose the book contained the following two rules:</p>
<pre><code>../.# =&gt; ##./#../...
.#./..#/### =&gt; #..#/..../..../#..#
</code></pre>
<p>As before, the program begins with this pattern:</p>
<pre><code>.#.
..#
###
</code></pre>
<p>The size of the grid (<code>3</code>) is not divisible by <code>2</code>, but it is divisible by <code>3</code>. It divides evenly into a single square; the square matches the second rule, which produces:</p>
<pre><code>#..#
....
....
#..#
</code></pre>
<p>The size of this enhanced grid (<code>4</code>) is evenly divisible by <code>2</code>, so that rule is used. It divides evenly into four squares:</p>
<pre><code>#.|.#
..|..
--+--
..|..
#.|.#
</code></pre>
<p>Each of these squares matches the same rule (<code>../.# =&gt; ##./#../...</code>), three of which require some flipping and rotation to line up with the rule. The output for the rule is the same in all four cases:</p>
<pre><code>##.|##.
#..|#..
...|...
---+---
##.|##.
#..|#..
...|...
</code></pre>
<p>Finally, the squares are joined into a new grid:</p>
<pre><code>##.##.
#..#..
......
##.##.
#..#..
......
</code></pre>


</article>

<form method="post" action="21/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>