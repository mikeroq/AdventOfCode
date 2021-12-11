<article class="day-desc"><h2>--- Day 1: Not Quite Lisp ---</h2><p>Santa was hoping for a white Christmas, but his weather machine's "snow" function is powered by stars, and he's fresh out!  To save Christmas, he needs you to collect <b class="star">fifty stars</b> by December 25th.</p>
<p>Collect stars by helping Santa solve puzzles.  Two puzzles will be made available on each day in the Advent calendar; the second puzzle is unlocked when you complete the first.  Each puzzle grants <b class="star">one star</b>. <span title="Also, some puzzles contain Easter eggs like this one. Yes, I know it's not traditional to do Advent calendars for Easter.">Good luck!</span></p>
<p>Here's an easy puzzle to warm you up.</p>
<p>Santa is trying to deliver presents in a large apartment building, but he can't find the right floor - the directions he got are a little confusing. He starts on the ground floor (floor <code>0</code>) and then follows the instructions one character at a time.</p>
<p>An opening parenthesis, <code>(</code>, means he should go up one floor, and a closing parenthesis, <code>)</code>, means he should go down one floor.</p>
<p>The apartment building is very tall, and the basement is very deep; he will never find the top or bottom floors.</p>

<ul>
<li><code>(())</code> and <code>()()</code> both result in floor <code>0</code>.</li>
<li><code>(((</code> and <code>(()(()(</code> both result in floor <code>3</code>.</li>
<li><code>))(((((</code> also results in floor <code>3</code>.</li>
<li><code>())</code> and <code>))(</code> both result in floor <code>-1</code> (the first basement level).</li>
<li><code>)))</code> and <code>)())())</code> both result in floor <code>-3</code>.</li>
</ul>

</article>
<p>Your puzzle answer was <code>74</code>.</p><article class="day-desc"><h2 id="part2">--- Part Two ---</h2><p>Now, given the same instructions, find the <b>position</b> of the first character that causes him to enter the basement (floor <code>-1</code>).  The first character in the instructions has position <code>1</code>, the second character has position <code>2</code>, and so on.</p>

<ul>
<li><code>)</code> causes him to enter the basement at character position <code>1</code>.</li>
<li><code>()())</code> causes him to enter the basement at character position <code>5</code>.</li>
</ul>

</article>
<p>Your puzzle answer was <code>1795</code>.</p><p class="day-success"><b>Both parts of this puzzle are complete! They provide two gold stars: 🌟🌟</b></p>
<h2>--- Results ---</h2>
<pre><code>2015 Day01 - First Answer: 74
2015 Day01 - Second Answer: 1795
2015 Day01 - Execution finished in 0.0025238990783691 seconds.
</code></pre>
<pre><code>*** TESTING 2015 DAY Day01 ***
PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

Day01 (mikeroq\AdventOfCode\AdventOfCode2015\Day01\Day01)
 ✔ Part 1 example five equals 3
 ✔ Part 1 example three equals negative 3
 ✔ Part 1 example one equals 0
 ✔ Part 2 example one character equals 1
 ✔ Part 2 example two character equals 5

Time: 00:00.008, Memory: 4.00 MB

OK (5 tests, 5 assertions)
</code></pre>