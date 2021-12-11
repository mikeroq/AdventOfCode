<article class="day-desc"><h2>--- Day 17: Two Steps Forward ---</h2><p>You're trying to access a secure vault protected by a <code>4x4</code> grid of small rooms connected by doors. You start in the top-left room (marked <code>S</code>), and you can access the vault (marked <code>V</code>) once you reach the bottom-right room:</p>
<pre><code>#########
#S| | | #
#-#-#-#-#
# | | | #
#-#-#-#-#
# | | | #
#-#-#-#-#
# | | |  
####### V
</code></pre>
<p>Fixed walls are marked with <code>#</code>, and doors are marked with <code>-</code> or <code>|</code>.</p>
<p>The doors in your <b>current room</b> are either open or closed (and locked) based on the hexadecimal <a href="https://en.wikipedia.org/wiki/MD5">MD5</a> hash of a passcode (your puzzle input) followed by a sequence of uppercase characters representing the <b>path you have taken so far</b> (<code>U</code> for up, <code>D</code> for down, <code>L</code> for left, and <code>R</code> for right).</p>
<p>Only the first four characters of the hash are used; they represent, respectively, the doors <b>up, down, left, and right</b> from your current position. Any <code>b</code>, <code>c</code>, <code>d</code>, <code>e</code>, or <code>f</code> means that the corresponding door is <b>open</b>; any other character (any number or <code>a</code>) means that the corresponding door is <b>closed and locked</b>.</p>
<p>To access the vault, all you need to do is reach the bottom-right room; reaching this room opens the vault and all doors in the maze.</p>
<p>For example, suppose the passcode is <code>hijkl</code>. Initially, you have taken no steps, and so your path is empty: you simply find the MD5 hash of <code>hijkl</code> alone. The first four characters of this hash are <code>ced9</code>, which indicate that up is open (<code>c</code>), down is open (<code>e</code>), left is open (<code>d</code>), and right is closed and locked (<code>9</code>). Because you start in the top-left corner, there are no "up" or "left" doors to be open, so your only choice is <b>down</b>.</p>
<p>Next, having gone only one step (down, or <code>D</code>), you find the hash of <code>hijkl<b>D</b></code>. This produces <code>f2bc</code>, which indicates that you can go back up, left (but that's a wall), or right. Going right means hashing <code>hijkl<b>DR</b></code> to get <code>5745</code> - all doors closed and locked. However, going <b>up</b> instead is worthwhile: even though it returns you to the room you started in, your path would then be <code>DU</code>, opening a <b>different set of doors</b>.</p>
<p>After going <code>DU</code> (and then hashing <code>hijkl<b>DU</b></code> to get <code>528e</code>), only the right door is open; after going <code>DUR</code>, all doors lock. (Fortunately, your actual passcode is <span title="It took four days to rescue the engineer that tried this.">not <code>hijkl</code></span>).</p>

<ul>
<li>If your passcode were <code>ihgpwlah</code>, the shortest path would be <code>DDRRRD</code>.</li>
<li>With <code>kglvqrro</code>, the shortest path would be <code>DDUDRLRRUDRD</code>.</li>
<li>With <code>ulqzkmiv</code>, the shortest would be <code>DRURDRUDDLLDLUURRDULRLDUUDDDRR</code>.</li>
</ul>

</article>

<form method="post" action="17/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>