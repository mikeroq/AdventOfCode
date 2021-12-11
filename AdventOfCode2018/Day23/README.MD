<article class="day-desc"><h2>--- Day 23: Experimental Emergency Teleportation ---</h2><p>Using your torch to search the darkness of the rocky cavern, you finally locate the man's friend: a small <b>reindeer</b>.</p>
<p>You're not sure how it got so far in this cave.  It looks sick - too sick to walk - and too heavy for you to carry all the way back.  Sleighs won't be invented for another 1500 years, of course.</p>
<p>The only option is <b>experimental emergency teleportation</b>.</p>
<p>You hit the "experimental emergency teleportation" <span title="We've always had this button; we've just been too scared to press it.">button</span> on the device and push <b>I accept the risk</b> on no fewer than 18 different warning messages. Immediately, the device deploys hundreds of tiny <b>nanobots</b> which fly around the cavern, apparently assembling themselves into a very specific <b>formation</b>. The device lists the <code>X,Y,Z</code> position (<code>pos</code>) for each nanobot as well as its <b>signal radius</b> (<code>r</code>) on its tiny screen (your puzzle input).</p>
<p>Each nanobot can transmit signals to any integer coordinate which is a distance away from it <b>less than or equal to</b> its signal radius (as measured by <a href="https://en.wikipedia.org/wiki/Taxicab_geometry">Manhattan distance</a>). Coordinates a distance away of less than or equal to a nanobot's signal radius are said to be <b>in range</b> of that nanobot.</p>
<p>Before you start the teleportation process, you should determine which nanobot is the <b>strongest</b> (that is, which has the largest signal radius) and then, for that nanobot, the <b>total number of nanobots that are in range</b> of it, <b>including itself</b>.</p>
<p>For example, given the following nanobots:</p>
<pre><code>pos=&lt;0,0,0&gt;, r=4
pos=&lt;1,0,0&gt;, r=1
pos=&lt;4,0,0&gt;, r=3
pos=&lt;0,2,0&gt;, r=1
pos=&lt;0,5,0&gt;, r=3
pos=&lt;0,0,3&gt;, r=1
pos=&lt;1,1,1&gt;, r=1
pos=&lt;1,1,2&gt;, r=1
pos=&lt;1,3,1&gt;, r=1
</code></pre>
<p>The strongest nanobot is the first one (position <code>0,0,0</code>) because its signal radius, <code>4</code> is the largest. Using that nanobot's location and signal radius, the following nanobots are in or out of range:</p>
<ul>
<li>The nanobot at <code>0,0,0</code> is distance <code>0</code> away, and so it is <b>in range</b>.</li>
<li>The nanobot at <code>1,0,0</code> is distance <code>1</code> away, and so it is <b>in range</b>.</li>
<li>The nanobot at <code>4,0,0</code> is distance <code>4</code> away, and so it is <b>in range</b>.</li>
<li>The nanobot at <code>0,2,0</code> is distance <code>2</code> away, and so it is <b>in range</b>.</li>
<li>The nanobot at <code>0,5,0</code> is distance <code>5</code> away, and so it is <b>not</b> in range.</li>
<li>The nanobot at <code>0,0,3</code> is distance <code>3</code> away, and so it is <b>in range</b>.</li>
<li>The nanobot at <code>1,1,1</code> is distance <code>3</code> away, and so it is <b>in range</b>.</li>
<li>The nanobot at <code>1,1,2</code> is distance <code>4</code> away, and so it is <b>in range</b>.</li>
<li>The nanobot at <code>1,3,1</code> is distance <code>5</code> away, and so it is <b>not</b> in range.</li>
</ul>


</article>

<form method="post" action="23/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>