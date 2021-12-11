<article class="day-desc"><h2>--- Day 15: Beverage Bandits ---</h2><p>Having perfected their hot chocolate, the Elves have a new problem: the <a href="https://en.wikipedia.org/wiki/Goblin">Goblins</a> that live in these caves will do anything to steal it. Looks like they're here for a fight.</p>
<p>You scan the area, generating a map of the walls (<code>#</code>), open cavern (<code>.</code>), and starting position of every Goblin (<code>G</code>) and Elf (<code>E</code>) (your puzzle input).</p>
<p>Combat proceeds in <b>rounds</b>; in each round, each unit that is still alive takes a <b>turn</b>, resolving all of its actions before the next unit's turn begins. On each unit's turn, it tries to <b>move</b> into range of an enemy (if it isn't already) and then <b>attack</b> (if it is in range).</p>
<p>All units are very disciplined and always follow very strict combat rules. Units never move or attack diagonally, as doing so would be dishonorable. When multiple choices are equally valid, ties are broken in <b>reading order</b>: top-to-bottom, then left-to-right.  For instance, the order in which units take their turns within a round is the <b>reading order of their starting positions</b> in that round, regardless of the type of unit or whether other units have moved after the round started.  For example:</p>
<pre><code>                 would take their
These units:   turns in this order:
  #######           #######
  #.G.E.#           #.1.2.#
  #E.G.E#           #3.4.5#
  #.G.E.#           #.6.7.#
  #######           #######
</code></pre>
<p>Each unit begins its turn by identifying all possible <b>targets</b> (enemy units). If no targets remain, combat ends.</p>
<p>Then, the unit identifies all of the open squares (<code>.</code>) that are <b>in range</b> of each target; these are the squares which are <b>adjacent</b> (immediately up, down, left, or right) to any target and which aren't already occupied by a wall or another unit. Alternatively, the unit might <b>already</b> be in range of a target. If the unit is not already in range of a target, and there are no open squares which are in range of a target, the unit ends its turn.</p>
<p>If the unit is already in range of a target, it does not <b>move</b>, but continues its turn with an <b>attack</b>. Otherwise, since it is not in range of a target, it <b>moves</b>.</p>
<p>To <b>move</b>, the unit first considers the squares that are <b>in range</b> and determines <b>which of those squares it could reach in the fewest steps</b>. A <b>step</b> is a single movement to any <b>adjacent</b> (immediately up, down, left, or right) open (<code>.</code>) square. Units cannot move into walls or other units. The unit does this while considering the <b>current positions of units</b> and does <b>not</b> do any prediction about where units will be later. If the unit cannot reach (find an open path to) any of the squares that are in range, it ends its turn. If multiple squares are in range and <b>tied</b> for being reachable in the fewest steps, the square which is first in <b>reading order</b> is chosen. For example:</p>
<pre><code>Targets:      In range:     Reachable:    Nearest:      Chosen:
#######       #######       #######       #######       #######
#E..G.#       #E.?G?#       #E.@G.#       #E.!G.#       #E.+G.#
#...#.#  --&gt;  #.?.#?#  --&gt;  #.@.#.#  --&gt;  #.!.#.#  --&gt;  #...#.#
#.G.#G#       #?G?#G#       #@G@#G#       #!G.#G#       #.G.#G#
#######       #######       #######       #######       #######
</code></pre>
<p>In the above scenario, the Elf has three targets (the three Goblins):</p>
<ul>
<li>Each of the Goblins has open, adjacent squares which are <b>in range</b> (marked with a <code>?</code> on the map).</li>
<li>Of those squares, four are <b>reachable</b> (marked <code>@</code>); the other two (on the right) would require moving through a wall or unit to reach.</li>
<li>Three of these reachable squares are <b>nearest</b>, requiring the fewest steps (only <code>2</code>) to reach (marked <code>!</code>).</li>
<li>Of those, the square which is first in reading order is <b>chosen</b> (<code>+</code>).</li>
</ul>
<p>The unit then takes a single <b>step</b> toward the chosen square along the <b>shortest path</b> to that square. If multiple steps would put the unit equally closer to its destination, the unit chooses the step which is first in reading order. (This requires knowing when there is <b>more than one shortest path</b> so that you can consider the first step of each such path.) For example:</p>
<pre><code>In range:     Nearest:      Chosen:       Distance:     Step:
#######       #######       #######       #######       #######
#.E...#       #.E...#       #.E...#       #4E<b>2</b>12#       #..E..#
#...?.#  --&gt;  #...!.#  --&gt;  #...+.#  --&gt;  #3<b>2</b>101#  --&gt;  #.....#
#..?G?#       #..!G.#       #...G.#       #432G2#       #...G.#
#######       #######       #######       #######       #######
</code></pre>
<p>The Elf sees three squares in range of a target (<code>?</code>), two of which are nearest (<code>!</code>), and so the first in reading order is chosen (<code>+</code>). Under "Distance", each open square is marked with its distance from the destination square; the two squares to which the Elf could move on this turn (down and to the right) are both equally good moves and would leave the Elf <code>2</code> steps from being in range of the Goblin. Because the step which is first in reading order is chosen, the Elf moves <b>right</b> one square.</p>
<p>Here's a larger example of movement:</p>
<pre><code>Initially:
#########
#G..G..G#
#.......#
#.......#
#G..E..G#
#.......#
#.......#
#G..G..G#
#########

After 1 round:
#########
#.G...G.#
#...G...#
#...E..G#
#.G.....#
#.......#
#G..G..G#
#.......#
#########

After 2 rounds:
#########
#..G.G..#
#...G...#
#.G.E.G.#
#.......#
#G..G..G#
#.......#
#.......#
#########

After 3 rounds:
#########
#.......#
#..GGG..#
#..GEG..#
#G..G...#
#......G#
#.......#
#.......#
#########
</code></pre>
<p>Once the Goblins and Elf reach the positions above, they all are either in range of a target or cannot find any square in range of a target, and so none of the units can move until a unit dies.</p>
<p>After moving (or if the unit began its turn in range of a target), the unit <b>attacks</b>.</p>
<p>To <b>attack</b>, the unit first determines <b>all</b> of the targets that are <b>in range</b> of it by being immediately <b>adjacent</b> to it. If there are no such targets, the unit ends its turn. Otherwise, the adjacent target with the <b>fewest hit points</b> is selected; in a tie, the adjacent target with the fewest hit points which is first in reading order is selected.</p>
<p>The unit deals damage equal to its <b>attack power</b> to the selected target, reducing its hit points by that amount. If this reduces its hit points to <code>0</code> or fewer, the selected target <b>dies</b>: its square becomes <code>.</code> and it takes no further turns.</p>
<p>Each <b>unit</b>, either Goblin or Elf, has <code>3</code> <b>attack power</b> and starts with <code>200</code> <b>hit points</b>.</p>
<p>For example, suppose the only Elf is about to attack:</p>
<pre><code>       HP:            HP:
G....  9       G....  9  
..G..  4       ..G..  4  
..E<b>G</b>.  2  --&gt;  ..E..     
..G..  2       ..G..  2  
...G.  1       ...G.  1  
</code></pre>
<p>The "HP" column shows the hit points of the Goblin to the left in the corresponding row. The Elf is in range of three targets: the Goblin above it (with <code>4</code> hit points), the Goblin to its right (with <code>2</code> hit points), and the Goblin below it (also with <code>2</code> hit points). Because three targets are in range, the ones with the lowest hit points are selected: the two Goblins with <code>2</code> hit points each (one to the right of the Elf and one below the Elf). Of those, the Goblin first in reading order (the one to the right of the Elf) is selected. The selected Goblin's hit points (<code>2</code>) are reduced by the Elf's attack power (<code>3</code>), reducing its hit points to <code>-1</code>, killing it.</p>
<p>After attacking, the unit's turn ends.  Regardless of how the unit's turn ends, the next unit in the round takes its turn.  If all units have taken turns in this round, the round ends, and a new round begins.</p>
<p>The Elves look quite outnumbered.  You need to determine the <b>outcome</b> of the battle: the <b>number of full rounds that were completed</b> (not counting the round in which combat ends) multiplied by <b>the sum of the hit points of all remaining units</b> at the moment combat ends. (Combat only ends when a unit finds no targets during its turn.)</p>
<p>Below is an entire sample combat. Next to each map, each row's units' hit points are listed from left to right.</p>
<pre><code>Initially:
#######   
#.G...#   G(200)
#...EG#   E(200), G(200)
#.#.#G#   G(200)
#..G#E#   G(200), E(200)
#.....#   
#######   

After 1 round:
#######   
#..G..#   G(200)
#...EG#   E(197), G(197)
#.#G#G#   G(200), G(197)
#...#E#   E(197)
#.....#   
#######   

After 2 rounds:
#######   
#...G.#   G(200)
#..GEG#   G(200), E(188), G(194)
#.#.#G#   G(194)
#...#E#   E(194)
#.....#   
#######   

Combat ensues; eventually, the top Elf dies:

After 23 rounds:
#######   
#...G.#   G(200)
#..G.G#   G(200), G(131)
#.#.#G#   G(131)
#...#E#   E(131)
#.....#   
#######   

After 24 rounds:
#######   
#..G..#   G(200)
#...G.#   G(131)
#.#G#G#   G(200), G(128)
#...#E#   E(128)
#.....#   
#######   

After 25 rounds:
#######   
#.G...#   G(200)
#..G..#   G(131)
#.#.#G#   G(125)
#..G#E#   G(200), E(125)
#.....#   
#######   

After 26 rounds:
#######   
#G....#   G(200)
#.G...#   G(131)
#.#.#G#   G(122)
#...#E#   E(122)
#..G..#   G(200)
#######   

After 27 rounds:
#######   
#G....#   G(200)
#.G...#   G(131)
#.#.#G#   G(119)
#...#E#   E(119)
#...G.#   G(200)
#######   

After 28 rounds:
#######   
#G....#   G(200)
#.G...#   G(131)
#.#.#G#   G(116)
#...#E#   E(113)
#....G#   G(200)
#######   

More combat ensues; eventually, the bottom Elf dies:

After 47 rounds:
#######   
#G....#   G(200)
#.G...#   G(131)
#.#.#G#   G(59)
#...#.#   
#....G#   G(200)
#######   
</code></pre>
<p>Before the 48th round can finish, the top-left Goblin finds that there are no targets remaining, and so combat ends. So, the number of <b>full rounds</b> that were completed is <code><b>47</b></code>, and the sum of the hit points of all remaining units is <code>200+131+59+200 = <b>590</b></code>. From these, the <b>outcome</b> of the battle is <code>47 * 590 = <b>27730</b></code>.</p>
<p>Here are a few example summarized combats:</p>
<pre><code>#######       #######
#G..#E#       #...#E#   E(200)
#E#E.E#       #E#...#   E(197)
#G.##.#  --&gt;  #.E##.#   E(185)
#...#E#       #E..#E#   E(200), E(200)
#...E.#       #.....#
#######       #######

Combat ends after 37 full rounds
Elves win with 982 total hit points left
Outcome: 37 * 982 = <b>36334</b>
</code></pre>
<pre><code>#######       #######   
#E..EG#       #.E.E.#   E(164), E(197)
#.#G.E#       #.#E..#   E(200)
#E.##E#  --&gt;  #E.##.#   E(98)
#G..#.#       #.E.#.#   E(200)
#..E#.#       #...#.#   
#######       #######   

Combat ends after 46 full rounds
Elves win with 859 total hit points left
Outcome: 46 * 859 = <b>39514</b>
</code></pre>
<pre><code>#######       #######   
#E.G#.#       #G.G#.#   G(200), G(98)
#.#G..#       #.#G..#   G(200)
#G.#.G#  --&gt;  #..#..#   
#G..#.#       #...#G#   G(95)
#...E.#       #...G.#   G(200)
#######       #######   

Combat ends after 35 full rounds
Goblins win with 793 total hit points left
Outcome: 35 * 793 = <b>27755</b>
</code></pre>
<pre><code>#######       #######   
#.E...#       #.....#   
#.#..G#       #.#G..#   G(200)
#.###.#  --&gt;  #.###.#   
#E#G#G#       #.#.#.#   
#...#G#       #G.G#G#   G(98), G(38), G(200)
#######       #######   

Combat ends after 54 full rounds
Goblins win with 536 total hit points left
Outcome: 54 * 536 = <b>28944</b>
</code></pre>
<pre><code>#########       #########   
#G......#       #.G.....#   G(137)
#.E.#...#       #G.G#...#   G(200), G(200)
#..##..G#       #.G##...#   G(200)
#...##..#  --&gt;  #...##..#   
#...#...#       #.G.#...#   G(200)
#.G...G.#       #.......#   
#.....G.#       #.......#   
#########       #########   

Combat ends after 20 full rounds
Goblins win with 937 total hit points left
Outcome: 20 * 937 = <b>18740</b>
</code></pre>

</article>

<form method="post" action="15/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>