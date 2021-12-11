<article class="day-desc"><h2>--- Day 1: Sonar Sweep ---</h2><p>You're minding your own business on a ship at sea when the overboard alarm goes off! You rush to see if you can help. Apparently, one of the Elves tripped and accidentally sent the sleigh keys flying into the ocean!</p>
<p>Before you know it, you're inside a submarine the Elves keep ready for situations like this. It's covered in Christmas lights (because of course it is), and it even has an experimental antenna that should be able to track the keys if you can boost its signal strength high enough; there's a little meter that indicates the antenna's signal strength by displaying 0-50 <b class="star">stars</b>.</p>
<p>Your instincts tell you that in order to save Christmas, you'll need to get all <b class="star">fifty stars</b> by December 25th.</p>
<p>Collect stars by solving puzzles.  Two puzzles will be made available on each day in the Advent calendar; the second puzzle is unlocked when you complete the first.  Each puzzle grants <b class="star">one star</b>. Good luck!</p>
<p>As the submarine drops below the surface of the ocean, it automatically performs a sonar sweep of the nearby sea floor. On a small screen, the sonar sweep report (your puzzle input) appears: each line is a measurement of the sea floor depth as the sweep looks further and further away from the submarine.</p>
<p>For example, suppose you had the following report:</p>
<pre><code>199
200
208
210
200
207
240
269
260
263
</code></pre>
<p>This report indicates that, scanning outward from the submarine, the sonar sweep found depths of <code>199</code>, <code>200</code>, <code>208</code>, <code>210</code>, and so on.</p>
<p>The first order of business is to figure out how quickly the depth increases, just so you know what you're dealing with - you never know if the keys will get <span title="Does this premise seem fishy to you?">carried into deeper water</span> by an ocean current or a fish or something.</p>
<p>To do this, count <b>the number of times a depth measurement increases</b> from the previous measurement. (There is no measurement before the first measurement.) In the example above, the changes are as follows:</p>
<pre><code>199 (N/A - no previous measurement)
200 (<b>increased</b>)
208 (<b>increased</b>)
210 (<b>increased</b>)
200 (decreased)
207 (<b>increased</b>)
240 (<b>increased</b>)
269 (<b>increased</b>)
260 (decreased)
263 (<b>increased</b>)
</code></pre>
<p>In this example, there are <b><code>7</code></b> measurements that are larger than the previous measurement.</p>
<p><b>How many measurements are larger than the previous measurement?</b></p>
</article>
<p>Your puzzle answer was <code>1713</code>.</p><article class="day-desc"><h2 id="part2">--- Part Two ---</h2><p>Considering every single measurement isn't as useful as you expected: there's just too much noise in the data.</p>
<p>Instead, consider sums of a <b>three-measurement sliding window</b>.  Again considering the above example:</p>
<pre><code>199  A      
200  A B    
208  A B C  
210    B C D
200  E   C D
207  E F   D
240  E F G  
269    F G H
260      G H
263        H
</code></pre>
<p>Start by comparing the first and second three-measurement windows. The measurements in the first window are marked <code>A</code> (<code>199</code>, <code>200</code>, <code>208</code>); their sum is <code>199 + 200 + 208 = 607</code>. The second window is marked <code>B</code> (<code>200</code>, <code>208</code>, <code>210</code>); its sum is <code>618</code>. The sum of measurements in the second window is larger than the sum of the first, so this first comparison <b>increased</b>.</p>
<p>Your goal now is to count <b>the number of times the sum of measurements in this sliding window increases</b> from the previous sum. So, compare <code>A</code> with <code>B</code>, then compare <code>B</code> with <code>C</code>, then <code>C</code> with <code>D</code>, and so on. Stop when there aren't enough measurements left to create a new three-measurement sum.</p>
<p>In the above example, the sum of each three-measurement window is as follows:</p>
<pre><code>A: 607 (N/A - no previous sum)
B: 618 (<b>increased</b>)
C: 618 (no change)
D: 617 (decreased)
E: 647 (<b>increased</b>)
F: 716 (<b>increased</b>)
G: 769 (<b>increased</b>)
H: 792 (<b>increased</b>)
</code></pre>
<p>In this example, there are <b><code>5</code></b> sums that are larger than the previous sum.</p>
<p>Consider sums of a three-measurement sliding window. <b>How many sums are larger than the previous sum?</b></p>
</article>
<p>Your puzzle answer was <code>1734</code>.</p>
<p class="day-success">Both parts of this puzzle are complete! They provide two gold stars: **</p>
<p>At this point, you should <a href="/2021">return to your Advent calendar</a> and try another puzzle.</p>
<p>If you still want to see it, you can <a href="1/input" target="_blank">get your puzzle input</a>.</p>
<p>You can also <span class="share">[Share<span class="share-content">on
  <a href="https://twitter.com/intent/tweet?text=I%27ve+completed+%22Sonar+Sweep%22+%2D+Day+1+%2D+Advent+of+Code+2021&amp;url=https%3A%2F%2Fadventofcode%2Ecom%2F2021%2Fday%2F1&amp;related=ericwastl&amp;hashtags=AdventOfCode" target="_blank">Twitter</a>
  <a href="javascript:void(0);" onclick="var mastodon_instance=prompt('Mastodon Instance / Server Name?'); if(typeof mastodon_instance==='string' &amp;&amp; mastodon_instance.length){this.href='https://'+mastodon_instance+'/share?text=I%27ve+completed+%22Sonar+Sweep%22+%2D+Day+1+%2D+Advent+of+Code+2021+%23AdventOfCode+https%3A%2F%2Fadventofcode%2Ecom%2F2021%2Fday%2F1'}else{return false;}" target="_blank">Mastodon</a></span>]</span> this puzzle.</p>

```
Day01 - First Answer: 1713
Day01 - Second Answer: 1734
Day01 - Execution finished in 0.0020949840545654 seconds.
```
```
*** TESTING DAY Day01 ***
PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

Day01 (mikeroq\AdventOfCode\AdventOfCode2021\Day01\Day01)
 ✔ Part 1 example equals 7
 ✔ Part 2 example equals 5
 ✔ Part 1 real answer equals 1713
 ✔ Part 2 real answer equals 1734

Time: 00:00.009, Memory: 4.00 MB

OK (4 tests, 4 assertions)
```
