<article class="day-desc"><h2>--- Day 14: Docking Data ---</h2><p>As your ferry approaches the sea port, the captain asks for your help again. The computer system that runs this port isn't compatible with the docking program on the ferry, so the docking parameters aren't being correctly initialized in the docking program's memory.</p>
<p>After a brief inspection, you discover that the sea port's computer system uses a strange <a href="https://en.wikipedia.org/wiki/Mask_(computing)" target="_blank">bitmask</a> system in its initialization program. Although you don't have the correct decoder chip handy, you can emulate it in software!</p>
<p>The initialization program (your puzzle input) can either update the bitmask or write a value to memory.  Values and memory addresses are both 36-bit unsigned integers.  For example, ignoring bitmasks for a moment, a line like <code>mem[8] = 11</code> would write the value <code>11</code> to memory address <code>8</code>.</p>
<p>The bitmask is always given as a string of 36 bits, written with the most significant bit (representing <code>2^35</code>) on the left and the least significant bit (<code>2^0</code>, that is, the <code>1</code>s bit) on the right. The current bitmask is applied to values immediately before they are written to memory: a <code>0</code> or <code>1</code> overwrites the corresponding bit in the value, while an <code>X</code> leaves the bit in the value unchanged.</p>
<p>For example, consider the following program:</p>
<pre><code>mask = XXXXXXXXXXXXXXXXXXXXXXXXXXXXX1XXXX0X
mem[8] = 11
mem[7] = 101
mem[8] = 0
</code></pre>
<p>This program starts by specifying a bitmask (<code>mask = ....</code>). The mask it specifies will overwrite two bits in every written value: the <code>2</code>s bit is overwritten with <code>0</code>, and the <code>64</code>s bit is overwritten with <code>1</code>.</p>
<p>The program then attempts to write the value <code>11</code> to memory address <code>8</code>. By expanding everything out to individual bits, the mask is applied as follows:</p>
<pre><code>value:  000000000000000000000000000000001011  (decimal 11)
mask:   XXXXXXXXXXXXXXXXXXXXXXXXXXXXX1XXXX0X
result: 00000000000000000000000000000<b>1</b>0010<b>0</b>1  (decimal 73)
</code></pre>
<p>So, because of the mask, the value <code>73</code> is written to memory address <code>8</code> instead. Then, the program tries to write <code>101</code> to address <code>7</code>:</p>
<pre><code>value:  000000000000000000000000000001100101  (decimal 101)
mask:   XXXXXXXXXXXXXXXXXXXXXXXXXXXXX1XXXX0X
result: 00000000000000000000000000000<b>1</b>1001<b>0</b>1  (decimal 101)
</code></pre>
<p>This time, the mask has no effect, as the bits it overwrote were already the values the mask tried to set. Finally, the program tries to write <code>0</code> to address <code>8</code>:</p>
<pre><code>value:  000000000000000000000000000000000000  (decimal 0)
mask:   XXXXXXXXXXXXXXXXXXXXXXXXXXXXX1XXXX0X
result: 00000000000000000000000000000<b>1</b>0000<b>0</b>0  (decimal 64)
</code></pre>



</article>
<p>Your puzzle answer was <code>15919415426101</code>.</p><p class="day-success"><b>The first half of this puzzle is complete! It provides one gold star: *</p>
<article class="day-desc"><h2 id="part2">--- Part Two ---</h2><p>For some reason, the sea port's computer system still can't communicate with your ferry's docking program. It must be using <b>version 2</b> of the decoder chip!</p>
<p>A version 2 decoder chip doesn't modify the values being written at all.  Instead, it acts as a <a href="https://www.youtube.com/watch?v=PvfhANgLrm4" target="_blank">memory address decoder</a>. Immediately before a value is written to memory, each bit in the bitmask modifies the corresponding bit of the destination <b>memory address</b> in the following way:</p>
<ul>
<li>If the bitmask bit is <code>0</code>, the corresponding memory address bit is <b>unchanged</b>.</li>
<li>If the bitmask bit is <code>1</code>, the corresponding memory address bit is <b>overwritten with <code>1</code></b>.</li>
<li>If the bitmask bit is <code>X</code>, the corresponding memory address bit is <span title="Technically, since you're on a boat, they're all floating."><b>floating</b></span>.</li>
</ul>
<p>A <b>floating</b> bit is not connected to anything and instead fluctuates unpredictably. In practice, this means the floating bits will take on <b>all possible values</b>, potentially causing many memory addresses to be written all at once!</p>
<p>For example, consider the following program:</p>
<pre><code>mask = 000000000000000000000000000000X1001X
mem[42] = 100
mask = 00000000000000000000000000000000X0XX
mem[26] = 1
</code></pre>
<p>When this program goes to write to memory address <code>42</code>, it first applies the bitmask:</p>
<pre><code>address: 000000000000000000000000000000101010  (decimal 42)
mask:    000000000000000000000000000000X1001X
result:  000000000000000000000000000000<b>X1</b>10<b>1X</b>
</code></pre>
<p>After applying the mask, four bits are overwritten, three of which are different, and two of which are <b>floating</b>. Floating bits take on every possible combination of values; with two floating bits, four actual memory addresses are written:</p>
<pre><code>000000000000000000000000000000<b>0</b>1101<b>0</b>  (decimal 26)
000000000000000000000000000000<b>0</b>1101<b>1</b>  (decimal 27)
000000000000000000000000000000<b>1</b>1101<b>0</b>  (decimal 58)
000000000000000000000000000000<b>1</b>1101<b>1</b>  (decimal 59)
</code></pre>
<p>Next, the program is about to write to memory address <code>26</code> with a different bitmask:</p>
<pre><code>address: 000000000000000000000000000000011010  (decimal 26)
mask:    00000000000000000000000000000000X0XX
result:  00000000000000000000000000000001<b>X</b>0<b>XX</b>
</code></pre>
<p>This results in an address with three floating bits, causing writes to <b>eight</b> memory addresses:</p>
<pre><code>00000000000000000000000000000001<b>0</b>0<b>00</b>  (decimal 16)
00000000000000000000000000000001<b>0</b>0<b>01</b>  (decimal 17)
00000000000000000000000000000001<b>0</b>0<b>10</b>  (decimal 18)
00000000000000000000000000000001<b>0</b>0<b>11</b>  (decimal 19)
00000000000000000000000000000001<b>1</b>0<b>00</b>  (decimal 24)
00000000000000000000000000000001<b>1</b>0<b>01</b>  (decimal 25)
00000000000000000000000000000001<b>1</b>0<b>10</b>  (decimal 26)
00000000000000000000000000000001<b>1</b>0<b>11</b>  (decimal 27)
</code></pre>


</article>
<form method="post" action="14/answer"><input type="hidden" name="level" value="2"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>