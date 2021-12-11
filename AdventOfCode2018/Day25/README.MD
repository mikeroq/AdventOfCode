<article class="day-desc"><h2>--- Day 25: Four-Dimensional Adventure ---</h2><p>The reindeer's symptoms are getting worse, and neither you nor the white-bearded man have a solution. At least the reindeer has a warm place to rest: a small bed near where you're sitting.</p>
<p>As you reach down, the reindeer looks up at you, <span title="It was not an accident.">accidentally</span> bumping a button on your wrist-mounted device with its nose in the process - a button labeled <b>"help"</b>.</p>
<p>"Hello, and welcome to the Time Travel Support Hotline! If you are lost in time and space, press 1. If you are trapped in a time paradox, press 2. If you need help caring for a sick reindeer, press 3. If you--"</p>
<p><b>Beep.</b></p>
<p>A few seconds later, you hear a new voice. "Hello; please state the nature of your reindeer." You try to describe the situation.</p>
<p>"Just a moment, I think I can remotely run a diagnostic scan." A beam of light projects from the device and sweeps over the reindeer a few times.</p>
<p>"Okay, it looks like your reindeer is very low on magical energy; it should fully recover if we can fix that.  Let me check your timeline for a source.... Got one. There's actually a powerful source of magical energy about 1000 years forward from you, and at roughly your position, too!  It looks like... hot chocolate?  Anyway, you should be able to travel there to pick some up; just don't forget a mug!  Is there anything else I can help you with today?"</p>
<p>You explain that your device isn't capable of going forward in time.  "I... see. That's tricky. Well, according to this information, your device should have the necessary hardware to open a small portal and send some hot chocolate back to you. You'll need a list of <b>fixed points in spacetime</b>; I'm transmitting it to you now."</p>
<p>"You just need to align your device to the constellations of fixed points so that it can lock on to the destination and open the portal. Let me look up how much hot chocolate that breed of reindeer needs."</p>
<p>"It says here that your particular reindeer is-- this can't be right, it says there's only one like that in the universe!  But THAT means that you're--" You disconnect the call.</p>
<p>The list of fixed points in spacetime (your puzzle input) is a set of four-dimensional coordinates. To align your device, acquire the hot chocolate, and save the reindeer, you just need to find the <b>number of constellations</b> of points in the list.</p>
<p>Two points are in the same <b>constellation</b> if their manhattan distance apart is <b>no more than 3</b> or if they can form a chain of points, each a manhattan distance no more than 3 from the last, between the two of them. (That is, if a point is close enough to a constellation, it "joins" that constellation.) For example:</p>
<pre><code> 0,0,0,0
 3,0,0,0
 0,3,0,0
 0,0,3,0
 0,0,0,3
 0,0,0,6
 9,0,0,0
12,0,0,0
</code></pre>
<p>In the above list, the first six points form a single constellation: <code>0,0,0,0</code> is exactly distance <code>3</code> from the next four, and the point at <code>0,0,0,6</code> is connected to the others by being <code>3</code> away from <code>0,0,0,3</code>, which is already in the constellation. The bottom two points, <code>9,0,0,0</code> and <code>12,0,0,0</code> are in a separate constellation because no point is close enough to connect them to the first constellation.  So, in the above list, the number of constellations is <code><b>2</b></code>.  (If a point at <code>6,0,0,0</code> were present, it would connect <code>3,0,0,0</code> and <code>9,0,0,0</code>, merging all of the points into a single giant constellation instead.)</p>
<p>In this example, the number of constellations is <code>4</code>:</p>
<pre><code>-1,2,2,0
0,0,2,-2
0,0,0,-2
-1,2,0,0
-2,-2,-2,2
3,0,2,-1
-1,3,2,2
-1,0,-1,0
0,2,1,-2
3,0,0,0
</code></pre>
<p>In this one, it's <code>3</code>:</p>
<pre><code>1,-1,0,1
2,0,-1,0
3,2,-1,0
0,0,3,1
0,0,-1,-1
2,3,-2,0
-2,2,0,0
2,-2,0,-1
1,-1,0,-1
3,2,0,2
</code></pre>
<p>Finally, in this one, it's <code>8</code>:</p>
<pre><code>1,-1,-1,-2
-2,-2,0,1
0,2,1,3
-2,3,-2,1
0,2,3,-2
-1,-1,1,-2
0,-2,-1,0
-2,2,3,-1
1,2,2,0
-1,-2,0,-2
</code></pre>


</article>

<form method="post" action="25/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>