<article class="day-desc"><h2>--- Day 7: The Sum of Its Parts ---</h2><p>You find yourself standing on a snow-covered coastline; apparently, you landed a little off course.  The region is too hilly to see the North Pole from here, but you do spot some Elves that seem to be trying to unpack something that washed ashore. It's quite cold out, so you decide to risk creating a paradox by asking them for directions.</p>
<p>"Oh, are you the search party?" Somehow, you can understand whatever Elves from the year 1018 speak; you assume it's <a href="/2015/day/6">Ancient Nordic Elvish</a>. Could the device on your wrist also be a translator? "Those clothes don't look very warm; take this." They hand you a heavy coat.</p>
<p>"We do need to find our way back to the North Pole, but we have higher priorities at the moment. You see, believe it or not, this box contains something that will solve all of Santa's transportation problems - at least, that's what it looks like from the pictures in the instructions."  It doesn't seem like they can read whatever language it's in, but you can: "Sleigh kit. <span title="Just some oak and some pine and a handful of Norsemen.">Some assembly required.</span>"</p>
<p>"'Sleigh'? What a wonderful name! You must help us assemble this 'sleigh' at once!" They start excitedly pulling more parts out of the box.</p>
<p>The instructions specify a series of <b>steps</b> and requirements about which steps must be finished before others can begin (your puzzle input). Each step is designated by a single letter. For example, suppose you have the following instructions:</p>
<pre><code>Step C must be finished before step A can begin.
Step C must be finished before step F can begin.
Step A must be finished before step B can begin.
Step A must be finished before step D can begin.
Step B must be finished before step E can begin.
Step D must be finished before step E can begin.
Step F must be finished before step E can begin.
</code></pre>
<p>Visually, these requirements look like this:</p>
<pre><code>  --&gt;A---&gt;B--
 /    \      \
C      --&gt;D-----&gt;E
 \           /
  ----&gt;F-----
</code></pre>
<p>Your first goal is to determine the order in which the steps should be completed. If more than one step is ready, choose the step which is first alphabetically. In this example, the steps would be completed as follows:</p>
<ul>
<li>Only <b><code>C</code></b> is available, and so it is done first.</li>
<li>Next, both <code>A</code> and <code>F</code> are available. <b><code>A</code></b> is first alphabetically, so it is done next.</li>
<li>Then, even though <code>F</code> was available earlier, steps <code>B</code> and <code>D</code> are now also available, and <b><code>B</code></b> is the first alphabetically of the three.</li>
<li>After that, only <code>D</code> and <code>F</code> are available. <code>E</code> is not available because only some of its prerequisites are complete. Therefore, <b><code>D</code></b> is completed next.</li>
<li><b><code>F</code></b> is the only choice, so it is done next.</li>
<li>Finally, <b><code>E</code></b> is completed.</li>
</ul>


</article>

<form method="post" action="7/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>