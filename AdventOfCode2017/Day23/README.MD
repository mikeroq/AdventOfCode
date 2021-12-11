<article class="day-desc"><h2>--- Day 23: Coprocessor Conflagration ---</h2><p>You decide to head directly to the CPU and fix the printer from there. As you get close, you find an <b>experimental coprocessor</b> doing so much work that the local programs are afraid it will <a href="https://en.wikipedia.org/wiki/Halt_and_Catch_Fire">halt and catch fire</a>. This would cause serious issues for the rest of the computer, so you head in and see what you can do.</p>
<p>The code it's running seems to be a variant of the kind you saw recently on that <a href="18">tablet</a>. The general functionality seems <b>very similar</b>, but some of the instructions are different:</p>
<ul>
<li><code>set X Y</code> <b>sets</b> register <code>X</code> to the value of <code>Y</code>.</li>
<li><code>sub X Y</code> <b>decreases</b> register <code>X</code> by the value of <code>Y</code>.</li>
<li><code>mul X Y</code> sets register <code>X</code> to the result of <b>multiplying</b> the value contained in register <code>X</code> by the value of <code>Y</code>.</li>
<li><code>jnz X Y</code> <b>jumps</b> with an offset of the value of <code>Y</code>, but only if the value of <code>X</code> is <b>not zero</b>. (An offset of <code>2</code> skips the next instruction, an offset of <code>-1</code> jumps to the previous instruction, and so on.)</li>

</ul>


</article>

<form method="post" action="23/answer"><input type="hidden" name="level" value="1"></form>