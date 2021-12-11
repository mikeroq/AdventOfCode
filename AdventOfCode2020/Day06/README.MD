<article class="day-desc"><h2>--- Day 6: Custom Customs ---</h2><p>As your flight approaches the regional airport where you'll switch to a much larger plane, <a href="https://en.wikipedia.org/wiki/Customs_declaration" target="_blank">customs declaration forms</a> are distributed to the passengers.</p>
<p>The form asks a series of 26 yes-or-no questions marked <code>a</code> through <code>z</code>. All you need to do is identify the questions for which <b>anyone in your group</b> answers "yes". Since your group is just you, this doesn't take very long.</p>
<p>However, the person sitting next to you seems to be experiencing a language barrier and asks if you can help. For each of the people in their group, you write down the questions for which they answer "yes", one per line.  For example:</p>
<pre><code>abcx
abcy
abcz
</code></pre>
<p>In this group, there are <b><code>6</code></b> questions to which anyone answered "yes": <code>a</code>, <code>b</code>, <code>c</code>, <code>x</code>, <code>y</code>, and <code>z</code>. (Duplicate answers to the same question don't count extra; each question counts at most once.)</p>
<p>Another group asks for your help, then another, and eventually you've collected answers from every group on the plane (your puzzle input). Each group's answers are separated by a blank line, and within each group, each person's answers are on a single line. For example:</p>
<pre><code>abc

a
b
c

ab
ac

a
a
a
a

b
</code></pre>
<p>This list represents answers from five groups:</p>
<ul>
<li>The first group contains one person who answered "yes" to <b><code>3</code></b> questions: <code>a</code>, <code>b</code>, and <code>c</code>.</li>
<li>The second group contains three people; combined, they answered "yes" to <b><code>3</code></b> questions: <code>a</code>, <code>b</code>, and <code>c</code>.</li>
<li>The third group contains two people; combined, they answered "yes" to <b><code>3</code></b> questions: <code>a</code>, <code>b</code>, and <code>c</code>.</li>
<li>The fourth group contains four people; combined, they answered "yes" to only <b><code>1</code></b> question, <code>a</code>.</li>
<li>The last group contains one person who answered "yes" to only <b><code>1</code></b> question, <code>b</code>.</li>
</ul>


</article>
<p>Your puzzle answer was <code>6612</code>.</p><article class="day-desc"><h2 id="part2">--- Part Two ---</h2><p>As you finish the last group's customs declaration, you notice that <span title="Don't worry, nobody ever misreads just one word in real life.">you misread one word</span> in the instructions:</p>
<p>You don't need to identify the questions to which <b>anyone</b> answered "yes"; you need to identify the questions to which <b>everyone</b> answered "yes"!</p>
<p>Using the same  example as above:</p>
<pre><code>abc

a
b
c

ab
ac

a
a
a
a

b
</code></pre>
<p>This list represents answers from five groups:</p>
<ul>
<li>In the first group, everyone (all 1 person) answered "yes" to <b><code>3</code></b> questions: <code>a</code>, <code>b</code>, and <code>c</code>.</li>
<li>In the second group, there is <b>no</b> question to which everyone answered "yes".</li>
<li>In the third group, everyone answered yes to only <b><code>1</code></b> question, <code>a</code>. Since some people did not answer "yes" to <code>b</code> or <code>c</code>, they don't count.</li>
<li>In the fourth group, everyone answered yes to only <b><code>1</code></b> question, <code>a</code>.</li>
<li>In the fifth group, everyone (all 1 person) answered "yes" to <b><code>1</code></b> question, <code>b</code>.</li>
</ul>


</article>
<p>Your puzzle answer was <code>3268</code>.</p><p class="day-success"><b>Both parts of this puzzle are complete! They provide two gold stars: 🌟🌟</b></p>
<h2>--- Results ---</h2>
<pre><code>Day06 - First Answer: 396210
Day06 - Second Answer: 1770823541496
Day06 - Execution finished in 0.00096321105957031 seconds.
</code></pre>
<pre><code>*** TESTING DAY Day06 ***
PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

Day06 (mikeroq\AdventOfCode\AdventOfCode2021\Day06\Day06)
 ✔ Part 1 example equals 5934
 ✔ Part 2 example equals 26984457539
 ✔ Part 1 real answer equals 396210
 ✔ Part 2 real answer equals 1770823541496

Time: 00:00.008, Memory: 4.00 MB

OK (4 tests, 4 assertions)
</code></pre>