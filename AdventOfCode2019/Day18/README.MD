<article class="day-desc"><h2>--- Day 18: Many-Worlds Interpretation ---</h2><p>As you approach Neptune, a planetary security system detects you and activates a giant <a href="https://en.wikipedia.org/wiki/Tractor_beam">tractor beam</a> on <a href="https://en.wikipedia.org/wiki/Triton_(moon)">Triton</a>!  You have no choice but to land.</p>
<p>A scan of the local area reveals only one interesting feature: a massive underground vault.  You generate a map of the tunnels (your puzzle input).  The tunnels are too narrow to move diagonally.</p>
<p>Only one <b>entrance</b> (marked <code>@</code>) is present among the <b>open passages</b> (marked <code>.</code>) and <b>stone walls</b> (<code>#</code>), but you also detect an assortment of <b>keys</b> (shown as lowercase letters) and <b>doors</b> (shown as uppercase letters). Keys of a given letter open the door of the same letter: <code>a</code> opens <code>A</code>, <code>b</code> opens <code>B</code>, and so on.  You aren't sure which key you need to disable the tractor beam, so you'll need to <b>collect all of them</b>.</p>
<p>For example, suppose you have the following map:</p>
<pre><code>#########
#b.A.@.a#
#########
</code></pre>
<p>Starting from the entrance (<code>@</code>), you can only access a large door (<code>A</code>) and a key (<code>a</code>). Moving toward the door doesn't help you, but you can move <code>2</code> steps to collect the key, unlocking <code>A</code> in the process:</p>
<pre><code>#########
#b.....@#
#########
</code></pre>
<p>Then, you can move <code>6</code> steps to collect the only other key, <code>b</code>:</p>
<pre><code>#########
#@......#
#########
</code></pre>
<p>So, collecting every key took a total of <code><b>8</b></code> steps.</p>
<p>Here is a larger example:</p>
<pre><code>########################
#f.D.E.e.C.b.A.@.a.B.c.#
######################.#
#d.....................#
########################
</code></pre>
<p>The only reasonable move is to take key <code>a</code> and unlock door <code>A</code>:</p>
<pre><code>########################
#f.D.E.e.C.b.....@.B.c.#
######################.#
#d.....................#
########################
</code></pre>
<p>Then, do the same with key <code>b</code>:</p>
<pre><code>########################
#f.D.E.e.C.@.........c.#
######################.#
#d.....................#
########################
</code></pre>
<p>...and the same with key <code>c</code>:</p>
<pre><code>########################
#f.D.E.e.............@.#
######################.#
#d.....................#
########################
</code></pre>
<p>Now, you have a choice between keys <code>d</code> and <code>e</code>.  While key <code>e</code> is closer, collecting it now would be slower in the long run than collecting key <code>d</code> first, so that's the best choice:</p>
<pre><code>########################
#f...E.e...............#
######################.#
#@.....................#
########################
</code></pre>
<p>Finally, collect key <code>e</code> to unlock door <code>E</code>, then collect key <code>f</code>, taking a grand total of <code><b>86</b></code> steps.</p>

<ul>
<li><pre><code>########################
#...............b.C.D.f#
#.######################
#.....@.a.B.c.d.A.e.F.g#
########################
</code></pre>
</li>
<li><pre><code>#################
#i.G..c...e..H.p#
########.########
#j.A..b...f..D.o#
########@########
#k.E..a...g..B.n#
########.########
#l.F..d...h..C.m#
#################
</code></pre>
</li>
<li><pre><code>########################
#@..............ac.GI.b#
###d#e#f################
###A#B#C################
###g#h#i################
########################
</code></pre>
</li>
</ul>

</article>

<form method="post" action="18/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>