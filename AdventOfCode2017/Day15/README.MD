<article class="day-desc"><h2>--- Day 15: Dueling Generators ---</h2><p>Here, you encounter a pair of dueling <span title="I guess they *are* a little banjo-shaped. Why do you ask?">generators</span>. The generators, called <b>generator A</b> and <b>generator B</b>, are trying to agree on a sequence of numbers. However, one of them is malfunctioning, and so the sequences don't always match.</p>
<p>As they do this, a <b>judge</b> waits for each of them to generate its next value, compares the lowest 16 bits of both values, and keeps track of the number of times those parts of the values match.</p>
<p>The generators both work on the same principle. To create its next value, a generator will take the previous value it produced, multiply it by a <b>factor</b> (generator A uses <code>16807</code>; generator B uses <code>48271</code>), and then keep the remainder of dividing that resulting product by <code>2147483647</code>. That final remainder is the value it produces next.</p>
<p>To calculate each generator's first value, it instead uses a specific starting value as its "previous value" (as listed in your puzzle input).</p>
<p>For example, suppose that for starting values, generator A uses <code>65</code>, while generator B uses <code>8921</code>. Then, the first five pairs of generated values are:</p>
<pre><code>--Gen. A--  --Gen. B--
   1092455   430625591
1181022009  1233683848
 245556042  1431495498
1744312007   137874439
1352636452   285222916
</code></pre>
<p>In binary, these pairs are (with generator A's value first in each pair):</p>
<pre><code>00000000000100001010101101100111
00011001101010101101001100110111

01000110011001001111011100111001
01001001100010001000010110001000

00001110101000101110001101001010
01010101010100101110001101001010

01100111111110000001011011000111
00001000001101111100110000000111

01010000100111111001100000100100
00010001000000000010100000000100
</code></pre>



</article>

<form method="post" action="15/answer"><input type="hidden" name="level" value="1"></form>