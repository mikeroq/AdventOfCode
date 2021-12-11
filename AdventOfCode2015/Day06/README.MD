<article class="day-desc"><h2>--- Day 6: Probably a Fire Hazard ---</h2><p>Because your neighbors keep defeating you in the holiday house decorating contest year after year, you've decided to deploy one million lights in a <span title="Hey, be glad I'm not asking for the resistance between two points!">1000x1000 grid</span>.</p>
<p>Furthermore, because you've been especially nice this year, Santa has mailed you instructions on how to display the ideal lighting configuration.</p>
<p>Lights in your grid are numbered from 0 to 999 in each direction; the lights at each corner are at <code>0,0</code>, <code>0,999</code>, <code>999,999</code>, and <code>999,0</code>. The instructions include whether to <code>turn on</code>, <code>turn off</code>, or <code>toggle</code> various inclusive ranges given as coordinate pairs.  Each coordinate pair represents opposite corners of a rectangle, inclusive; a coordinate pair like <code>0,0 through 2,2</code> therefore refers to 9 lights in a 3x3 square.  The lights all start turned off.
</p><p>To defeat your neighbors this year, all you have to do is set up your lights by doing the instructions Santa sent you in order.</p>

<ul>
<li><code>turn on 0,0 through 999,999</code> would turn on (or leave on) every light.</li>
<li><code>toggle 0,0 through 999,0</code> would toggle the first line of 1000 lights, turning off the ones that were on, and turning on the ones that were off.</li>
<li><code>turn off 499,499 through 500,500</code> would turn off (or leave off) the middle four lights.</li>
</ul>

</article>
<p>Your puzzle answer was <code>400410</code>.</p><article class="day-desc"><h2 id="part2">--- Part Two ---</h2><p>You just finish implementing your winning light pattern when you realize you mistranslated Santa's message from Ancient Nordic Elvish.</p>
<p>The light grid you bought actually has individual brightness controls; each light can have a brightness of zero or more.  The lights all start at zero.</p>
<p>The phrase <code>turn on</code> actually means that you should increase the brightness of those lights by <code>1</code>.</p>
<p>The phrase <code>turn off</code> actually means that you should decrease the brightness of those lights by <code>1</code>, to a minimum of zero.</p>
<p>The phrase <code>toggle</code> actually means that you should increase the brightness of those lights by <code>2</code>.</p>


<ul>
<li><code>turn on 0,0 through 0,0</code> would increase the total brightness by <code>1</code>.</li>
<li><code>toggle 0,0 through 999,999</code> would increase the total brightness by <code>2000000</code>.</li>
</ul>
</article>
<p>Your puzzle answer was <code>15343601</code>.</p><p class="day-success"><b>Both parts of this puzzle are complete! They provide two gold stars: 🌟🌟</b></p>
<h2>--- Results ---</h2>
<pre><code>2015 Day06 - First Answer: 400410
2015 Day06 - Second Answer: 15343601
2015 Day06 - Execution finished in 7.1753160953522 seconds.
</code></pre>
<pre><code>*** TESTING 2015 DAY Day06 ***
PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

Day06 (mikeroq\AdventOfCode\AdventOfCode2015\Day06\Day06)
 ✔ Part 1 example lights on equals 998996
 ✔ Part 2 example light brightness total equals 2000001
 ✔ Part 1 real answer equals 400410
 ✔ Part 2 real answer equals 15343601

Time: 00:06.793, Memory: 44.00 MB

OK (4 tests, 4 assertions)
</code></pre>