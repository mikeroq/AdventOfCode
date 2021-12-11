<article class="day-desc"><h2>--- Day 5: Binary Boarding ---</h2><p>You board your plane only to discover a new problem: you dropped your boarding pass! You aren't sure which seat is yours, and all of the flight attendants are busy with the flood of people that suddenly made it through passport control.</p>
<p>You write a <span title="No problem!">quick program</span> to use your phone's camera to scan all of the nearby boarding passes (your puzzle input); perhaps you can find your seat through process of elimination.</p>
<p>Instead of <a target="_blank" href="https://www.youtube.com/watch?v=oAHbLRjF0vo">zones or groups</a>, this airline uses <b>binary space partitioning</b> to seat people. A seat might be specified like <code>FBFBBFFRLR</code>, where <code>F</code> means "front", <code>B</code> means "back", <code>L</code> means "left", and <code>R</code> means "right".</p>
<p>The first 7 characters will either be <code>F</code> or <code>B</code>; these specify exactly one of the <b>128 rows</b> on the plane (numbered <code>0</code> through <code>127</code>). Each letter tells you which half of a region the given seat is in. Start with the whole list of rows; the first letter indicates whether the seat is in the <b>front</b> (<code>0</code> through <code>63</code>) or the <b>back</b> (<code>64</code> through <code>127</code>). The next letter indicates which half of that region the seat is in, and so on until you're left with exactly one row.</p>
<p>For example, consider just the first seven characters of <code>FBFBBFFRLR</code>:</p>
<ul>
<li>Start by considering the whole range, rows <code>0</code> through <code>127</code>.</li>
<li><code>F</code> means to take the <b>lower half</b>, keeping rows <code>0</code> through <code>63</code>.</li>
<li><code>B</code> means to take the <b>upper half</b>, keeping rows <code>32</code> through <code>63</code>.</li>
<li><code>F</code> means to take the <b>lower half</b>, keeping rows <code>32</code> through <code>47</code>.</li>
<li><code>B</code> means to take the <b>upper half</b>, keeping rows <code>40</code> through <code>47</code>.</li>
<li><code>B</code> keeps rows <code>44</code> through <code>47</code>.</li>
<li><code>F</code> keeps rows <code>44</code> through <code>45</code>.</li>
<li>The final <code>F</code> keeps the lower of the two, <b>row <code>44</code></b>.</li>
</ul>
<p>The last three characters will be either <code>L</code> or <code>R</code>; these specify exactly one of the <b>8 columns</b> of seats on the plane (numbered <code>0</code> through <code>7</code>). The same process as above proceeds again, this time with only three steps.  <code>L</code> means to keep the <b>lower half</b>, while <code>R</code> means to keep the <b>upper half</b>.</p>
<p>For example, consider just the last 3 characters of <code>FBFBBFFRLR</code>:</p>
<ul>
<li>Start by considering the whole range, columns <code>0</code> through <code>7</code>.</li>
<li><code>R</code> means to take the <b>upper half</b>, keeping columns <code>4</code> through <code>7</code>.</li>
<li><code>L</code> means to take the <b>lower half</b>, keeping columns <code>4</code> through <code>5</code>.</li>
<li>The final <code>R</code> keeps the upper of the two, <b>column <code>5</code></b>.</li>
</ul>
<p>So, decoding <code>FBFBBFFRLR</code> reveals that it is the seat at <b>row <code>44</code>, column <code>5</code></b>.</p>
<p>Every seat also has a unique <b>seat ID</b>: multiply the row by 8, then add the column. In this example, the seat has ID <code>44 * 8 + 5 = <b>357</b></code>.</p>

<ul>
<li><code>BFFFBBFRRR</code>: row <code>70</code>, column <code>7</code>, seat ID <code>567</code>.</li>
<li><code>FFFBBBFRRR</code>: row <code>14</code>, column <code>7</code>, seat ID <code>119</code>.</li>
<li><code>BBFFBBFRLL</code>: row <code>102</code>, column <code>4</code>, seat ID <code>820</code>.</li>
</ul>

</article>
<p>Your puzzle answer was <code>991</code>.</p><article class="day-desc"><h2 id="part2">--- Part Two ---</h2><p><b>Ding!</b> The "fasten seat belt" signs have turned on. Time to find your seat.</p>



</article>
<p>Your puzzle answer was <code>534</code>.</p><p class="day-success"><b>Both parts of this puzzle are complete! They provide two gold stars: 🌟🌟</b></p>
<h2>--- Results ---</h2>
<pre><code>Day05 - First Answer: 7473
Day05 - Second Answer: 24164
Day05 - Execution finished in 0.10256791114807 seconds.
</code></pre>
<pre><code>*** TESTING DAY Day05 ***
PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

Day05 (mikeroq\AdventOfCode\AdventOfCode2021\Day05\Day05)
 ✔ Part 1 example equals 5
 ✔ Part 1 real answer equals 7473
 ✔ Part 2 example equals 12
 ✔ Part 2 real answer equals 24164

Time: 00:00.128, Memory: 20.00 MB

OK (4 tests, 4 assertions)
</code></pre>