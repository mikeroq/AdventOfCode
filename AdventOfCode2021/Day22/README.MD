<article class="day-desc"><h2>--- Day 22: Reactor Reboot ---</h2><p>Operating at these extreme ocean depths has overloaded the submarine's reactor; it needs to be rebooted.</p>
<p>The reactor core is made up of a large 3-dimensional grid made up entirely of cubes, one cube per integer 3-dimensional coordinate (<code>x,y,z</code>). Each cube can be either <b>on</b> or <b>off</b>; at the start of the reboot process, they are all <b>off</b>. (Could it be an old model of a reactor you've seen <a href="/2020/day/17">before</a>?)</p>
<p>To reboot the reactor, you just need to set all of the cubes to either <b>on</b> or <b>off</b> by following a list of <b>reboot steps</b> (your puzzle input). Each step specifies a <a href="https://en.wikipedia.org/wiki/Cuboid" target="_blank">cuboid</a> (the set of all cubes that have coordinates which fall within ranges for <code>x</code>, <code>y</code>, and <code>z</code>) and whether to turn all of the cubes in that cuboid <b>on</b> or <b>off</b>.</p>
<p>For example, given these reboot steps:</p>
<pre><code>on x=10..12,y=10..12,z=10..12
on x=11..13,y=11..13,z=11..13
off x=9..11,y=9..11,z=9..11
on x=10..10,y=10..10,z=10..10
</code></pre>
<p>The first step (<code>on x=10..12,y=10..12,z=10..12</code>) turns <b>on</b> a 3x3x3 cuboid consisting of 27 cubes:</p>
<ul>
<li><code>10,10,10</code></li>
<li><code>10,10,11</code></li>
<li><code>10,10,12</code></li>
<li><code>10,11,10</code></li>
<li><code>10,11,11</code></li>
<li><code>10,11,12</code></li>
<li><code>10,12,10</code></li>
<li><code>10,12,11</code></li>
<li><code>10,12,12</code></li>
<li><code>11,10,10</code></li>
<li><code>11,10,11</code></li>
<li><code>11,10,12</code></li>
<li><code>11,11,10</code></li>
<li><code>11,11,11</code></li>
<li><code>11,11,12</code></li>
<li><code>11,12,10</code></li>
<li><code>11,12,11</code></li>
<li><code>11,12,12</code></li>
<li><code>12,10,10</code></li>
<li><code>12,10,11</code></li>
<li><code>12,10,12</code></li>
<li><code>12,11,10</code></li>
<li><code>12,11,11</code></li>
<li><code>12,11,12</code></li>
<li><code>12,12,10</code></li>
<li><code>12,12,11</code></li>
<li><code>12,12,12</code></li>
</ul>
<p>The second step (<code>on x=11..13,y=11..13,z=11..13</code>) turns <b>on</b> a 3x3x3 cuboid that overlaps with the first. As a result, only 19 additional cubes turn on; the rest are already on from the previous step:</p>
<ul>
<li><code>11,11,13</code></li>
<li><code>11,12,13</code></li>
<li><code>11,13,11</code></li>
<li><code>11,13,12</code></li>
<li><code>11,13,13</code></li>
<li><code>12,11,13</code></li>
<li><code>12,12,13</code></li>
<li><code>12,13,11</code></li>
<li><code>12,13,12</code></li>
<li><code>12,13,13</code></li>
<li><code>13,11,11</code></li>
<li><code>13,11,12</code></li>
<li><code>13,11,13</code></li>
<li><code>13,12,11</code></li>
<li><code>13,12,12</code></li>
<li><code>13,12,13</code></li>
<li><code>13,13,11</code></li>
<li><code>13,13,12</code></li>
<li><code>13,13,13</code></li>
</ul>
<p>The third step (<code>off x=9..11,y=9..11,z=9..11</code>) turns <b>off</b> a 3x3x3 cuboid that overlaps partially with some cubes that are on, ultimately turning off 8 cubes:</p>
<ul>
<li><code>10,10,10</code></li>
<li><code>10,10,11</code></li>
<li><code>10,11,10</code></li>
<li><code>10,11,11</code></li>
<li><code>11,10,10</code></li>
<li><code>11,10,11</code></li>
<li><code>11,11,10</code></li>
<li><code>11,11,11</code></li>
</ul>
<p>The final step (<code>on x=10..10,y=10..10,z=10..10</code>) turns <b>on</b> a single cube, <code>10,10,10</code>. After this last step, <code><b>39</b></code> cubes are <b>on</b>.</p>
<p>The initialization procedure only uses cubes that have <code>x</code>, <code>y</code>, and <code>z</code> positions of at least <code>-50</code> and at most <code>50</code>. For now, ignore cubes outside this region.</p>
<p>Here is a larger example:</p>
<pre><code>on x=-20..26,y=-36..17,z=-47..7
on x=-20..33,y=-21..23,z=-26..28
on x=-22..28,y=-29..23,z=-38..16
on x=-46..7,y=-6..46,z=-50..-1
on x=-49..1,y=-3..46,z=-24..28
on x=2..47,y=-22..22,z=-23..27
on x=-27..23,y=-28..26,z=-21..29
on x=-39..5,y=-6..47,z=-3..44
on x=-30..21,y=-8..43,z=-13..34
on x=-22..26,y=-27..20,z=-29..19
off x=-48..-32,y=26..41,z=-47..-37
on x=-12..35,y=6..50,z=-50..-2
off x=-48..-32,y=-32..-16,z=-15..-5
on x=-18..26,y=-33..15,z=-7..46
off x=-40..-22,y=-38..-28,z=23..41
on x=-16..35,y=-41..10,z=-47..6
off x=-32..-23,y=11..30,z=-14..3
on x=-49..-5,y=-3..45,z=-29..18
off x=18..30,y=-20..-8,z=-3..13
on x=-41..9,y=-7..43,z=-33..15
on x=-54112..-39298,y=-85059..-49293,z=-27449..7877
on x=967..23432,y=45373..81175,z=27513..53682
</code></pre>


</article>

<form method="post" action="22/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>