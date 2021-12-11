<article class="day-desc"><h2>--- Day 8: Two-Factor Authentication ---</h2><p>You come across a door implementing what you can only assume is an implementation of <a href="https://en.wikipedia.org/wiki/Multi-factor_authentication">two-factor authentication</a> after a long game of <a href="https://en.wikipedia.org/wiki/Requirement">requirements</a> <a href="https://en.wikipedia.org/wiki/Chinese_whispers">telephone</a>.</p>
<p>To get past the door, you first swipe a keycard (no problem; there was one on a nearby desk). Then, it displays a code on a <a href="https://www.google.com/search?q=tiny+lcd&amp;tbm=isch">little screen</a>, and you type that code on a keypad. Then, presumably, the door unlocks.</p>
<p>Unfortunately, the screen has been <span title="BUT BY WHOM?!">smashed</span>. After a few minutes, you've taken everything apart and figured out how it works. Now you just have to work out what the screen <b>would</b> have displayed.</p>
<p>The magnetic strip on the card you swiped encodes a series of instructions for the screen; these instructions are your puzzle input. The screen is <b><code>50</code> pixels wide and <code>6</code> pixels tall</b>, all of which start <b>off</b>, and is capable of three somewhat peculiar operations:</p>
<ul>
<li><code>rect AxB</code> turns <b>on</b> all of the pixels in a rectangle at the top-left of the screen which is <code>A</code> wide and <code>B</code> tall.</li>
<li><code>rotate row y=A by B</code> shifts all of the pixels in row <code>A</code> (0 is the top row) <b>right</b> by <code>B</code> pixels. Pixels that would fall off the right end appear at the left end of the row.</li>
<li><code>rotate column x=A by B</code> shifts all of the pixels in column <code>A</code> (0 is the left column) <b>down</b> by <code>B</code> pixels. Pixels that would fall off the bottom appear at the top of the column.</li>
</ul>
<p>For example, here is a simple sequence on a smaller screen:</p>
<ul>
<li><pre><code>###....
###....
.......</code></pre></li>
<li><pre><code>#.#....
###....
.#.....</code></pre></li>
<li><pre><code>....#.#
###....
.#.....</code></pre></li>
<li><pre><code>.#..#.#
#.#....
.#.....</code></pre></li>
</ul>


</article>

<form method="post" action="8/answer"><input type="hidden" name="level" value="1"></form>