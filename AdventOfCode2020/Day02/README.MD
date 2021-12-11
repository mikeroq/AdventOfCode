<article class="day-desc"><h2>--- Day 2: Password Philosophy ---</h2><p>Your flight departs in a few days from the coastal airport; the easiest way down to the coast from here is via <a href="https://en.wikipedia.org/wiki/Toboggan" target="_blank">toboggan</a>.</p>
<p>The shopkeeper at the North Pole Toboggan Rental Shop is having a bad day. "Something's wrong with our computers; we can't log in!" You ask if you can take a look.</p>
<p>Their password database seems to be a little corrupted: some of the passwords wouldn't have been allowed by the <span title="To ensure your safety, your password must be the following string...">Official Toboggan Corporate Policy</span> that was in effect when they were chosen.</p>
<p>To try to debug the problem, they have created a list (your puzzle input) of <b>passwords</b> (according to the corrupted database) and <b>the corporate policy when that password was set</b>.</p>
<p>For example, suppose you have the following list:</p>
<pre><code>1-3 a: abcde
1-3 b: cdefg
2-9 c: ccccccccc
</code></pre>



</article>
<p>Your puzzle answer was <code>517</code>.</p><article class="day-desc"><h2 id="part2">--- Part Two ---</h2><p>While it appears you validated the passwords correctly, they don't seem to be what the Official Toboggan Corporate Authentication System is expecting.</p>
<p>The shopkeeper suddenly realizes that he just accidentally explained the password policy rules from his old job at the sled rental place down the street! The Official Toboggan Corporate Policy actually works a little differently.</p>
<p>Each policy actually describes two <b>positions in the password</b>, where <code>1</code> means the first character, <code>2</code> means the second character, and so on. (Be careful; Toboggan Corporate Policies have no concept of "index zero"!) <b>Exactly one of these positions</b> must contain the given letter. Other occurrences of the letter are irrelevant for the purposes of policy enforcement.</p>

<ul>
<li><code>1-3 a: <b>a</b>b<b>c</b>de</code> is <b>valid</b>: position <code>1</code> contains <code>a</code> and position <code>3</code> does not.</li>
<li><code>1-3 b: <b>c</b>d<b>e</b>fg</code> is <b>invalid</b>: neither position <code>1</code> nor position <code>3</code> contains <code>b</code>.</li>
<li><code>2-9 c: c<b>c</b>cccccc<b>c</b></code> is <b>invalid</b>: both position <code>2</code> and position <code>9</code> contain <code>c</code>.</li>
</ul>

</article>
<p>Your puzzle answer was <code>284</code>.</p><p class="day-success"><b>Both parts of this puzzle are complete! They provide two gold stars: 🌟🌟</b></p>
<h2>--- Results ---</h2>
<pre><code>Day02 - First Answer: 1488669
Day02 - Second Answer: 1176514794
Day02 - Execution finished in 0.0020718574523926 seconds.
</code></pre>
<pre><code>*** TESTING DAY Day02 ***
PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

Day02 (mikeroq\AdventOfCode\AdventOfCode2021\Day02\Day02)
 ✔ Part 1 example equals 150
 ✔ Part 2 example equals 900
 ✔ Part 1 real answer equals 1488669
 ✔ Part 2 real answer equals 1176514794

Time: 00:00.010, Memory: 4.00 MB

OK (4 tests, 4 assertions)
</code></pre>