<article class="day-desc"><h2>--- Day 10: Knot Hash ---</h2><p>You come across some programs that are trying to implement a software emulation of a hash based on knot-tying. The hash these programs are implementing isn't very strong, but you decide to help them anyway. You make a mental note to remind the Elves later not to <span title="NEW CRYPTOSYSTEM WHO DIS">invent their own cryptographic functions</span>.</p>
<p>This hash function simulates tying a knot in a circle of string with 256 marks on it. Based on the input to be hashed, the function repeatedly selects a span of string, brings the ends together, and gives the span a half-twist to reverse the order of the marks within it. After doing this many times, the order of the marks is used to build the resulting hash.</p>
<pre><code>  4--5   pinch   4  5           4   1
 /    \  5,0,1  / \/ \  twist  / \ / \
3      0  --&gt;  3      0  --&gt;  3   X   0
 \    /         \ /\ /         \ / \ /
  2--1           2  1           2   5
</code></pre>
<p>To achieve this, begin with a <b>list</b> of numbers from <code>0</code> to <code>255</code>, a <b>current position</b> which begins at <code>0</code> (the first element in the list), a <b>skip size</b> (which starts at <code>0</code>), and a sequence of <b>lengths</b> (your puzzle input).  Then, for each length:</p>
<ul>
<li><b>Reverse</b> the order of that <b>length</b> of elements in the <b>list</b>, starting with the element at the <b>current position</b>.</li>
<li><b>Move</b> the <b>current position</b> forward by that <b>length</b> plus the <b>skip size</b>.</li>
<li><b>Increase</b> the <b>skip size</b> by one.</li>
</ul>
<p>The <b>list</b> is circular; if the <b>current position</b> and the <b>length</b> try to reverse elements beyond the end of the list, the operation reverses using as many extra elements as it needs from the front of the list. If the <b>current position</b> moves past the end of the list, it wraps around to the front. <b>Lengths</b> larger than the size of the <b>list</b> are invalid.</p>
<p>Here's an example using a smaller list:</p>
<p>Suppose we instead only had a circular list containing five elements, <code>0, 1, 2, 3, 4</code>, and were given input lengths of <code>3, 4, 1, 5</code>.</p>
<ul>
<li>The list begins as <code>[0] 1 2 3 4</code> (where square brackets indicate the <b>current position</b>).</li>
<li>The first length, <code>3</code>, selects <code>([0] 1 2) 3 4</code> (where parentheses indicate the sublist to be reversed).</li>
<li>After reversing that section (<code>0 1 2</code> into <code>2 1 0</code>), we get <code>([2] 1 0) 3 4</code>.</li>
<li>Then, the <b>current position</b> moves forward by the <b>length</b>, <code>3</code>, plus the <b>skip size</b>, 0: <code>2 1 0 [3] 4</code>. Finally, the <b>skip size</b> increases to <code>1</code>.</li>
</ul>
<ul>
<li>The second length, <code>4</code>, selects a section which wraps: <code>2 1) 0 ([3] 4</code>.</li>
<li>The sublist <code>3 4 2 1</code> is reversed to form <code>1 2 4 3</code>: <code>4 3) 0 ([1] 2</code>.</li>
<li>The <b>current position</b> moves forward by the <b>length</b> plus the <b>skip size</b>, a total of <code>5</code>, causing it not to move because it wraps around: <code>4 3 0 [1] 2</code>. The <b>skip size</b> increases to <code>2</code>.</li>
</ul>
<ul>
<li>The third length, <code>1</code>, selects a sublist of a single element, and so reversing it has no effect.</li>
<li>The <b>current position</b> moves forward by the <b>length</b> (<code>1</code>) plus the <b>skip size</b> (<code>2</code>): <code>4 [3] 0 1 2</code>. The <b>skip size</b> increases to <code>3</code>.</li>
</ul>
<ul>
<li>The fourth length, <code>5</code>, selects every element starting with the second: <code>4) ([3] 0 1 2</code>. Reversing this sublist (<code>3 0 1 2 4</code> into <code>4 2 1 0 3</code>) produces: <code>3) ([4] 2 1 0</code>.</li>
<li>Finally, the <b>current position</b> moves forward by <code>8</code>: <code>3 4 2 1 [0]</code>. The <b>skip size</b> increases to <code>4</code>.</li>
</ul>


</article>

<form method="post" action="10/answer"><input type="hidden" name="level" value="1"></form>