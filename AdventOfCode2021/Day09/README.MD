<article class="day-desc"><h2>--- Day 9: Smoke Basin ---</h2><p>These caves seem to be <a href="https://en.wikipedia.org/wiki/Lava_tube" target="_blank">lava tubes</a>. Parts are even still volcanically active; small hydrothermal vents release smoke into the caves that slowly <span title="This was originally going to be a puzzle about watersheds, but we're already under water.">settles like rain</span>.</p>
<p>If you can model how the smoke flows through the caves, you might be able to avoid it and be that much safer. The submarine generates a heightmap of the floor of the nearby caves for you (your puzzle input).</p>
<p>Smoke flows to the lowest point of the area it's in. For example, consider the following heightmap:</p>
<pre><code>2<b>1</b>9994321<b>0</b>
3987894921
98<b>5</b>6789892
8767896789
989996<b>5</b>678
</code></pre>
<p>Each number corresponds to the height of a particular location, where <code>9</code> is the highest and <code>0</code> is the lowest a location can be.</p>
<p>Your first goal is to find the <b>low points</b> - the locations that are lower than any of its adjacent locations. Most locations have four adjacent locations (up, down, left, and right); locations on the edge or corner of the map have three or two adjacent locations, respectively. (Diagonal locations do not count as adjacent.)</p>



</article>
<p>Your puzzle answer was <code>508</code>.</p><article class="day-desc"><h2 id="part2">--- Part Two ---</h2><p>Next, you need to find the largest basins so you know what areas are most important to avoid.</p>
<p>A <b>basin</b> is all locations that eventually flow downward to a single low point. Therefore, every low point has a basin, although some basins are very small. Locations of height <code>9</code> do not count as being in any basin, and all other locations will always be part of exactly one basin.</p>
<p>The <b>size</b> of a basin is the number of locations within the basin, including the low point. The example above has four basins.</p>
<p>The top-left basin, size <code>3</code>:</p>
<pre><code><b>21</b>99943210
<b>3</b>987894921
9856789892
8767896789
9899965678
</code></pre>
<p>The top-right basin, size <code>9</code>:</p>
<pre><code>21999<b>43210</b>
398789<b>4</b>9<b>21</b>
985678989<b>2</b>
8767896789
9899965678
</code></pre>
<p>The middle basin, size <code>14</code>:</p>
<pre><code>2199943210
39<b>878</b>94921
9<b>85678</b>9892
<b>87678</b>96789
9<b>8</b>99965678
</code></pre>
<p>The bottom-right basin, size <code>9</code>:</p>
<pre><code>2199943210
3987894921
9856789<b>8</b>92
876789<b>678</b>9
98999<b>65678</b>
</code></pre>


</article>
<p>Your puzzle answer was <code>1564640</code>.</p><p class="day-success"><b>Both parts of this puzzle are complete! They provide two gold stars: 🌟🌟</b></p>
<h2>--- Results ---</h2>
<pre><code>2021 Day09 - First Answer: 508
2021 Day09 - Second Answer: 0
2021 Day09 - Execution finished in 0.027606010437012 seconds.
</code></pre>
<pre><code>*** TESTING 2021 DAY Day09 ***
PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

Day09 (mikeroq\AdventOfCode\AdventOfCode2021\Day09\Day09)
 ✔ Part 1 example equals 15

Time: 00:00.016, Memory: 4.00 MB

OK (1 test, 1 assertion)
</code></pre>