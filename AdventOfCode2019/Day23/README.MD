<article class="day-desc"><h2>--- Day 23: Category Six ---</h2><p>The droids have finished repairing as much of the ship as they can.  Their <span title="If you don't at least exhale sharply through your nose after reading this joke, we probably can't be friends.">report</span> indicates that this was a <b>Category 6</b> disaster - not because it was that bad, but because it destroyed the stockpile of <a href="https://en.wikipedia.org/wiki/Category_6_cable">Category 6</a> network cables as well as most of the ship's network infrastructure.</p>
<p>You'll need to <b>rebuild the network from scratch</b>.</p>
<p>The computers on the network are standard <a href="9">Intcode</a> computers that communicate by sending <b>packets</b> to each other.  There are <code>50</code> of them in total, each running a copy of the same <b>Network Interface Controller</b> (NIC) software (your puzzle input). The computers have <b>network addresses</b> <code>0</code> through <code>49</code>; when each computer boots up, it will request its network address via a single input instruction. Be sure to give each computer a unique network address.</p>
<p>Once a computer has received its network address, it will begin doing work and communicating over the network by sending and receiving <b>packets</b>. All packets contain <b>two values</b> named <code>X</code> and <code>Y</code>. Packets sent to a computer are queued by the recipient and read in the order they are received.</p>
<p>To <b>send</b> a packet to another computer, the NIC will use <b>three output instructions</b> that provide the <b>destination address</b> of the packet followed by its <code>X</code> and <code>Y</code> values.  For example, three output instructions that provide the values <code>10</code>, <code>20</code>, <code>30</code> would send a packet with <code>X=20</code> and <code>Y=30</code> to the computer with address <code>10</code>.</p>



</article>

<form method="post" action="23/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>