<article class="day-desc"><h2>--- Day 5: Sunny with a Chance of Asteroids ---</h2><p>You're starting to sweat as the ship makes its way toward Mercury.  The Elves suggest that you get the air conditioner working by upgrading your ship computer to support the Thermal Environment Supervision Terminal.</p>
<p>The Thermal Environment Supervision Terminal (TEST) starts by running a <b>diagnostic program</b> (your puzzle input).  The TEST diagnostic program will run on <a href="2">your existing Intcode computer</a> after a few modifications:</p>
<p><b>First</b>, you'll need to add <b>two new instructions</b>:</p>
<ul>
<li>Opcode <code>3</code> takes a single integer as <b>input</b> and saves it to the position given by its only parameter. For example, the instruction <code>3,50</code> would take an input value and store it at address <code>50</code>.</li>
<li>Opcode <code>4</code> <b>outputs</b> the value of its only parameter. For example, the instruction <code>4,50</code> would output the value at address <code>50</code>.</li>
</ul>
<p>Programs that use these instructions will come with documentation that explains what should be connected to the input and output. The program <code>3,0,4,0,99</code> outputs whatever it gets as input, then halts.</p>
<p><b>Second</b>, you'll need to add support for <b>parameter modes</b>:</p>
<p>Each parameter of an instruction is handled based on its parameter mode.  Right now, your ship computer already understands parameter mode <code>0</code>, <b>position mode</b>, which causes the parameter to be interpreted as a <b>position</b> - if the parameter is <code>50</code>, its value is <b>the value stored at address <code>50</code> in memory</b>. Until now, all parameters have been in position mode.</p>
<p>Now, your ship computer will also need to handle parameters in mode <code>1</code>, <b>immediate mode</b>. In immediate mode, a parameter is interpreted as a <b>value</b> - if the parameter is <code>50</code>, its value is simply <b><code>50</code></b>.</p>
<p>Parameter modes are stored in the same value as the instruction's opcode.  The opcode is a two-digit number based only on the ones and tens digit of the value, that is, the opcode is the rightmost two digits of the first value in an instruction. Parameter modes are single digits, one per parameter, read right-to-left from the opcode: the first parameter's mode is in the hundreds digit, the second parameter's mode is in the thousands digit, the third parameter's mode is in the ten-thousands digit, and so on. Any missing modes are <code>0</code>.</p>
<p>For example, consider the program <code>1002,4,3,4,33</code>.</p>
<p>The first instruction, <code>1002,4,3,4</code>, is a <b>multiply</b> instruction - the rightmost two digits of the first value, <code>02</code>, indicate opcode <code>2</code>, multiplication.  Then, going right to left, the parameter modes are <code>0</code> (hundreds digit), <code>1</code> (thousands digit), and <code>0</code> (ten-thousands digit, not present and therefore zero):</p>
<pre><code>ABCDE
 1002

DE - two-digit opcode,      02 == opcode 2
 C - mode of 1st parameter,  0 == position mode
 B - mode of 2nd parameter,  1 == immediate mode
 A - mode of 3rd parameter,  0 == position mode,
                                  omitted due to being a leading zero
</code></pre>
<p>This instruction multiplies its first two parameters.  The first parameter, <code>4</code> in position mode, works like it did before - its value is the value stored at address <code>4</code> (<code>33</code>). The second parameter, <code>3</code> in immediate mode, simply has value <code>3</code>. The result of this operation, <code>33 * 3 = 99</code>, is written according to the third parameter, <code>4</code> in position mode, which also works like it did before - <code>99</code> is written to address <code>4</code>.</p>
<p>Parameters that an instruction writes to will <b>never be in immediate mode</b>.</p>
<p><b>Finally</b>, some notes:</p>
<ul>
<li>It is important to remember that the instruction pointer should increase by <b>the number of values in the instruction</b> after the instruction finishes. Because of the new instructions, this amount is no longer always <code>4</code>.</li>
<li>Integers can be negative: <code>1101,100,-1,4,0</code> is a valid program (find <code>100 + -1</code>, store the result in position <code>4</code>).</li>
</ul>
<p>The TEST diagnostic program will start by requesting from the user the ID of the system to test by running an <b>input</b> instruction - provide it <code>1</code>, the ID for the ship's air conditioner unit.</p>



</article>

<form method="post" action="5/answer"><input type="hidden" name="level" value="1"></form>