<article class="day-desc"><h2>--- Day 23: Opening the Turing Lock ---</h2><p>Little Jane Marie just got her very first computer for Christmas from some <span title="Definitely not Wintermute.">unknown benefactor</span>.  It comes with instructions and an example program, but the computer itself seems to be malfunctioning.  She's curious what the program does, and would like you to help her run it.</p>
<p>The manual explains that the computer supports two <a href="https://en.wikipedia.org/wiki/Processor_register">registers</a> and six <a href="https://en.wikipedia.org/wiki/Instruction_set">instructions</a> (truly, it goes on to remind the reader, a state-of-the-art technology). The registers are named <code>a</code> and <code>b</code>, can hold any <a href="https://en.wikipedia.org/wiki/Natural_number">non-negative integer</a>, and begin with a value of <code>0</code>.  The instructions are as follows:</p>
<ul>
<li><code>hlf r</code> sets register <code>r</code> to <b>half</b> its current value, then continues with the next instruction.</li>
<li><code>tpl r</code> sets register <code>r</code> to <b>triple</b> its current value, then continues with the next instruction.</li>
<li><code>inc r</code> <b>increments</b> register <code>r</code>, adding <code>1</code> to it, then continues with the next instruction.</li>
<li><code>jmp offset</code> is a <b>jump</b>; it continues with the instruction <code>offset</code> away <b>relative to itself</b>.</li>
<li><code>jie r, offset</code> is like <code>jmp</code>, but only jumps if register <code>r</code> is <b>even</b> ("jump if even").</li>
<li><code>jio r, offset</code> is like <code>jmp</code>, but only jumps if register <code>r</code> is <code>1</code> ("jump if <b>one</b>", not odd).</li>
</ul>
<p>All three jump instructions work with an <b>offset</b> relative to that instruction.  The offset is always written with a prefix <code>+</code> or <code>-</code> to indicate the direction of the jump (forward or backward, respectively).  For example, <code>jmp +1</code> would simply continue with the next instruction, while <code>jmp +0</code> would continuously jump back to itself forever.</p>
<p>The program exits when it tries to run an instruction beyond the ones defined.</p>

<pre><code>inc a
jio a, +2
tpl a
inc a
</code></pre>

</article>

<form method="post" action="23/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>