<article class="day-desc"><h2>--- Day 15: Oxygen System ---</h2><p>Out here in deep space, many things can go wrong. Fortunately, many of those things have <span title="Which indicator lights indicate when the indicator lights have failed?">indicator lights</span>. Unfortunately, one of those lights is lit: the oxygen system for part of the ship has failed!</p>
<p>According to the readouts, the oxygen system must have failed days ago after a rupture in oxygen tank two; that section of the ship was automatically sealed once oxygen levels went dangerously low. A single remotely-operated <b>repair droid</b> is your only option for fixing the oxygen system.</p>
<p>The Elves' care package included an <a href="9">Intcode</a> program (your puzzle input) that you can use to remotely control the repair droid. By running that program, you can direct the repair droid to the oxygen system and fix the problem.</p>
<p>The remote control program executes the following steps in a loop forever:</p>
<ul>
<li>Accept a <b>movement command</b> via an input instruction.</li>
<li>Send the movement command to the repair droid.</li>
<li>Wait for the repair droid to finish the movement operation.</li>
<li>Report on the <b>status</b> of the repair droid via an output instruction.</li>
</ul>
<p>Only four <b>movement commands</b> are understood: north (<code>1</code>), south (<code>2</code>), west (<code>3</code>), and east (<code>4</code>). Any other command is invalid. The movements differ in direction, but not in distance: in a long enough east-west hallway, a series of commands like <code>4,4,4,4,3,3,3,3</code> would leave the repair droid back where it started.</p>
<p>The repair droid can reply with any of the following <b>status</b> codes:</p>
<ul>
<li><code>0</code>: The repair droid hit a wall. Its position has not changed.</li>
<li><code>1</code>: The repair droid has moved one step in the requested direction.</li>
<li><code>2</code>: The repair droid has moved one step in the requested direction; its new position is the location of the oxygen system.</li>
</ul>
<p>You don't know anything about the area around the repair droid, but you can figure it out by watching the status codes.</p>
<p>For example, we can draw the area using <code>D</code> for the droid, <code>#</code> for walls, <code>.</code> for locations the droid can traverse, and empty space for unexplored locations.  Then, the initial state looks like this:</p>
<pre><code>      
      
   D  
      
      
</code></pre>
<p>To make the droid go north, send it <code>1</code>. If it replies with <code>0</code>, you know that location is a wall and that the droid didn't move:</p>
<pre><code>      
   #  
   D  
      
      
</code></pre>
<p>To move east, send <code>4</code>; a reply of <code>1</code> means the movement was successful:</p>
<pre><code>      
   #  
   .D 
      
      
</code></pre>
<p>Then, perhaps attempts to move north (<code>1</code>), south (<code>2</code>), and east (<code>4</code>) are all met with replies of <code>0</code>:</p>
<pre><code>      
   ## 
   .D#
    # 
      
</code></pre>
<p>Now, you know the repair droid is in a dead end. Backtrack with <code>3</code> (which you already know will get a reply of <code>1</code> because you already know that location is open):</p>
<pre><code>      
   ## 
   D.#
    # 
      
</code></pre>
<p>Then, perhaps west (<code>3</code>) gets a reply of <code>0</code>, south (<code>2</code>) gets a reply of <code>1</code>, south again (<code>2</code>) gets a reply of <code>0</code>, and then west (<code>3</code>) gets a reply of <code>2</code>:</p>
<pre><code>      
   ## 
  #..#
  D.# 
   #  
</code></pre>


</article>

<form method="post" action="15/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>