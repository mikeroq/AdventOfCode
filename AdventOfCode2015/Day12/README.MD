<article class="day-desc"><h2>--- Day 12: JSAbacusFramework.io ---</h2><p>Santa's Accounting-Elves need help balancing the books after a recent order.  Unfortunately, their accounting software uses a peculiar storage format.  That's where you come in.</p>
<p>They have a <a href="http://json.org/">JSON</a> document which contains a variety of things: arrays (<code>[1,2,3]</code>), objects (<code>{"a":1, "b":2}</code>), numbers, and strings.  Your first job is to simply find all of the <b>numbers</b> throughout the document and add them together.</p>
<p>For example:</p>
<ul>
<li><code>[1,2,3]</code> and <code>{"a":2,"b":4}</code> both have a sum of <code>6</code>.</li>
<li><code>[[[3]]]</code> and <code>{"a":{"b":4},"c":-1}</code> both have a sum of <code>3</code>.</li>
<li><code>{"a":[-1,1]}</code> and <code>[-1,{"a":1}]</code> both have a sum of <code>0</code>.</li>
<li><code>[]</code> and <code>{}</code> both have a sum of <code>0</code>.</li>
</ul>


</article>

<form method="post" action="12/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>2015 Day12 - First Answer: 0
2015 Day12 - Second Answer: 0
2015 Day12 - Execution finished in 0.00079011917114258 seconds.
</code></pre>
<pre><code>*** TESTING 2015 DAY Day12 ***
PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

Day12 (mikeroq\AdventOfCode\AdventOfCode2015\Day12\Day12)
 ✔ Part 1 equals 0
 ✔ Part 2 equals 0

Time: 00:00.008, Memory: 4.00 MB

OK (2 tests, 2 assertions)
</code></pre>