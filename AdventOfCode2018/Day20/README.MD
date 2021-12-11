<article class="day-desc"><h2>--- Day 20: A Regular Map ---</h2><p>While you were learning about instruction pointers, the Elves made considerable progress. When you look up, you discover that the North Pole base construction project has completely surrounded you.</p>
<p>The area you are in is made up entirely of <b>rooms</b> and <b>doors</b>. The rooms are arranged in a grid, and rooms only connect to adjacent rooms when a door is present between them.</p>
<p>For example, drawing rooms as <code>.</code>, walls as <code>#</code>, doors as <code>|</code> or <code>-</code>, your current position as <code>X</code>, and where north is up, the area you're in might look like this:</p>
<pre><code>#####
#.|.#
#-###
#.|X#
#####
</code></pre>
<p>You get the attention of a passing construction Elf and ask for a map. "I don't have time to draw out a map of this place - it's <b>huge</b>. Instead, I can give you directions to <b>every room in the facility</b>!" He writes down some directions on a piece of parchment and runs off. In the example above, the instructions might have been <code>^WNE$</code>, a <a href="https://en.wikipedia.org/wiki/Regular_expression">regular expression</a> or "<b>regex</b>" (your puzzle input).</p>
<p>The regex matches routes (like <code>WNE</code> for "west, north, east") that will take you from your current room through various doors in the facility. In aggregate, the routes will take you through <b>every door in the facility at least once</b>; mapping out all of these routes will let you build a proper map and find your way around.</p>
<p><code>^</code> and <code>$</code> are at the beginning and end of your regex; these just mean that the regex doesn't match anything outside the routes it describes. (Specifically, <code>^</code> matches the start of the route, and <code>$</code> matches the end of it.) These characters will not appear elsewhere in the regex.</p>
<p>The rest of the regex matches various sequences of the characters <code>N</code> (north), <code>S</code> (south), <code>E</code> (east), and <code>W</code> (west). In the example above, <code>^WNE$</code> matches only one route, <code>WNE</code>, which means you can move <b>west, then north, then east</b> from your current position. Sequences of letters like this always match that exact route in the same order.</p>
<p>Sometimes, the route can <b>branch</b>. A branch is given by a <b>list of options</b> separated by pipes (<code>|</code>) and wrapped in parentheses. So, <code>^N(E|W)N$</code> contains a branch: after going north, you must choose to go <b>either east or west</b> before finishing your route by going north again. By tracing out the possible routes after branching, you can determine where the doors are and, therefore, where the rooms are in the facility.</p>
<p>For example, consider this regex: <code>^ENWWW(NEEE|SSE(EE|N))$</code></p>
<p>This regex begins with <code>ENWWW</code>, which means that from your current position, all routes must begin by moving east, north, and then west three times, in that order. After this, there is a branch.  Before you consider the branch, this is what you know about the map so far, with doors you aren't sure about marked with a <code>?</code>:</p>
<pre><code>#?#?#?#?#
?.|.|.|.?
#?#?#?#-#
    ?X|.?
    #?#?#
</code></pre>
<p>After this point, there is <code>(NEEE|SSE(EE|N))</code>. This gives you exactly two options: <code>NEEE</code> and <code>SSE(EE|N)</code>. By following <code>NEEE</code>, the map now looks like this:</p>
<pre><code>#?#?#?#?#
?.|.|.|.?
#-#?#?#?#
?.|.|.|.?
#?#?#?#-#
    ?X|.?
    #?#?#
</code></pre>
<p>Now, only <code>SSE(EE|N)</code> remains. Because it is in the same parenthesized group as <code>NEEE</code>, it starts from the same room <code>NEEE</code> started in. It states that starting from that point, there exist doors which will allow you to move south twice, then east; this ends up at another branch. After that, you can either move east twice or north once. This information fills in the rest of the doors:</p>
<pre><code>#?#?#?#?#
?.|.|.|.?
#-#?#?#?#
?.|.|.|.?
#-#?#?#-#
?.?.?X|.?
#-#-#?#?#
?.|.|.|.?
#?#?#?#?#
</code></pre>
<p>Once you've followed all possible routes, you know the remaining unknown parts are all walls, producing a finished map of the facility:</p>
<pre><code>#########
#.|.|.|.#
#-#######
#.|.|.|.#
#-#####-#
#.#.#X|.#
#-#-#####
#.|.|.|.#
#########
</code></pre>
<p>Sometimes, a list of options can have an <b>empty option</b>, like <code>(NEWS|WNSE|)</code>. This means that routes at this point could effectively skip the options in parentheses and move on immediately.  For example, consider this regex and the corresponding map:</p>
<pre><code>^ENNWSWW(NEWS|)SSSEEN(WNSE|)EE(SWEN|)NNN$

###########
#.|.#.|.#.#
#-###-#-#-#
#.|.|.#.#.#
#-#####-#-#
#.#.#X|.#.#
#-#-#####-#
#.#.|.|.|.#
#-###-###-#
#.|.|.#.|.#
###########
</code></pre>
<p>This regex has one main route which, at three locations, can optionally include additional detours and be valid: <code>(NEWS|)</code>, <code>(WNSE|)</code>, and <code>(SWEN|)</code>. Regardless of which option is taken, the route continues from the position it is left at after taking those steps. So, for example, this regex matches all of the following routes (and more that aren't listed here):</p>
<ul>
<li><code>ENNWSWWSSSEENEENNN</code></li>
<li><code>ENNWSWW<b>NEWS</b>SSSEENEENNN</code></li>
<li><code>ENNWSWW<b>NEWS</b>SSSEENEE<b>SWEN</b>NNN</code></li>
<li><code>ENNWSWWSSSEEN<b>WNSE</b>EENNN</code></li>
</ul>
<p>By following the various routes the regex matches, a full map of all of the doors and rooms in the facility can be assembled.</p>
<p>To get a sense for the size of this facility, you'd like to determine which room is <b>furthest</b> from you: specifically, you would like to find the room for which the <b>shortest path to that room would require passing through the most doors</b>.</p>
<ul>
<li>In the first example (<code>^WNE$</code>), this would be the north-east corner <code><b>3</b></code> doors away.</li>
<li>In the second example (<code>^ENWWW(NEEE|SSE(EE|N))$</code>), this would be the south-east corner <code><b>10</b></code> doors away.</li>
<li>In the third example (<code>^ENNWSWW(NEWS|)SSSEEN(WNSE|)EE(SWEN|)NNN$</code>), this would be the north-east corner <code><b>18</b></code> doors away.</li>
</ul>
<p>Here are a few more examples:</p>
<pre><code>Regex: ^ESSWWN(E|NNENN(EESS(WNSE|)SSS|WWWSSSSE(SW|NNNE)))$
Furthest room requires passing 23 doors

#############
#.|.|.|.|.|.#
#-#####-###-#
#.#.|.#.#.#.#
#-#-###-#-#-#
#.#.#.|.#.|.#
#-#-#-#####-#
#.#.#.#X|.#.#
#-#-#-###-#-#
#.|.#.|.#.#.#
###-#-###-#-#
#.|.#.|.|.#.#
#############
</code></pre>
<pre><code>Regex: ^WSSEESWWWNW(S|NENNEEEENN(ESSSSW(NWSW|SSEN)|WSWWN(E|WWS(E|SS))))$
Furthest room requires passing 31 doors

###############
#.|.|.|.#.|.|.#
#-###-###-#-#-#
#.|.#.|.|.#.#.#
#-#########-#-#
#.#.|.|.|.|.#.#
#-#-#########-#
#.#.#.|X#.|.#.#
###-#-###-#-#-#
#.|.#.#.|.#.|.#
#-###-#####-###
#.|.#.|.|.#.#.#
#-#-#####-#-#-#
#.#.|.|.|.#.|.#
###############
</code></pre>

</article>

<form method="post" action="20/answer"><input type="hidden" name="level" value="1"></form>