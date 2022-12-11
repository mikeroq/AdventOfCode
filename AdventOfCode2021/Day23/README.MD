<article class="day-desc"><h2>--- Day 23: Amphipod ---</h2><p>A group of <a href="https://en.wikipedia.org/wiki/Amphipoda" target="_blank">amphipods</a> notice your fancy submarine and flag you down. "With such an impressive shell," one amphipod <span title="What? You didn't know amphipods can talk?">says</span>, "surely you can help us with a question that has stumped our best scientists."</p>
<p>They go on to explain that a group of timid, stubborn amphipods live in a nearby burrow. Four types of amphipods live there: <b>Amber</b> (<code>A</code>), <b>Bronze</b> (<code>B</code>), <b>Copper</b> (<code>C</code>), and <b>Desert</b> (<code>D</code>). They live in a burrow that consists of a <b>hallway</b> and four <b>side rooms</b>. The side rooms are initially full of amphipods, and the hallway is initially empty.</p>
<p>They give you a <b>diagram of the situation</b> (your puzzle input), including locations of each amphipod (<code>A</code>, <code>B</code>, <code>C</code>, or <code>D</code>, each of which is occupying an otherwise open space), walls (<code>#</code>), and open space (<code>.</code>).</p>
<p>For example:</p>
<pre><code>#############
#...........#
###B#C#B#D###
  #A#D#C#A#
  #########
</code></pre>
<p>The amphipods would like a method to organize every amphipod into side rooms so that each side room contains one type of amphipod and the types are sorted <code>A</code>-<code>D</code> going left to right, like this:</p>
<pre><code>#############
#...........#
###A#B#C#D###
  #A#B#C#D#
  #########
</code></pre>
<p>Amphipods can move up, down, left, or right so long as they are moving into an unoccupied open space. Each type of amphipod requires a different amount of <b>energy</b> to move one step: Amber amphipods require <code>1</code> energy per step, Bronze amphipods require <code>10</code> energy, Copper amphipods require <code>100</code>, and Desert ones require <code>1000</code>. The amphipods would like you to find a way to organize the amphipods that requires the <b>least total energy</b>.</p>
<p>However, because they are timid and stubborn, the amphipods have some extra rules:</p>
<ul>
<li>Amphipods will never <b>stop on the space immediately outside any room</b>. They can move into that space so long as they immediately continue moving. (Specifically, this refers to the four open spaces in the hallway that are directly above an amphipod starting position.)</li>
<li>Amphipods will never <b>move from the hallway into a room</b> unless that room is their destination room <b>and</b> that room contains no amphipods which do not also have that room as their own destination. If an amphipod's starting room is not its destination room, it can stay in that room until it leaves the room. (For example, an Amber amphipod will not move from the hallway into the right three rooms, and will only move into the leftmost room if that room is empty or if it only contains other Amber amphipods.)</li>
<li>Once an amphipod stops moving in the hallway, <b>it will stay in that spot until it can move into a room</b>. (That is, once any amphipod starts moving, any other amphipods currently in the hallway are locked in place and will not move again until they can move fully into a room.)</li>
</ul>
<p>In the above example, the amphipods can be organized using a minimum of <code><b>12521</b></code> energy. One way to do this is shown below.</p>
<p>Starting configuration:</p>
<pre><code>#############
#...........#
###B#C#B#D###
  #A#D#C#A#
  #########
</code></pre>
<p>One Bronze amphipod moves into the hallway, taking 4 steps and using <code>40</code> energy:</p>
<pre><code>#############
#...B.......#
###B#C#.#D###
  #A#D#C#A#
  #########
</code></pre>
<p>The only Copper amphipod not in its side room moves there, taking 4 steps and using <code>400</code> energy:</p>
<pre><code>#############
#...B.......#
###B#.#C#D###
  #A#D#C#A#
  #########
</code></pre>
<p>A Desert amphipod moves out of the way, taking 3 steps and using <code>3000</code> energy, and then the Bronze amphipod takes its place, taking 3 steps and using <code>30</code> energy:</p>
<pre><code>#############
#.....D.....#
###B#.#C#D###
  #A#B#C#A#
  #########
</code></pre>
<p>The leftmost Bronze amphipod moves to its room using <code>40</code> energy:</p>
<pre><code>#############
#.....D.....#
###.#B#C#D###
  #A#B#C#A#
  #########
</code></pre>
<p>Both amphipods in the rightmost room move into the hallway, using <code>2003</code> energy in total:</p>
<pre><code>#############
#.....D.D.A.#
###.#B#C#.###
  #A#B#C#.#
  #########
</code></pre>
<p>Both Desert amphipods move into the rightmost room using <code>7000</code> energy:</p>
<pre><code>#############
#.........A.#
###.#B#C#D###
  #A#B#C#D#
  #########
</code></pre>

<pre><code>#############
#...........#
###A#B#C#D###
  #A#B#C#D#
  #########
</code></pre>

</article>

<form method="post" action="23/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>