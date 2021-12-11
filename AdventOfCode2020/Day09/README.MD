<article class="day-desc"><h2>--- Day 9: Encoding Error ---</h2><p>With your neighbor happily enjoying their video game, you turn your attention to an open data port on the little screen in the seat in front of you.</p>
<p>Though the port is non-standard, you manage to connect it to your computer through the clever use of several paperclips. Upon connection, the port outputs a series of numbers (your puzzle input).</p>
<p>The data appears to be encrypted with the eXchange-Masking Addition System (<span title="No relation.">XMAS</span>) which, conveniently for you, is an old cypher with an important weakness.</p>
<p>XMAS starts by transmitting a <b>preamble</b> of 25 numbers. After that, each number you receive should be the sum of any two of the 25 immediately previous numbers. The two numbers will have different values, and there might be more than one such pair.</p>
<p>For example, suppose your preamble consists of the numbers <code>1</code> through <code>25</code> in a random order. To be valid, the next number must be the sum of two of those numbers:</p>
<ul>
<li><code>26</code> would be a <b>valid</b> next number, as it could be <code>1</code> plus <code>25</code> (or many other pairs, like <code>2</code> and <code>24</code>).</li>
<li><code>49</code> would be a <b>valid</b> next number, as it is the sum of <code>24</code> and <code>25</code>.</li>
<li><code>100</code> would <b>not</b> be valid; no two of the previous 25 numbers sum to <code>100</code>.</li>
<li><code>50</code> would also <b>not</b> be valid; although <code>25</code> appears in the previous 25 numbers, the two numbers in the pair must be different.</li>
</ul>
<p>Suppose the 26th number is <code>45</code>, and the first number (no longer an option, as it is more than 25 numbers ago) was <code>20</code>. Now, for the next number to be valid, there needs to be some pair of numbers among <code>1</code>-<code>19</code>, <code>21</code>-<code>25</code>, or <code>45</code> that add up to it:</p>
<ul>
<li><code>26</code> would still be a <b>valid</b> next number, as <code>1</code> and <code>25</code> are still within the previous 25 numbers.</li>
<li><code>65</code> would <b>not</b> be valid, as no two of the available numbers sum to it.</li>
<li><code>64</code> and <code>66</code> would both be <b>valid</b>, as they are the result of <code>19+45</code> and <code>21+45</code> respectively.</li>
</ul>
<p>Here is a larger example which only considers the previous <b>5</b> numbers (and has a preamble of length 5):</p>
<pre><code>35
20
15
25
47
40
62
55
65
95
102
117
150
182
127
219
299
277
309
576
</code></pre>


</article>
<p>Your puzzle answer was <code>258585477</code>.</p><article class="day-desc"><h2 id="part2">--- Part Two ---</h2><p>The final step in breaking the XMAS encryption relies on the invalid number you just found: you must <b>find a contiguous set of at least two numbers</b> in your list which sum to the invalid number from step 1.</p>
<p>Again consider the above example:</p>
<pre><code>35
20
<b>15</b>
<b>25</b>
<b>47</b>
<b>40</b>
62
55
65
95
102
117
150
182
127
219
299
277
309
576
</code></pre>



</article>
<p>Your puzzle answer was <code>36981213</code>.</p><p class="day-success"><b>Both parts of this puzzle are complete! They provide two gold stars: 🌟🌟</b></p>
<h2>--- Results ---</h2>
<pre><code>
Fatal error: Declaration of mikeroq\AdventOfCode\AdventOfCode2020\Day09\Day09::findFirstAnswer() must be compatible with mikeroq\AdventOfCode\Shared\Day::findFirstAnswer(): int in C:\Code\AdventOfCode\AdventOfCode2020\Day09\Day09.php on line 65
</code></pre>
<pre><code>*** TESTING 2020 DAY Day09 ***
PHPUnit 9.5.10 by Sebastian Bergmann and contributors.


Fatal error: Declaration of mikeroq\AdventOfCode\AdventOfCode2020\Day09\Day09::findFirstAnswer() must be compatible with mikeroq\AdventOfCode\Shared\Day::findFirstAnswer(): int in C:\Code\AdventOfCode\AdventOfCode2020\Day09\Day09.php on line 65
</code></pre>