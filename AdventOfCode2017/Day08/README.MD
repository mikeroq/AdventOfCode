<article class="day-desc"><h2>--- Day 8: I Heard You Like Registers ---</h2><p>You receive a <span title="There's that sorcery I told you about.">signal</span> directly from the CPU. Because of your recent assistance with <a href="5">jump instructions</a>, it would like you to compute the result of a series of unusual register instructions.</p>
<p>Each instruction consists of several parts: the register to modify, whether to increase or decrease that register's value, the amount by which to increase or decrease it, and a condition. If the condition fails, skip the instruction without modifying the register. The registers all start at <code>0</code>. The instructions look like this:</p>
<pre><code>b inc 5 if a &gt; 1
a inc 1 if b &lt; 5
c dec -10 if a &gt;= 1
c inc -20 if c == 10
</code></pre>
<p>These instructions would be processed as follows:</p>
<ul>
<li>Because <code>a</code> starts at <code>0</code>, it is not greater than <code>1</code>, and so <code>b</code> is not modified.</li>
<li><code>a</code> is increased by <code>1</code> (to <code>1</code>) because <code>b</code> is less than <code>5</code> (it is <code>0</code>).</li>
<li><code>c</code> is decreased by <code>-10</code> (to <code>10</code>) because <code>a</code> is now greater than or equal to <code>1</code> (it is <code>1</code>).</li>
<li><code>c</code> is increased by <code>-20</code> (to <code>-10</code>) because <code>c</code> is equal to <code>10</code>.</li>
</ul>



</article>

<form method="post" action="8/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>