<article class="day-desc"><h2>--- Day 10: Syntax Scoring ---</h2><p>You ask the submarine to determine the best route out of the deep-sea cave, but it only replies:</p>
<pre><code>Syntax error in navigation subsystem on line: <span title="Some days, that's just how it is.">all of them</span></code></pre>
<p><b>All of them?!</b> The damage is worse than you thought. You bring up a copy of the navigation subsystem (your puzzle input).</p>
<p>The navigation subsystem syntax is made of several lines containing <b>chunks</b>. There are one or more chunks on each line, and chunks contain zero or more other chunks. Adjacent chunks are not separated by any delimiter; if one chunk stops, the next chunk (if any) can immediately start. Every chunk must <b>open</b> and <b>close</b> with one of four legal pairs of matching characters:</p>
<ul>
<li>If a chunk opens with <code>(</code>, it must close with <code>)</code>.</li>
<li>If a chunk opens with <code>[</code>, it must close with <code>]</code>.</li>
<li>If a chunk opens with <code>{</code>, it must close with <code>}</code>.</li>
<li>If a chunk opens with <code>&lt;</code>, it must close with <code>&gt;</code>.</li>
</ul>
<p>So, <code>()</code> is a legal chunk that contains no other chunks, as is <code>[]</code>. More complex but valid chunks include <code>([])</code>, <code>{()()()}</code>, <code>&lt;([{}])&gt;</code>, <code>[&lt;&gt;({}){}[([])&lt;&gt;]]</code>, and even <code>(((((((((())))))))))</code>.</p>
<p>Some lines are <b>incomplete</b>, but others are <b>corrupted</b>. Find and discard the corrupted lines first.</p>
<p>A corrupted line is one where a chunk <b>closes with the wrong character</b> - that is, where the characters it opens and closes with do not form one of the four legal pairs listed above.</p>
<p>Examples of corrupted chunks include <code>(]</code>, <code>{()()()&gt;</code>, <code>(((()))}</code>, and <code>&lt;([]){()}[{}])</code>. Such a chunk can appear anywhere within a line, and its presence causes the whole line to be considered corrupted.</p>
<p>For example, consider the following navigation subsystem:</p>
<pre><code>[({(&lt;(())[]&gt;[[{[]{&lt;()&lt;&gt;&gt;
[(()[&lt;&gt;])]({[&lt;{&lt;&lt;[]&gt;&gt;(
{([(&lt;{}[&lt;&gt;[]}&gt;{[]{[(&lt;()&gt;
(((({&lt;&gt;}&lt;{&lt;{&lt;&gt;}{[]{[]{}
[[&lt;[([]))&lt;([[{}[[()]]]
[{[{({}]{}}([{[{{{}}([]
{&lt;[[]]&gt;}&lt;{[{[{[]{()[[[]
[&lt;(&lt;(&lt;(&lt;{}))&gt;&lt;([]([]()
&lt;{([([[(&lt;&gt;()){}]&gt;(&lt;&lt;{{
&lt;{([{{}}[&lt;[[[&lt;&gt;{}]]]&gt;[]]
</code></pre>
<p>Some of the lines aren't corrupted, just incomplete; you can ignore these lines for now. The remaining five lines are corrupted:</p>
<ul>
<li><code>{([(&lt;{}[&lt;&gt;[]}&gt;{[]{[(&lt;()&gt;</code> - Expected <code>]</code>, but found <code>}</code> instead.</li>
<li><code>[[&lt;[([]))&lt;([[{}[[()]]]</code> - Expected <code>]</code>, but found <code>)</code> instead.</li>
<li><code>[{[{({}]{}}([{[{{{}}([]</code> - Expected <code>)</code>, but found <code>]</code> instead.</li>
<li><code>[&lt;(&lt;(&lt;(&lt;{}))&gt;&lt;([]([]()</code> - Expected <code>&gt;</code>, but found <code>)</code> instead.</li>
<li><code>&lt;{([([[(&lt;&gt;()){}]&gt;(&lt;&lt;{{</code> - Expected <code>]</code>, but found <code>&gt;</code> instead.</li>
</ul>
<p>Stop at the first incorrect closing character on each corrupted line.</p>
<p>Did you know that syntax checkers actually have contests to see who can get the high score for syntax errors in a file? It's true! To calculate the syntax error score for a line, take the <b>first illegal character</b> on the line and look it up in the following table:</p>
<ul>
<li><code>)</code>: <code>3</code> points.</li>
<li><code>]</code>: <code>57</code> points.</li>
<li><code>}</code>: <code>1197</code> points.</li>
<li><code>&gt;</code>: <code>25137</code> points.</li>
</ul>


</article>
<p>Your puzzle answer was <code>265527</code>.</p><article class="day-desc"><h2 id="part2">--- Part Two ---</h2><p>Now, discard the corrupted lines.  The remaining lines are <b>incomplete</b>.</p>
<p>Incomplete lines don't have any incorrect characters - instead, they're missing some closing characters at the end of the line. To repair the navigation subsystem, you just need to figure out <b>the sequence of closing characters</b> that complete all open chunks in the line.</p>
<p>You can only use closing characters (<code>)</code>, <code>]</code>, <code>}</code>, or <code>&gt;</code>), and you must add them in the correct order so that only legal pairs are formed and all chunks end up closed.</p>
<p>In the example above, there are five incomplete lines:</p>
<ul>
<li><code>[({(&lt;(())[]&gt;[[{[]{&lt;()&lt;&gt;&gt;</code> - Complete by adding <code>}}]])})]</code>.</li>
<li><code>[(()[&lt;&gt;])]({[&lt;{&lt;&lt;[]&gt;&gt;(</code> - Complete by adding <code>)}&gt;]})</code>.</li>
<li><code>(((({&lt;&gt;}&lt;{&lt;{&lt;&gt;}{[]{[]{}</code> - Complete by adding <code>}}&gt;}&gt;))))</code>.</li>
<li><code>{&lt;[[]]&gt;}&lt;{[{[{[]{()[[[]</code> - Complete by adding <code>]]}}]}]}&gt;</code>.</li>
<li><code>&lt;{([{{}}[&lt;[[[&lt;&gt;{}]]]&gt;[]]</code> - Complete by adding <code>])}&gt;</code>.</li>
</ul>
<p>Did you know that autocomplete tools <b>also</b> have contests? It's true! The score is determined by considering the completion string character-by-character. Start with a total score of <code>0</code>. Then, for each character, multiply the total score by 5 and then increase the total score by the point value given for the character in the following table:</p>
<ul>
<li><code>)</code>: <code>1</code> point.</li>
<li><code>]</code>: <code>2</code> points.</li>
<li><code>}</code>: <code>3</code> points.</li>
<li><code>&gt;</code>: <code>4</code> points.</li>
</ul>
<p>So, the last completion string above - <code>])}&gt;</code> - would be scored as follows:</p>
<ul>
<li>Start with a total score of <code>0</code>.</li>
<li>Multiply the total score by 5 to get <code>0</code>, then add the value of <code>]</code> (2) to get a new total score of <code>2</code>.</li>
<li>Multiply the total score by 5 to get <code>10</code>, then add the value of <code>)</code> (1) to get a new total score of <code>11</code>.</li>
<li>Multiply the total score by 5 to get <code>55</code>, then add the value of <code>}</code> (3) to get a new total score of <code>58</code>.</li>
<li>Multiply the total score by 5 to get <code>290</code>, then add the value of <code>&gt;</code> (4) to get a new total score of <code>294</code>.</li>
</ul>
<p>The five lines' completion strings have total scores as follows:</p>
<ul>
<li><code>}}]])})]</code> - <code>288957</code> total points.</li>
<li><code>)}&gt;]})</code> - <code>5566</code> total points.</li>
<li><code>}}&gt;}&gt;))))</code> - <code>1480781</code> total points.</li>
<li><code>]]}}]}]}&gt;</code> - <code>995444</code> total points.</li>
<li><code>])}&gt;</code> - <code>294</code> total points.</li>
</ul>


</article>
<p>Your puzzle answer was <code>3969823589</code>.</p><p class="day-success"><b>Both parts of this puzzle are complete! They provide two gold stars: 🌟🌟</b></p>
<h2>--- Results ---</h2>
<pre><code>Day10 - First Answer: 265527
Day10 - Second Answer: 3969823589
Day10 - Execution finished in 0.0034999847412109 seconds.
</code></pre>
<pre><code>*** TESTING DAY Day10 ***
PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

Day10 (mikeroq\AdventOfCode\AdventOfCode2021\Day10\Day10)
 ✔ Part 1 example equals 26397
 ✔ Part 2 example equals 288957

Time: 00:00.008, Memory: 4.00 MB

OK (2 tests, 2 assertions)
</code></pre>