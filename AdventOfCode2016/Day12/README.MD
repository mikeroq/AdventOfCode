<article class="day-desc"><h2>--- Day 12: Leonardo's Monorail ---</h2><p>You finally reach the top floor of this building: a garden with a slanted glass ceiling. Looks like there are no more stars to be had.</p>
<p>While sitting on a nearby bench amidst some <a href="https://www.google.com/search?q=tiger+lilies&amp;tbm=isch">tiger lilies</a>, you manage to decrypt some of the files you extracted from the servers downstairs.</p>
<p>According to these documents, Easter Bunny HQ isn't just this building - it's a collection of buildings in the nearby area. They're all connected by a local monorail, and there's another building not far from here! Unfortunately, being night, the monorail is currently not operating.</p>
<p>You remotely connect to the monorail control systems and discover that the boot sequence expects a password. The password-checking logic (your puzzle input) is easy to extract, but the code it uses is strange: it's <span title="Strangely, this assembunny code doesn't seem to be very good at multiplying.">assembunny</span> code designed for the <a href="11">new computer</a> you just assembled. You'll have to execute the code and get the password.</p>
<p>The assembunny code you've extracted operates on four <a href="https://en.wikipedia.org/wiki/Processor_register">registers</a> (<code>a</code>, <code>b</code>, <code>c</code>, and <code>d</code>) that start at <code>0</code> and can hold any <a href="https://en.wikipedia.org/wiki/Integer">integer</a>. However, it seems to make use of only a few <a href="https://en.wikipedia.org/wiki/Instruction_set">instructions</a>:</p>
<ul>
<li><code>cpy x y</code> <b>copies</b> <code>x</code> (either an integer or the <b>value</b> of a register) into register <code>y</code>.</li>
<li><code>inc x</code> <b>increases</b> the value of register <code>x</code> by one.</li>
<li><code>dec x</code> <b>decreases</b> the value of register <code>x</code> by one.</li>
<li><code>jnz x y</code> <b>jumps</b> to an instruction <code>y</code> away (positive means forward; negative means backward), but only if <code>x</code> is <b>not zero</b>.</li>
</ul>
<p>The <code>jnz</code> instruction moves relative to itself: an offset of <code>-1</code> would continue at the previous instruction, while an offset of <code>2</code> would <b>skip over</b> the next instruction.</p>
<p>For example:</p>
<pre><code>cpy 41 a
inc a
inc a
dec a
jnz a 2
dec a
</code></pre>


</article>

<form method="post" action="12/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>