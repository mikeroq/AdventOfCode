<article class="day-desc"><h2>--- Day 4: The Ideal Stocking Stuffer ---</h2><p>Santa needs help <a href="https://en.wikipedia.org/wiki/Bitcoin#Mining">mining</a> some <span title="Hey, mined your own business!">AdventCoins</span> (very similar to <a href="https://en.wikipedia.org/wiki/Bitcoin">bitcoins</a>) to use as gifts for all the economically forward-thinking little girls and boys.</p>


<ul>
<li>If your secret key is <code>abcdef</code>, the answer is <code>609043</code>, because the MD5 hash of <code>abcdef609043</code> starts with five zeroes (<code>000001dbbfa...</code>), and it is the lowest such number to do so.</li>
<li>If your secret key is <code>pqrstuv</code>, the lowest number it combines with to make an MD5 hash starting with five zeroes is <code>1048970</code>; that is, the MD5 hash of <code>pqrstuv1048970</code> looks like <code>000006136ef...</code>.</li>
</ul>
</article>
<p>Your puzzle answer was <code>117946</code>.</p><article class="day-desc"><h2 id="part2">--- Part Two ---</h2>
</article>
<p>Your puzzle answer was <code>3938038</code>.</p><p class="day-success"><b>Both parts of this puzzle are complete! They provide two gold stars: 🌟🌟</b></p>
<h2>--- Results ---</h2>
<pre><code>2015 Day04 - First Answer: 117946
2015 Day04 - Second Answer: 3938038
2015 Day04 - Execution finished in 1.3985531330109 seconds.
</code></pre>
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