<article class="day-desc"><h2>--- Day 19: Tractor Beam ---</h2><p>Unsure of the state of Santa's ship, you <span title='"borrowed"'>borrowed</span> the tractor beam technology from Triton. Time to test it out.</p>
<p>When you're safely away from anything else, you activate the tractor beam, but nothing happens.  It's hard to tell whether it's working if there's nothing to use it on. Fortunately, your ship's drone system can be configured to deploy a drone to specific coordinates and then check whether it's being pulled. There's even an <a href="9">Intcode</a> program (your puzzle input) that gives you access to the drone system.</p>
<p>The program uses two input instructions to request the <b>X and Y position</b> to which the drone should be deployed.  Negative numbers are invalid and will confuse the drone; all numbers should be <b>zero or positive</b>.</p>
<p>Then, the program will output whether the drone is <b>stationary</b> (<code>0</code>) or <b>being pulled by something</b> (<code>1</code>). For example, the coordinate X=<code>0</code>, Y=<code>0</code> is directly in front of the tractor beam emitter, so the drone control program will always report <code>1</code> at that location.</p>
<p>To better understand the tractor beam, it is important to <b>get a good picture</b> of the beam itself. For example, suppose you scan the 10x10 grid of points closest to the emitter:</p>
<pre><code>       X
  0-&gt;      9
 0#.........
 |.#........
 v..##......
  ...###....
  ....###...
Y .....####.
  ......####
  ......####
  .......###
 9........##
</code></pre>


</article>

<form method="post" action="19/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>