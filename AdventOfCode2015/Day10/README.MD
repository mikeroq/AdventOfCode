<article class="day-desc"><h2>--- Day 10: Elves Look, Elves Say ---</h2><p>Today, the Elves are playing a game called <a href="https://en.wikipedia.org/wiki/Look-and-say_sequence">look-and-say</a>.  They take turns making sequences by reading aloud the previous sequence and using that reading as the next sequence.  For example, <code>211</code> is read as "one two, two ones", which becomes <code>1221</code> (<code>1</code> <code>2</code>, <code>2</code> <code>1</code>s).</p>
<p>Look-and-say sequences are generated iteratively, using the previous value as input for the next step.  For each step, take the previous value, and replace each run of digits (like <code>111</code>) with the number of digits (<code>3</code>) followed by the digit itself (<code>1</code>).</p>

<ul>
<li><code>1</code> becomes <code>11</code> (<code>1</code> copy of digit <code>1</code>).</li>
<li><code>11</code> becomes <code>21</code> (<code>2</code> copies of digit <code>1</code>).</li>
<li><code>21</code> becomes <code>1211</code> (one <code>2</code> followed by one <code>1</code>).</li>
<li><code>1211</code> becomes <code>111221</code> (one <code>1</code>, one <code>2</code>, and two <code>1</code>s).</li>
<li><code>111221</code> becomes <code>312211</code> (three <code>1</code>s, two <code>2</code>s, and one <code>1</code>).</li>
</ul>

</article>

<form method="post" action="10/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>2015 Day10 - First Answer: 0
2015 Day10 - Second Answer: 0
2015 Day10 - Execution finished in 0.00078487396240234 seconds.
</code></pre>
<pre><code>*** TESTING 2015 DAY Day10 ***
PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

Day10 (mikeroq\AdventOfCode\AdventOfCode2015\Day10\Day10)
 ✔ Part 1 equals 0
 ✔ Part 2 equals 0

Time: 00:00.008, Memory: 4.00 MB

OK (2 tests, 2 assertions)
</code></pre>