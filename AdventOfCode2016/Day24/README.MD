<article class="day-desc"><h2>--- Day 24: Air Duct Spelunking ---</h2><p>You've finally met your match; the doors that provide access to the roof are locked tight, and all of the controls and related electronics are inaccessible. You simply can't reach them.</p>
<p>The robot that cleans the air ducts, however, <b>can</b>.</p>
<p>It's not a very fast <span title="The Brave Little Air Duct Cleaning Robot That Could">little robot</span>, but you reconfigure it to be able to interface with some of the exposed wires that have been routed through the <a href="https://en.wikipedia.org/wiki/HVAC">HVAC</a> system. If you can direct it to each of those locations, you should be able to bypass the security controls.</p>
<p>You extract the duct layout for this area from some blueprints you acquired and create a map with the relevant locations marked (your puzzle input). <code>0</code> is your current location, from which the cleaning robot embarks; the other numbers are (in <b>no particular order</b>) the locations the robot needs to visit at least once each. Walls are marked as <code>#</code>, and open passages are marked as <code>.</code>. Numbers behave like open passages.</p>
<p>For example, suppose you have a map like the following:</p>
<pre><code>###########
#0.1.....2#
#.#######.#
#4.......3#
###########
</code></pre>
<p>To reach all of the points of interest as quickly as possible, you would have the robot take the following path:</p>
<ul>
<li><code>0</code> to <code>4</code> (<code>2</code> steps)</li>
<li><code>4</code> to <code>1</code> (<code>4</code> steps; it can't move diagonally)</li>
<li><code>1</code> to <code>2</code> (<code>6</code> steps)</li>
<li><code>2</code> to <code>3</code> (<code>2</code> steps)</li>
</ul>


</article>

<form method="post" action="24/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>