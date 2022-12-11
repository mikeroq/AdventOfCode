<article class="day-desc"><h2>--- Day 4: Camp Cleanup ---</h2><p>Space needs to be cleared before the last supplies can be unloaded from the ships, and so several Elves have been assigned the job of cleaning up sections of the camp. Every section has a unique <b>ID number</b>, and each Elf is assigned a range of section IDs.</p>
<p>However, as some of the Elves compare their section assignments with each other, they've noticed that many of the assignments <b>overlap</b>. To try to quickly find overlaps and reduce duplicated effort, the Elves pair up and make a <b>big list of the section assignments for each pair</b> (your puzzle input).</p>
<p>For example, consider the following list of section assignment pairs:</p>
<pre><code>2-4,6-8
2-3,4-5
5-7,7-9
2-8,3-7
6-6,4-6
2-6,4-8
</code></pre>
<p>For the first few pairs, this list means:</p>
<ul>
<li>Within the first pair of Elves, the first Elf was assigned sections <code>2-4</code> (sections <code>2</code>, <code>3</code>, and <code>4</code>), while the second Elf was assigned sections <code>6-8</code> (sections <code>6</code>, <code>7</code>, <code>8</code>).</li>
<li>The Elves in the second pair were each assigned two sections.</li>
<li>The Elves in the third pair were each assigned three sections: one got sections <code>5</code>, <code>6</code>, and <code>7</code>, while the other also got <code>7</code>, plus <code>8</code> and <code>9</code>.</li>
</ul>
<p>This example list uses single-digit section IDs to make it easier to draw; your actual list might contain larger numbers. Visually, these pairs of section assignments look like this:</p>
<pre><code>.234.....  2-4
.....678.  6-8

.23......  2-3
...45....  4-5

....567..  5-7
......789  7-9

.2345678.  2-8
..34567..  3-7

.....6...  6-6
...456...  4-6

.23456...  2-6
...45678.  4-8
</code></pre>


</article>

<form method="post" action="4/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>2022 Day04 - First Answer: 540
2022 Day04 - Second Answer: 872
2022 Day04 - Execution finished in 0.045035123825073 seconds.
</code></pre>
<pre><code>2022 Day04 - First Answer: 540
2022 Day04 - Second Answer: 872
2022 Day04 - Execution finished in 0.045035123825073 seconds.
</code></pre>