<article class="day-desc"><h2>--- Day 21: Springdroid Adventure ---</h2><p>You lift off from Pluto and start flying in the direction of Santa.</p>
<p>While experimenting further with the tractor beam, you accidentally pull an asteroid directly into your ship!  It deals significant damage to your hull and causes your ship to begin tumbling violently.</p>
<p>You can send a droid out to investigate, but the tumbling is causing enough <a href="https://en.wikipedia.org/wiki/Artificial_gravity">artificial gravity</a> that one wrong step could send the droid through a hole in the hull and flying out into space.</p>
<p>The clear choice for this mission is a <span title="I picture the Bouncy enemy from Kirby games.">droid</span> that can <b>jump</b> over the holes in the hull - a <b>springdroid</b>.</p>
<p>You can use an <a href="9">Intcode</a> program (your puzzle input) running on an <a href="17">ASCII-capable</a> computer to <a href="https://en.wikipedia.org/wiki/Programmable_read-only_memory">program</a> the springdroid. However, springdroids don't run Intcode; instead, they run a simplified assembly language called <b>springscript</b>.</p>
<p>While a springdroid is certainly capable of navigating the artificial gravity and giant holes, it has one downside: it can only remember at most <b>15</b> springscript instructions.</p>
<p>The springdroid will move forward automatically, constantly thinking about <b>whether to jump</b>.  The springscript program defines the logic for this decision.</p>
<p>Springscript programs only use <a href="https://en.wikipedia.org/wiki/Boolean_data_type">Boolean values</a>, not numbers or strings.  Two registers are available: <code>T</code>, the <b>temporary value</b> register, and <code>J</code>, the <b>jump</b> register.  If the jump register is <b>true</b> at the end of the springscript program, the springdroid will try to jump. Both of these registers start with the value <b>false</b>.</p>
<p>Springdroids have a sensor that can detect <b>whether there is ground</b> at various distances in the direction it is facing; these values are provided in <b>read-only registers</b>.  Your springdroid can detect ground at four distances: one tile away (<code>A</code>), two tiles away (<code>B</code>), three tiles away (<code>C</code>), and four tiles away (<code>D</code>). If there is ground at the given distance, the register will be <b>true</b>; if there is a hole, the register will be <b>false</b>.</p>
<p>There are only <b>three instructions</b> available in springscript:</p>
<ul>
<li><code>AND X Y</code> sets <code>Y</code> to <b>true</b> if both <code>X</code> and <code>Y</code> are <b>true</b>; otherwise, it sets <code>Y</code> to <b>false</b>.</li>
<li><code>OR X Y</code> sets <code>Y</code> to <b>true</b> if at least one of <code>X</code> or <code>Y</code> is <b>true</b>; otherwise, it sets <code>Y</code> to <b>false</b>.</li>
<li><code>NOT X Y</code> sets <code>Y</code> to <b>true</b> if <code>X</code> is <b>false</b>; otherwise, it sets <code>Y</code> to <b>false</b>.</li>
</ul>
<p>In all three instructions, the second argument (<code>Y</code>) needs to be a <b>writable register</b> (either <code>T</code> or <code>J</code>). The first argument (<code>X</code>) can be <b>any register</b> (including <code>A</code>, <code>B</code>, <code>C</code>, or <code>D</code>).</p>
<p>For example, the one-instruction program <code>NOT A J</code> means "if the tile immediately in front of me is not ground, jump".</p>
<p>Or, here is a program that jumps if a three-tile-wide hole (with ground on the other side of the hole) is detected:</p>
<pre><code>NOT A J
NOT B T
AND T J
NOT C T
AND T J
AND D J
</code></pre>
<p>The Intcode program expects ASCII inputs and outputs.  It will begin by displaying a prompt; then, input the desired instructions one per line. End each line with a newline (ASCII code <code>10</code>). <b>When you have finished entering your program</b>, provide the command <code>WALK</code> followed by a newline to instruct the springdroid to begin surveying the hull.</p>
<p>If the springdroid <b>falls into space</b>, an ASCII rendering of the last moments of its life will be produced.  In these, <code>@</code> is the springdroid, <code>#</code> is hull, and <code>.</code> is empty space.  For example, suppose you program the springdroid like this:
</p><pre><code>NOT D J
WALK
</code></pre>
<p>This one-instruction program sets <code>J</code> to <b>true</b> if and only if there is no ground four tiles away.  In other words, it attempts to jump into any hole it finds:</p>
<pre><code>.................
.................
<b>@</b>................
#####.###########

.................
.................
.<b>@</b>...............
#####.###########

.................
..<b>@</b>..............
.................
#####.###########

...<b>@</b>.............
.................
.................
#####.###########

.................
....<b>@</b>............
.................
#####.###########

.................
.................
.....<b>@</b>...........
#####.###########

.................
.................
.................
#####<b>@</b>###########
</code></pre>


</article>

<form method="post" action="21/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>