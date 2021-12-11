<article class="day-desc"><h2>--- Day 19: Medicine for Rudolph ---</h2><p>Rudolph the Red-Nosed Reindeer is sick!  His nose isn't shining very brightly, and he needs medicine.</p>
<p>Red-Nosed Reindeer biology isn't similar to regular reindeer biology; Rudolph is going to need custom-made medicine.  Unfortunately, Red-Nosed Reindeer chemistry isn't similar to regular reindeer chemistry, either.</p>
<p>The North Pole is equipped with a Red-Nosed Reindeer nuclear fusion/fission plant, capable of constructing any Red-Nosed Reindeer molecule you need.  It works by starting with some input molecule and then doing a series of <b>replacements</b>, one per step, until it has the right molecule.</p>
<p>However, the machine has to be calibrated before it can be used.  Calibration involves determining the number of molecules that can be generated in one step from a given starting point.</p>
<p>For example, imagine a simpler machine that supports only the following replacements:</p>
<pre><code>H =&gt; HO
H =&gt; OH
O =&gt; HH
</code></pre>
<p>Given the replacements above and starting with <code>HOH</code>, the following molecules could be generated:</p>
<ul>
<li><code>HOOH</code> (via <code>H =&gt; HO</code> on the first <code>H</code>).</li>
<li><code>HOHO</code> (via <code>H =&gt; HO</code> on the second <code>H</code>).</li>
<li><code>OHOH</code> (via <code>H =&gt; OH</code> on the first <code>H</code>).</li>
<li><code>HOOH</code> (via <code>H =&gt; OH</code> on the second <code>H</code>).</li>
<li><code>HHHH</code> (via <code>O =&gt; HH</code>).</li>
</ul>



</article>

<form method="post" action="19/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>2015 Day19 - First Answer: 0
2015 Day19 - Second Answer: 0
2015 Day19 - Execution finished in 0.00089502334594727 seconds.
</code></pre>
<pre><code>*** TESTING 2015 DAY Day19 ***
PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

Day19 (mikeroq\AdventOfCode\AdventOfCode2015\Day19\Day19)
 ✔ Part 1 equals 0
 ✔ Part 2 equals 0

Time: 00:00.008, Memory: 4.00 MB

OK (2 tests, 2 assertions)
</code></pre>