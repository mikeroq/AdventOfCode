<article class="day-desc"><h2>--- Day 7: Recursive Circus ---</h2><p>Wandering further through the circuits of the computer, you come upon a tower of <span title="Turtles, all the way down.">programs</span> that have gotten themselves into a bit of trouble.  A recursive algorithm has gotten out of hand, and now they're balanced precariously in a large tower.</p>
<p>One program at the bottom supports the entire tower. It's holding a large disc, and on the disc are balanced several more sub-towers. At the bottom of these sub-towers, standing on the bottom disc, are other programs, each holding <b>their</b> own disc, and so on. At the very tops of these sub-sub-sub-...-towers, many programs stand simply keeping the disc below them balanced but with no disc of their own.</p>
<p>You offer to help, but first you need to understand the structure of these towers.  You ask each program to yell out their <b>name</b>, their <b>weight</b>, and (if they're holding a disc) the <b>names of the programs immediately above them</b> balancing on that disc. You write this information down (your puzzle input). Unfortunately, in their panic, they don't do this in an orderly fashion; by the time you're done, you're not sure which program gave which information.</p>
<p>For example, if your list is the following:</p>
<pre><code>pbga (66)
xhth (57)
ebii (61)
havc (66)
ktlj (57)
fwft (72) -&gt; ktlj, cntj, xhth
qoyq (66)
padx (45) -&gt; pbga, havc, qoyq
tknk (41) -&gt; ugml, padx, fwft
jptl (61)
ugml (68) -&gt; gyxo, ebii, jptl
gyxo (61)
cntj (57)
</code></pre>
<p>...then you would be able to recreate the structure of the towers that looks like this:</p>
<pre><code>                gyxo
              /     
         ugml - ebii
       /      \     
      |         jptl
      |        
      |         pbga
     /        /
tknk --- padx - havc
     \        \
      |         qoyq
      |             
      |         ktlj
       \      /     
         fwft - cntj
              \     
                xhth
</code></pre>


</article>

<form method="post" action="7/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>