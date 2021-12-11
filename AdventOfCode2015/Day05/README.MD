<article class="day-desc"><h2>--- Day 5: Doesn't He Have Intern-Elves For This? ---</h2><p>Santa needs help figuring out which strings in his text file are naughty or nice.</p>
<p>A <b>nice string</b> is one with all of the following properties:</p>
<ul>
<li>It contains at least three vowels (<code>aeiou</code> only), like <code>aei</code>, <code>xazegov</code>, or <code title="John Madden John Madden John Madden">aeiouaeiouaeiou</code>.</li>
<li>It contains at least one letter that appears twice in a row, like <code>xx</code>, <code>abcdde</code> (<code>dd</code>), or <code>aabbccdd</code> (<code>aa</code>, <code>bb</code>, <code>cc</code>, or <code>dd</code>).</li>
<li>It does <b>not</b> contain the strings <code>ab</code>, <code>cd</code>, <code>pq</code>, or <code>xy</code>, even if they are part of one of the other requirements.</li>
</ul>

<ul>
<li><code>ugknbfddgicrmopn</code> is nice because it has at least three vowels (<code>u...i...o...</code>), a double letter (<code>...dd...</code>), and none of the disallowed substrings.</li>
<li><code>aaa</code> is nice because it has at least three vowels and a double letter, even though the letters used by different rules overlap.</li>
<li><code>jchzalrnumimnmhp</code> is naughty because it has no double letter.</li>
<li><code>haegwjzuvuyypxyu</code> is naughty because it contains the string <code>xy</code>.</li>
<li><code>dvszwmarrgswjxmb</code> is naughty because it contains only one vowel.</li>
</ul>

</article>
<p>Your puzzle answer was <code>238</code>.</p><article class="day-desc"><h2 id="part2">--- Part Two ---</h2><p>Realizing the error of his ways, Santa has switched to a better model of determining whether a string is naughty or nice.  None of the old rules apply, as they are all clearly ridiculous.</p>
<p>Now, a nice string is one with all of the following properties:</p>
<ul>
<li>It contains a pair of any two letters that appears at least twice in the string without overlapping, like <code>xyxy</code> (<code>xy</code>) or <code>aabcdefgaa</code> (<code>aa</code>), but not like <code>aaa</code> (<code>aa</code>, but it overlaps).</li>
<li>It contains at least one letter which repeats with exactly one letter between them, like <code>xyx</code>, <code>abcdefeghi</code> (<code>efe</code>), or even <code>aaa</code>.</li>
</ul>

<ul>
<li><code>qjhvhtzxzqqjkmpb</code> is nice because is has a pair that appears twice (<code>qj</code>) and a letter that repeats with exactly one letter between them (<code>zxz</code>).</li>
<li><code>xxyxx</code> is nice because it has a pair that appears twice and a letter that repeats with one between, even though the letters used by each rule overlap.</li>
<li><code>uurcxstgmygtbstg</code> is naughty because it has a pair (<code>tg</code>) but no repeat with a single letter between them.</li>
<li><code>ieodomkazucvgmuy</code> is naughty because it has a repeating letter with one between (<code>odo</code>), but no pair that appears twice.</li>
</ul>

</article>
<p>Your puzzle answer was <code>69</code>.</p><p class="day-success"><b>Both parts of this puzzle are complete! They provide two gold stars: 🌟🌟</b></p>
<h2>--- Results ---</h2>
<pre><code>*** TESTING 2015 DAY Day04 ***
PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

Day04 (mikeroq\AdventOfCode\AdventOfCode2015\Day04\Day04)
 ✔ Part 1 equals 609043
 ✔ Part 1 equals 1048970
 ✔ Part 1 real answer equals 117946
 ✔ Part 12 real answer equals 3938038

Time: 00:01.797, Memory: 4.00 MB

OK (4 tests, 4 assertions)
</code></pre>
<pre><code>*** TESTING 2015 DAY Day05 ***
PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

Day05 (mikeroq\AdventOfCode\AdventOfCode2015\Day05\Day05)
 ✔ That two example strings are nice
 ✔ Part 2 that two example strings are nice

Time: 00:00.008, Memory: 4.00 MB

OK (2 tests, 2 assertions)
</code></pre>