<article class="day-desc"><h2>--- Day 23: Safe Cracking ---</h2><p>This is one of the top floors of the nicest tower in EBHQ. The Easter Bunny's private office is here, complete with a safe hidden behind a painting, and who <b>wouldn't</b> hide a star in a safe behind a painting?</p>
<p>The safe has a digital screen and keypad for code entry. A sticky note attached to the safe has a password hint on it: "eggs". The painting is of a large rabbit coloring some eggs. You see <code>7</code>.</p>
<p>When you go to type the code, though, nothing appears on the display; instead, the keypad comes apart in your hands, apparently having been smashed. Behind it is some kind of socket - one that matches a connector in your <a href="11">prototype computer</a>! You pull apart the smashed keypad and extract the logic circuit, plug it into your computer, and plug your computer into the safe.</p>
Now, you just need to figure out what output the keypad would have sent to the safe. You extract the <a href="12">assembunny code</a> from the logic chip (your puzzle input).
<p>The code looks like it uses <b>almost</b> the same architecture and instruction set that the <a href="12">monorail computer</a> used! You should be able to <b>use the same assembunny interpreter</b> for this as you did there, but with one new instruction:</p>
<p><code>tgl x</code> <b>toggles</b> the instruction <code>x</code> away (pointing at instructions like <code>jnz</code> does: positive means forward; negative means backward):</p>
<ul>
<li>For <b>one-argument</b> instructions, <code>inc</code> becomes <code>dec</code>, and all other one-argument instructions become <code>inc</code>.</li>
<li>For <b>two-argument</b> instructions, <code>jnz</code> becomes <code>cpy</code>, and all other two-instructions become <code>jnz</code>.</li>
<li>The arguments of a toggled instruction are <b>not affected</b>.</li>
<li>If an attempt is made to toggle an instruction outside the program, <b>nothing happens</b>.</li>
<li>If toggling produces an <b>invalid instruction</b> (like <code>cpy 1 2</code>) and an attempt is later made to execute that instruction, <b>skip it instead</b>.</li>
<li>If <code>tgl</code> toggles <b>itself</b> (for example, if <code>a</code> is <code>0</code>, <code>tgl a</code> would target itself and become <code>inc a</code>), the resulting instruction is not executed until the next time it is reached.</li>
</ul>
<p>For example, given this program:</p>
<pre><code>cpy 2 a
tgl a
tgl a
tgl a
cpy 1 a
dec a
dec a
</code></pre>
<ul>
<li><code>cpy 2 a</code> initializes register <code>a</code> to <code>2</code>.</li>
<li>The first <code>tgl a</code> toggles an instruction <code>a</code> (<code>2</code>) away from it, which changes the third <code>tgl a</code> into <code>inc a</code>.</li>
<li>The second <code>tgl a</code> also modifies an instruction <code>2</code> away from it, which changes the <code>cpy 1 a</code> into <code>jnz 1 a</code>.</li>
<li>The fourth line, which is now <code>inc a</code>, increments <code>a</code> to <code>3</code>.</li>
<li>Finally, the fifth line, which is now <code>jnz 1 a</code>, jumps <code>a</code> (<code>3</code>) instructions ahead, skipping the <code>dec a</code> instructions.</li>
</ul>



</article>

<form method="post" action="23/answer"><input type="hidden" name="level" value="1"></form>