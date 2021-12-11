<article class="day-desc"><h2>--- Day 18: Duet ---</h2><p>You discover a tablet containing some strange assembly code labeled simply "<a href="https://en.wikipedia.org/wiki/Duet">Duet</a>". Rather than bother the sound card with it, you decide to run the code yourself. Unfortunately, you don't see any documentation, so you're left to figure out what the instructions mean on your own.</p>
<p>It seems like the assembly is meant to operate on a set of <b>registers</b> that are each named with a single letter and that can each hold a single <a href="https://en.wikipedia.org/wiki/Integer">integer</a>. You suppose each register should start with a value of <code>0</code>.</p>
<p>There aren't that many instructions, so it shouldn't be hard to figure out what they do.  Here's what you determine:</p>
<ul>
<li><code>snd X</code> <b><span title="I don't recommend actually trying this.">plays a sound</span></b> with a frequency equal to the value of <code>X</code>.</li>
<li><code>set X Y</code> <b>sets</b> register <code>X</code> to the value of <code>Y</code>.</li>
<li><code>add X Y</code> <b>increases</b> register <code>X</code> by the value of <code>Y</code>.</li>
<li><code>mul X Y</code> sets register <code>X</code> to the result of <b>multiplying</b> the value contained in register <code>X</code> by the value of <code>Y</code>.</li>
<li><code>mod X Y</code> sets register <code>X</code> to the <b>remainder</b> of dividing the value contained in register <code>X</code> by the value of <code>Y</code> (that is, it sets <code>X</code> to the result of <code>X</code> <a href="https://en.wikipedia.org/wiki/Modulo_operation">modulo</a> <code>Y</code>).</li>
<li><code>rcv X</code> <b>recovers</b> the frequency of the last sound played, but only when the value of <code>X</code> is not zero. (If it is zero, the command does nothing.)</li>
<li><code>jgz X Y</code> <b>jumps</b> with an offset of the value of <code>Y</code>, but only if the value of <code>X</code> is <b>greater than zero</b>. (An offset of <code>2</code> skips the next instruction, an offset of <code>-1</code> jumps to the previous instruction, and so on.)</li>
</ul>
<p>Many of the instructions can take either a register (a single letter) or a number. The value of a register is the integer it contains; the value of a number is that number.</p>
<p>After each <b>jump</b> instruction, the program continues with the instruction to which the <b>jump</b> jumped. After any other instruction, the program continues with the next instruction. Continuing (or jumping) off either end of the program terminates it.</p>
<p>For example:</p>
<pre><code>set a 1
add a 2
mul a a
mod a 5
snd a
set a 0
rcv a
jgz a -1
set a 1
jgz a -2
</code></pre>
<ul>
<li>The first four instructions set <code>a</code> to <code>1</code>, add <code>2</code> to it, square it, and then set it to itself modulo <code>5</code>, resulting in a value of <code>4</code>.</li>
<li>Then, a sound with frequency <code>4</code> (the value of <code>a</code>) is played.</li>
<li>After that, <code>a</code> is set to <code>0</code>, causing the subsequent <code>rcv</code> and <code>jgz</code> instructions to both be skipped (<code>rcv</code> because <code>a</code> is <code>0</code>, and <code>jgz</code> because <code>a</code> is not greater than <code>0</code>).</li>
<li>Finally, <code>a</code> is set to <code>1</code>, causing the next <code>jgz</code> instruction to activate, jumping back two instructions to another jump, which jumps again to the <code>rcv</code>, which ultimately triggers the <b>recover</b> operation.</li>
</ul>


</article>

<form method="post" action="18/answer"><input type="hidden" name="level" value="1"></form>