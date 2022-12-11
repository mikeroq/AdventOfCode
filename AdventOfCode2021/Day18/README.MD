<article class="day-desc"><h2>--- Day 18: Snailfish ---</h2><p>You descend into the ocean trench and encounter some <a href="https://en.wikipedia.org/wiki/Snailfish" target="_blank">snailfish</a>. They say they saw the sleigh keys! They'll even tell you which direction the keys went if you help one of the smaller snailfish with his <b><span title="Snailfish math is snailfish math!">math</span> homework</b>.</p>
<p>Snailfish numbers aren't like regular numbers. Instead, every snailfish number is a <b>pair</b> - an ordered list of two elements. Each element of the pair can be either a regular number or another pair.</p>
<p>Pairs are written as <code>[x,y]</code>, where <code>x</code> and <code>y</code> are the elements within the pair. Here are some example snailfish numbers, one snailfish number per line:</p>
<pre><code>[1,2]
[[1,2],3]
[9,[8,7]]
[[1,9],[8,5]]
[[[[1,2],[3,4]],[[5,6],[7,8]]],9]
[[[9,[3,8]],[[0,9],6]],[[[3,7],[4,9]],3]]
[[[[1,3],[5,3]],[[1,3],[8,7]]],[[[4,9],[6,9]],[[8,2],[7,3]]]]
</code></pre>
<p>This snailfish homework is about <b>addition</b>. To add two snailfish numbers, form a pair from the left and right parameters of the addition operator. For example, <code>[1,2]</code> + <code>[[3,4],5]</code> becomes <code>[[1,2],[[3,4],5]]</code>.</p>
<p>There's only one problem: <b>snailfish numbers must always be reduced</b>, and the process of adding two snailfish numbers can result in snailfish numbers that need to be reduced.</p>
<p>To <b>reduce a snailfish number</b>, you must repeatedly do the first action in this list that applies to the snailfish number:</p>
<ul>
<li>If any pair is <b>nested inside four pairs</b>, the leftmost such pair <b>explodes</b>.</li>
<li>If any regular number is <b>10 or greater</b>, the leftmost such regular number <b>splits</b>.</li>
</ul>
<p>Once no action in the above list applies, the snailfish number is reduced.</p>
<p>During reduction, at most one action applies, after which the process returns to the top of the list of actions. For example, if <b>split</b> produces a pair that meets the <b>explode</b> criteria, that pair <b>explodes</b> before other <b>splits</b> occur.</p>
<p>To <b>explode</b> a pair, the pair's left value is added to the first regular number to the left of the exploding pair (if any), and the pair's right value is added to the first regular number to the right of the exploding pair (if any). Exploding pairs will always consist of two regular numbers. Then, the entire exploding pair is replaced with the regular number <code>0</code>.</p>
<p>Here are some examples of a single explode action:</p>
<ul>
<li><code>[[[[<b>[9,8]</b>,1],2],3],4]</code> becomes <code>[[[[<b>0</b>,<b>9</b>],2],3],4]</code> (the <code>9</code> has no regular number to its left, so it is not added to any regular number).</li>
<li><code>[7,[6,[5,[4,<b>[3,2]</b>]]]]</code> becomes <code>[7,[6,[5,[<b>7</b>,<b>0</b>]]]]</code> (the <code>2</code> has no regular number to its right, and so it is not added to any regular number).</li>
<li><code>[[6,[5,[4,<b>[3,2]</b>]]],1]</code> becomes <code>[[6,[5,[<b>7</b>,<b>0</b>]]],<b>3</b>]</code>.</li>
<li><code>[[3,[2,[1,<b>[7,3]</b>]]],[6,[5,[4,[3,2]]]]]</code> becomes <code>[[3,[2,[<b>8</b>,<b>0</b>]]],[<b>9</b>,[5,[4,[3,2]]]]]</code> (the pair <code>[3,2]</code> is unaffected because the pair <code>[7,3]</code> is further to the left; <code>[3,2]</code> would explode on the next action).</li>
<li><code>[[3,[2,[8,0]]],[9,[5,[4,<b>[3,2]</b>]]]]</code> becomes <code>[[3,[2,[8,0]]],[9,[5,[<b>7</b>,<b>0</b>]]]]</code>.</li>
</ul>
<p>To <b>split</b> a regular number, replace it with a pair; the left element of the pair should be the regular number divided by two and rounded <b>down</b>, while the right element of the pair should be the regular number divided by two and rounded <b>up</b>. For example, <code>10</code> becomes <code>[5,5]</code>, <code>11</code> becomes <code>[5,6]</code>, <code>12</code> becomes <code>[6,6]</code>, and so on.</p>
<p>Here is the process of finding the reduced result of <code>[[[[4,3],4],4],[7,[[8,4],9]]]</code> + <code>[1,1]</code>:</p>
<pre><code>after addition: [[[[<b>[4,3]</b>,4],4],[7,[[8,4],9]]],[1,1]]
after explode:  [[[[0,7],4],[7,[<b>[8,4]</b>,9]]],[1,1]]
after explode:  [[[[0,7],4],[<b>15</b>,[0,13]]],[1,1]]
after split:    [[[[0,7],4],[[7,8],[0,<b>13</b>]]],[1,1]]
after split:    [[[[0,7],4],[[7,8],[0,<b>[6,7]</b>]]],[1,1]]
after explode:  [[[[0,7],4],[[7,8],[6,0]]],[8,1]]
</code></pre>
<p>Once no reduce actions apply, the snailfish number that remains is the actual result of the addition operation: <code>[[[[0,7],4],[[7,8],[6,0]]],[8,1]]</code>.</p>
<p>The homework assignment involves adding up a <b>list of snailfish numbers</b> (your puzzle input). The snailfish numbers are each listed on a separate line. Add the first snailfish number and the second, then add that result and the third, then add that result and the fourth, and so on until all numbers in the list have been used once.</p>
<p>For example, the final sum of this list is <code>[[[[1,1],[2,2]],[3,3]],[4,4]]</code>:</p>
<pre><code>[1,1]
[2,2]
[3,3]
[4,4]
</code></pre>
<p>The final sum of this list is <code>[[[[3,0],[5,3]],[4,4]],[5,5]]</code>:</p>
<pre><code>[1,1]
[2,2]
[3,3]
[4,4]
[5,5]
</code></pre>
<p>The final sum of this list is <code>[[[[5,0],[7,4]],[5,5]],[6,6]]</code>:</p>
<pre><code>[1,1]
[2,2]
[3,3]
[4,4]
[5,5]
[6,6]
</code></pre>
<p>Here's a slightly larger example:</p>
<pre><code>[[[0,[4,5]],[0,0]],[[[4,5],[2,6]],[9,5]]]
[7,[[[3,7],[4,3]],[[6,3],[8,8]]]]
[[2,[[0,8],[3,4]]],[[[6,7],1],[7,[1,6]]]]
[[[[2,4],7],[6,[0,5]]],[[[6,8],[2,8]],[[2,1],[4,5]]]]
[7,[5,[[3,8],[1,4]]]]
[[2,[2,2]],[8,[8,1]]]
[2,9]
[1,[[[9,3],9],[[9,0],[0,7]]]]
[[[5,[7,4]],7],1]
[[[[4,2],2],6],[8,7]]
</code></pre>
<p>The final sum <code>[[[[8,7],[7,7]],[[8,6],[7,7]]],[[[0,7],[6,6]],[8,7]]]</code> is found after adding up the above snailfish numbers:</p>
<pre><code>  [[[0,[4,5]],[0,0]],[[[4,5],[2,6]],[9,5]]]
+ [7,[[[3,7],[4,3]],[[6,3],[8,8]]]]
= [[[[4,0],[5,4]],[[7,7],[6,0]]],[[8,[7,7]],[[7,9],[5,0]]]]

  [[[[4,0],[5,4]],[[7,7],[6,0]]],[[8,[7,7]],[[7,9],[5,0]]]]
+ [[2,[[0,8],[3,4]]],[[[6,7],1],[7,[1,6]]]]
= [[[[6,7],[6,7]],[[7,7],[0,7]]],[[[8,7],[7,7]],[[8,8],[8,0]]]]

  [[[[6,7],[6,7]],[[7,7],[0,7]]],[[[8,7],[7,7]],[[8,8],[8,0]]]]
+ [[[[2,4],7],[6,[0,5]]],[[[6,8],[2,8]],[[2,1],[4,5]]]]
= [[[[7,0],[7,7]],[[7,7],[7,8]]],[[[7,7],[8,8]],[[7,7],[8,7]]]]

  [[[[7,0],[7,7]],[[7,7],[7,8]]],[[[7,7],[8,8]],[[7,7],[8,7]]]]
+ [7,[5,[[3,8],[1,4]]]]
= [[[[7,7],[7,8]],[[9,5],[8,7]]],[[[6,8],[0,8]],[[9,9],[9,0]]]]

  [[[[7,7],[7,8]],[[9,5],[8,7]]],[[[6,8],[0,8]],[[9,9],[9,0]]]]
+ [[2,[2,2]],[8,[8,1]]]
= [[[[6,6],[6,6]],[[6,0],[6,7]]],[[[7,7],[8,9]],[8,[8,1]]]]

  [[[[6,6],[6,6]],[[6,0],[6,7]]],[[[7,7],[8,9]],[8,[8,1]]]]
+ [2,9]
= [[[[6,6],[7,7]],[[0,7],[7,7]]],[[[5,5],[5,6]],9]]

  [[[[6,6],[7,7]],[[0,7],[7,7]]],[[[5,5],[5,6]],9]]
+ [1,[[[9,3],9],[[9,0],[0,7]]]]
= [[[[7,8],[6,7]],[[6,8],[0,8]]],[[[7,7],[5,0]],[[5,5],[5,6]]]]

  [[[[7,8],[6,7]],[[6,8],[0,8]]],[[[7,7],[5,0]],[[5,5],[5,6]]]]
+ [[[5,[7,4]],7],1]
= [[[[7,7],[7,7]],[[8,7],[8,7]]],[[[7,0],[7,7]],9]]

  [[[[7,7],[7,7]],[[8,7],[8,7]]],[[[7,0],[7,7]],9]]
+ [[[[4,2],2],6],[8,7]]
= [[[[8,7],[7,7]],[[8,6],[7,7]]],[[[0,7],[6,6]],[8,7]]]
</code></pre>
<p>To check whether it's the right answer, the snailfish teacher only checks the <b>magnitude</b> of the final sum. The magnitude of a pair is 3 times the magnitude of its left element plus 2 times the magnitude of its right element. The magnitude of a regular number is just that number.</p>
<p>For example, the magnitude of <code>[9,1]</code> is <code>3*9 + 2*1 = <b>29</b></code>; the magnitude of <code>[1,9]</code> is <code>3*1 + 2*9 = <b>21</b></code>. Magnitude calculations are recursive: the magnitude of <code>[[9,1],[1,9]]</code> is <code>3*29 + 2*21 = <b>129</b></code>.</p>
<p>Here are a few more magnitude examples:</p>
<ul>
<li><code>[[1,2],[[3,4],5]]</code> becomes <code><b>143</b></code>.</li>
<li><code>[[[[0,7],4],[[7,8],[6,0]]],[8,1]]</code> becomes <code><b>1384</b></code>.</li>
<li><code>[[[[1,1],[2,2]],[3,3]],[4,4]]</code> becomes <code><b>445</b></code>.</li>
<li><code>[[[[3,0],[5,3]],[4,4]],[5,5]]</code> becomes <code><b>791</b></code>.</li>
<li><code>[[[[5,0],[7,4]],[5,5]],[6,6]]</code> becomes <code><b>1137</b></code>.</li>
<li><code>[[[[8,7],[7,7]],[[8,6],[7,7]]],[[[0,7],[6,6]],[8,7]]]</code> becomes <code><b>3488</b></code>.</li>
</ul>
<p>So, given this example homework assignment:</p>
<pre><code>[[[0,[5,8]],[[1,7],[9,6]]],[[4,[1,2]],[[1,4],2]]]
[[[5,[2,8]],4],[5,[[9,9],0]]]
[6,[[[6,2],[5,6]],[[7,6],[4,7]]]]
[[[6,[0,7]],[0,9]],[4,[9,[9,0]]]]
[[[7,[6,4]],[3,[1,3]]],[[[5,5],1],9]]
[[6,[[7,3],[3,2]]],[[[3,8],[5,7]],4]]
[[[[5,4],[7,7]],8],[[8,3],8]]
[[9,3],[[9,9],[6,[4,9]]]]
[[2,[[7,7],7]],[[5,8],[[9,3],[0,2]]]]
[[[[5,2],5],[8,[3,7]]],[[5,[7,5]],[4,4]]]
</code></pre>
<p>The final sum is:</p>
<pre><code>[[[[6,6],[7,6]],[[7,7],[7,0]]],[[[7,7],[7,7]],[[7,8],[9,9]]]]</code></pre>


</article>

<form method="post" action="18/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>