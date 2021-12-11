<article class="day-desc"><h2>--- Day 21: Scrambled Letters and Hash ---</h2><p>The computer system you're breaking into uses a <span title="I do not like them, Security-Account-Manager-I-Am! I do not like scrambled letters and hash!">weird scrambling function</span> to store its passwords. It shouldn't be much trouble to create your own scrambled password so you can add it to the system; you just have to implement the scrambler.</p>
<p>The scrambling function is a series of operations (the exact list is provided in your puzzle input). Starting with the password to be scrambled, apply each operation in succession to the string. The individual operations behave as follows:</p>
<ul>
<li><code>swap position X with position Y</code> means that the letters at indexes <code>X</code> and <code>Y</code> (counting from <code>0</code>) should be <b>swapped</b>.</li>
<li><code>swap letter X with letter Y</code> means that the letters <code>X</code> and <code>Y</code> should be <b>swapped</b> (regardless of where they appear in the string).</li>
<li><code>rotate left/right X steps</code> means that the whole string should be <b>rotated</b>; for example, one right rotation would turn <code>abcd</code> into <code>dabc</code>.</li>
<li><code>rotate based on position of letter X</code> means that the whole string should be <b>rotated to the right</b> based on the <b>index</b> of letter <code>X</code> (counting from <code>0</code>) as determined <b>before</b> this instruction does any rotations.  Once the index is determined, rotate the string to the right one time, plus a number of times equal to that index, plus one additional time if the index was at least <code>4</code>.</li>
<li><code>reverse positions X through Y</code> means that the span of letters at indexes <code>X</code> through <code>Y</code> (including the letters at <code>X</code> and <code>Y</code>) should be <b>reversed in order</b>.</li>
<li><code>move position X to position Y</code> means that the letter which is at index <code>X</code> should be <b>removed</b> from the string, then <b>inserted</b> such that it ends up at index <code>Y</code>.</li>
</ul>
<p>For example, suppose you start with <code>abcde</code> and perform the following operations:</p>
<ul>
<li><code>swap position 4 with position 0</code> swaps the first and last letters, producing the input for the next step, <code>ebcda</code>.</li>
<li><code>swap letter d with letter b</code> swaps the positions of <code>d</code> and <code>b</code>: <code>edcba</code>.</li>
<li><code>reverse positions 0 through 4</code> causes the entire string to be reversed, producing <code>abcde</code>.</li>
<li><code>rotate left 1 step</code> shifts all letters left one position, causing the first letter to wrap to the end of the string: <code>bcdea</code>.</li>
<li><code>move position 1 to position 4</code> removes the letter at position <code>1</code> (<code>c</code>), then inserts it at position <code>4</code> (the end of the string): <code>bdeac</code>.</li>
<li><code>move position 3 to position 0</code> removes the letter at position <code>3</code> (<code>a</code>), then inserts it at position <code>0</code> (the front of the string): <code>abdec</code>.</li>
<li><code>rotate based on position of letter b</code> finds the index of letter <code>b</code> (<code>1</code>), then rotates the string right once plus a number of times equal to that index (<code>2</code>): <code>ecabd</code>.</li>
<li><code>rotate based on position of letter d</code> finds the index of letter <code>d</code> (<code>4</code>), then rotates the string right once, plus a number of times equal to that index, plus an additional time because the index was at least <code>4</code>, for a total of <code>6</code> right rotations: <code>decab</code>.</li>
</ul>


</article>

<form method="post" action="21/answer"><input type="hidden" name="level" value="1"></form>