<article class="day-desc"><h2>--- Day 13: Mine Cart Madness ---</h2><p>A crop of this size requires significant logistics to transport produce, soil, fertilizer, and so on. The Elves are very busy pushing things around in <b>carts</b> on some kind of rudimentary system of tracks they've come up with.</p>
<p>Seeing as how cart-and-track systems don't appear in recorded history for <span title="Time anomalies! How do they work?!">another 1000 years</span>, the Elves seem to be making this up as they go along. They haven't even figured out how to avoid collisions yet.</p>
<p>You map out the tracks (your puzzle input) and see where you can help.</p>
<p>Tracks consist of straight paths (<code>|</code> and <code>-</code>), curves (<code>/</code> and <code>\</code>), and intersections (<code>+</code>). Curves connect exactly two perpendicular pieces of track; for example, this is a closed loop:</p>
<pre><code>/----\
|    |
|    |
\----/
</code></pre>
<p>Intersections occur when two perpendicular paths cross. At an intersection, a cart is capable of turning left, turning right, or continuing straight.  Here are two loops connected by two intersections:</p>
<pre><code>/-----\
|     |
|  /--+--\
|  |  |  |
\--+--/  |
   |     |
   \-----/
</code></pre>
<p>Several <b>carts</b> are also on the tracks. Carts always face either up (<code>^</code>), down (<code>v</code>), left (<code>&lt;</code>), or right (<code>&gt;</code>). (On your initial map, the track under each cart is a straight path matching the direction the cart is facing.)</p>
<p>Each time a cart has the option to turn (by arriving at any intersection), it turns <b>left</b> the first time, goes <b>straight</b> the second time, turns <b>right</b> the third time, and then repeats those directions starting again with <b>left</b> the fourth time, <b>straight</b> the fifth time, and so on. This process is independent of the particular intersection at which the cart has arrived - that is, the cart has no per-intersection memory.</p>
<p>Carts all move at the same speed; they take turns moving a single step at a time. They do this based on their <b>current location</b>: carts on the top row move first (acting from left to right), then carts on the second row move (again from left to right), then carts on the third row, and so on.  Once each cart has moved one step, the process repeats; each of these loops is called a <b>tick</b>.</p>
<p>For example, suppose there are two carts on a straight track:</p>
<pre><code>|  |  |  |  |
v  |  |  |  |
|  v  v  |  |
|  |  |  v  X
|  |  ^  ^  |
^  ^  |  |  |
|  |  |  |  |
</code></pre>
<p>First, the top cart moves. It is facing down (<code>v</code>), so it moves down one square.  Second, the bottom cart moves.  It is facing up (<code>^</code>), so it moves up one square. Because all carts have moved, the first tick ends.  Then, the process repeats, starting with the first cart.  The first cart moves down, then the second cart moves up - right into the first cart, colliding with it! (The location of the crash is marked with an <code>X</code>.) This ends the second and last tick.</p><p>
</p><p>Here is a longer example:</p>
<pre><code>/-&gt;-\        
|   |  /----\
| /-+--+-\  |
| | |  | v  |
\-+-/  \-+--/
  \------/   

/--&gt;\        
|   |  /----\
| /-+--+-\  |
| | |  | |  |
\-+-/  \-&gt;--/
  \------/   

/---v        
|   |  /----\
| /-+--+-\  |
| | |  | |  |
\-+-/  \-+&gt;-/
  \------/   

/---\        
|   v  /----\
| /-+--+-\  |
| | |  | |  |
\-+-/  \-+-&gt;/
  \------/   

/---\        
|   |  /----\
| /-&gt;--+-\  |
| | |  | |  |
\-+-/  \-+--^
  \------/   

/---\        
|   |  /----\
| /-+&gt;-+-\  |
| | |  | |  ^
\-+-/  \-+--/
  \------/   

/---\        
|   |  /----\
| /-+-&gt;+-\  ^
| | |  | |  |
\-+-/  \-+--/
  \------/   

/---\        
|   |  /----&lt;
| /-+--&gt;-\  |
| | |  | |  |
\-+-/  \-+--/
  \------/   

/---\        
|   |  /---&lt;\
| /-+--+&gt;\  |
| | |  | |  |
\-+-/  \-+--/
  \------/   

/---\        
|   |  /--&lt;-\
| /-+--+-v  |
| | |  | |  |
\-+-/  \-+--/
  \------/   

/---\        
|   |  /-&lt;--\
| /-+--+-\  |
| | |  | v  |
\-+-/  \-+--/
  \------/   

/---\        
|   |  /&lt;---\
| /-+--+-\  |
| | |  | |  |
\-+-/  \-&lt;--/
  \------/   

/---\        
|   |  v----\
| /-+--+-\  |
| | |  | |  |
\-+-/  \&lt;+--/
  \------/   

/---\        
|   |  /----\
| /-+--v-\  |
| | |  | |  |
\-+-/  ^-+--/
  \------/   

/---\        
|   |  /----\
| /-+--+-\  |
| | |  X |  |
\-+-/  \-+--/
  \------/   
</code></pre>

<pre><code>           111
 0123456789012
0/---\        
1|   |  /----\
2| /-+--+-\  |
3| | |  X |  |
4\-+-/  \-+--/
5  \------/   
</code></pre>

</article>

<form method="post" action="13/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>