<article class="day-desc"><h2>--- Day 22: Mode Maze ---</h2><p>This is it, your final stop: the year <span title="Yes, really: there is no year zero.">-483</span>. It's snowing and dark outside; the only light you can see is coming from a small cottage in the distance. You make your way there and knock on the door.</p>
<p>A portly man with a large, white beard answers the door and invites you inside. For someone living near the North Pole in -483, he must not get many visitors, but he doesn't act surprised to see you. Instead, he offers you some milk and cookies.</p>
<p>After talking for a while, he asks a favor of you. His friend hasn't come back in a few hours, and he's not sure where he is.  Scanning the region briefly, you discover one life signal in a cave system nearby; his friend must have taken shelter there.  The man asks if you can go there to retrieve his friend.</p>
<p>The cave is divided into square <b>regions</b> which are either dominantly <b>rocky</b>, <b>narrow</b>, or <b>wet</b> (called its <b>type</b>). Each region occupies exactly one <b>coordinate</b> in <code>X,Y</code> format where <code>X</code> and <code>Y</code> are integers and zero or greater. (Adjacent regions can be the same type.)</p>
<p>The scan (your puzzle input) is not very detailed: it only reveals the <b>depth</b> of the cave system and the <b>coordinates of the target</b>. However, it does not reveal the type of each region. The mouth of the cave is at <code>0,0</code>.</p>
<p>The man explains that due to the unusual geology in the area, there is a method to determine any region's type based on its <b>erosion level</b>. The erosion level of a region can be determined from its <b>geologic index</b>. The geologic index can be determined using the first rule that applies from the list below:</p>
<ul>
<li>The region at <code>0,0</code> (the mouth of the cave) has a geologic index of <code>0</code>.</li>
<li>The region at the coordinates of the target has a geologic index of <code>0</code>.</li>
<li>If the region's <code>Y</code> coordinate is <code>0</code>, the geologic index is its <code>X</code> coordinate times <code>16807</code>.</li>
<li>If the region's <code>X</code> coordinate is <code>0</code>, the geologic index is its <code>Y</code> coordinate times <code>48271</code>.</li>
<li>Otherwise, the region's geologic index is the result of multiplying the erosion <b>levels</b> of the regions at <code>X-1,Y</code> and <code>X,Y-1</code>.</li>
</ul>
<p>A region's <b>erosion level</b> is its <b>geologic index</b> plus the cave system's <b>depth</b>, all <a href="https://en.wikipedia.org/wiki/Modulo_operation">modulo</a> <code>20183</code>. Then:</p>
<ul>
<li>If the <b>erosion level modulo <code>3</code></b> is <code>0</code>, the region's type is <b>rocky</b>.</li>
<li>If the <b>erosion level modulo <code>3</code></b> is <code>1</code>, the region's type is <b>wet</b>.</li>
<li>If the <b>erosion level modulo <code>3</code></b> is <code>2</code>, the region's type is <b>narrow</b>.</li>
</ul>
<p>For example, suppose the cave system's depth is <code>510</code> and the target's coordinates are <code>10,10</code>. Using <code>%</code> to represent the modulo operator, the cavern would look as follows:</p>
<ul>
<li>At <code>0,0</code>, the geologic index is <code>0</code>. The erosion level is <code>(0 + 510) % 20183 = 510</code>. The type is <code>510 % 3 = 0</code>, <b>rocky</b>.</li>
<li>At <code>1,0</code>, because the <code>Y</code> coordinate is <code>0</code>, the geologic index is <code>1 * 16807 = 16807</code>. The erosion level is <code>(16807 + 510) % 20183 = 17317</code>. The type is <code>17317 % 3 = 1</code>, <b>wet</b>.</li> 
<li>At <code>0,1</code>, because the <code>X</code> coordinate is <code>0</code>, the geologic index is <code> 1 * 48271 = 48271</code>. The erosion level is <code>(48271 + 510) % 20183 = 8415</code>. The type is <code>8415 % 3 = 0</code>, <b>rocky</b>.</li>
<li>At <code>1,1</code>, neither coordinate is <code>0</code> and it is not the coordinate of the target, so the geologic index is the erosion level of <code>0,1</code> (<code>8415</code>) times the erosion level of <code>1,0</code> (<code>17317</code>), <code>8415 * 17317 = 145722555</code>. The erosion level is <code>(145722555 + 510) % 20183 = 1805</code>. The type is <code>1805 % 3 = 2</code>, <b>narrow</b>.</li>
<li>At <code>10,10</code>, because they are the target's coordinates, the geologic index is <code>0</code>. The erosion level is <code>(0 + 510) % 20183 = 510</code>. The type is <code>510 % 3 = 0</code>, <b>rocky</b>.</li>
</ul>
<p>Drawing this same cave system with rocky as <code>.</code>, wet as <code>=</code>, narrow as <code>|</code>, the mouth as <code>M</code>, the target as <code>T</code>, with <code>0,0</code> in the top-left corner, <code>X</code> increasing to the right, and <code>Y</code> increasing downward, the top-left corner of the map looks like this:</p>
<pre><code><b>M</b>=.|=.|.|=.|=|=.
.|=|=|||..|.=...
.==|....||=..|==
=.|....|.==.|==.
=|..==...=.|==..
=||.=.=||=|=..|=
|.=.===|||..=..|
|..==||=.|==|===
.=..===..=|.|||.
.======|||=|=.|=
.===|=|===<b>T</b>===||
=|||...|==..|=.|
=.=|=.=..=.||==|
||=|=...|==.=|==
|=.=||===.|||===
||.|==.|.|.||=||
</code></pre>



</article>

<form method="post" action="22/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>