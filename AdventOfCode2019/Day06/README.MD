<article class="day-desc"><h2>--- Day 6: Universal Orbit Map ---</h2><p>You've landed at the Universal Orbit Map facility on Mercury.  Because navigation in space often involves transferring between orbits, the orbit maps here are useful for finding efficient routes between, for example, you and Santa. You download a map of the local orbits (your puzzle input).</p>
<p>Except for the universal Center of Mass (<code>COM</code>), every object in space is in orbit around <span title="What do you mean, Kerbal Space Program doesn't have accurate orbital physics?">exactly one other object</span>.  An <a href="https://en.wikipedia.org/wiki/Orbit">orbit</a> looks roughly like this:</p>
<pre><code>                  \
                   \
                    |
                    |
AAA--&gt; o            o &lt;--BBB
                    |
                    |
                   /
                  /
</code></pre>
<p>In this diagram, the object <code>BBB</code> is in orbit around <code>AAA</code>. The path that <code>BBB</code> takes around <code>AAA</code> (drawn with lines) is only partly shown. In the map data, this orbital relationship is written <code>AAA)BBB</code>, which means "<code>BBB</code> is in orbit around <code>AAA</code>".</p>
<p>Before you use your map data to plot a course, you need to make sure it wasn't corrupted during the download.  To verify maps, the Universal Orbit Map facility uses <b>orbit count checksums</b> - the total number of <b>direct orbits</b> (like the one shown above) and <b>indirect orbits</b>.</p>
	<p>Whenever <code>A</code> orbits <code>B</code> and <code>B</code> orbits <code>C</code>, then <code>A</code> <b>indirectly orbits</b> <code>C</code>.  This chain can be any number of objects long: if <code>A</code> orbits <code>B</code>, <code>B</code> orbits <code>C</code>, and <code>C</code> orbits <code>D</code>, then <code>A</code> indirectly orbits <code>D</code>.
</p><p>For example, suppose you have the following map:</p>
<pre><code>COM)B
B)C
C)D
D)E
E)F
B)G
G)H
D)I
E)J
J)K
K)L
</code></pre>
<p>Visually, the above map of orbits looks like this:</p>
<pre><code>        G - H       J - K - L
       /           /
COM - B - C - D - E - F
               \
                I
</code></pre>
<p>In this visual representation, when two objects are connected by a line, the one on the right directly orbits the one on the left.</p>
<p>Here, we can count the total number of orbits as follows:</p>
<ul>
<li><code>D</code> directly orbits <code>C</code> and indirectly orbits <code>B</code> and <code>COM</code>, a total of <code>3</code> orbits.</li>
<li><code>L</code> directly orbits <code>K</code> and indirectly orbits <code>J</code>, <code>E</code>, <code>D</code>, <code>C</code>, <code>B</code>, and <code>COM</code>, a total of <code>7</code> orbits.</li>
<li><code>COM</code> orbits nothing.</li>
</ul>


</article>

<form method="post" action="6/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>