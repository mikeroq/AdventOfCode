<article class="day-desc"><h2>--- Day 8: Handheld Halting ---</h2><p>Your flight to the major airline hub reaches cruising altitude without incident.  While you consider checking the in-flight menu for one of those drinks that come with a little umbrella, you are interrupted by the kid sitting next to you.</p>
<p>Their <a target="_blank" href="https://en.wikipedia.org/wiki/Handheld_game_console">handheld game console</a> won't turn on! They ask if you can take a look.</p>
<p>You narrow the problem down to a strange <b>infinite loop</b> in the <span title="A trendy new line of encrypted footwear?">boot code</span> (your puzzle input) of the device. You should be able to fix it, but first you need to be able to run the code in isolation.</p>
<p>The boot code is represented as a text file with one <b>instruction</b> per line of text. Each instruction consists of an <b>operation</b> (<code>acc</code>, <code>jmp</code>, or <code>nop</code>) and an <b>argument</b> (a signed number like <code>+4</code> or <code>-20</code>).</p>
<ul>
<li><code>acc</code> increases or decreases a single global value called the <b>accumulator</b> by the value given in the argument. For example, <code>acc +7</code> would increase the accumulator by 7. The accumulator starts at <code>0</code>. After an <code>acc</code> instruction, the instruction immediately below it is executed next.</li>
<li><code>jmp</code> <b>jumps</b> to a new instruction relative to itself. The next instruction to execute is found using the argument as an <b>offset</b> from the <code>jmp</code> instruction; for example, <code>jmp +2</code> would skip the next instruction, <code>jmp +1</code> would continue to the instruction immediately below it, and <code>jmp -20</code> would cause the instruction 20 lines above to be executed next.</li>
<li><code>nop</code> stands for <b>No OPeration</b> - it does nothing.  The instruction immediately below it is executed next.</li>
</ul>
<p>For example, consider the following program:</p>
<pre><code>nop +0
acc +1
jmp +4
acc +3
jmp -3
acc -99
acc +1
jmp -4
acc +6
</code></pre>
<p>These instructions are visited in this order:</p>
<pre><code>nop +0  | 1
acc +1  | 2, 8(!)
jmp +4  | 3
acc +3  | 6
jmp -3  | 7
acc -99 |
acc +1  | 4
jmp -4  | 5
acc +6  |
</code></pre>
<p>First, the <code>nop +0</code> does nothing. Then, the accumulator is increased from 0 to 1 (<code>acc +1</code>) and <code>jmp +4</code> sets the next instruction to the other <code>acc +1</code> near the bottom. After it increases the accumulator from 1 to 2, <code>jmp -4</code> executes, setting the next instruction to the only <code>acc +3</code>. It sets the accumulator to 5, and <code>jmp -3</code> causes the program to continue back at the first <code>acc +1</code>.</p>



</article>
<p>Your puzzle answer was <code>1594</code>.</p><article class="day-desc"><h2 id="part2">--- Part Two ---</h2><p>After some careful analysis, you believe that <b>exactly one instruction is corrupted</b>.</p>
<p>Somewhere in the program, <b>either</b> a <code>jmp</code> is supposed to be a <code>nop</code>, <b>or</b> a <code>nop</code> is supposed to be a <code>jmp</code>. (No <code>acc</code> instructions were harmed in the corruption of this boot code.)</p>
<p>The program is supposed to terminate by <b>attempting to execute an instruction immediately after the last instruction in the file</b>. By changing exactly one <code>jmp</code> or <code>nop</code>, you can repair the boot code and make it terminate correctly.</p>
<p>For example, consider the same program from above:</p>
<pre><code>nop +0
acc +1
jmp +4
acc +3
jmp -3
acc -99
acc +1
jmp -4
acc +6
</code></pre>
<p>If you change the first instruction from <code>nop +0</code> to <code>jmp +0</code>, it would create a single-instruction infinite loop, never leaving that instruction.  If you change almost any of the <code>jmp</code> instructions, the program will still eventually find another <code>jmp</code> instruction and loop forever.</p>
<p>However, if you change the second-to-last instruction (from <code>jmp -4</code> to <code>nop -4</code>), the program terminates! The instructions are visited in this order:</p>
<pre><code>nop +0  | 1
acc +1  | 2
jmp +4  | 3
acc +3  |
jmp -3  |
acc -99 |
acc +1  | 4
<b>nop</b> -4  | 5
acc +6  | 6
</code></pre>


</article>
<p>Your puzzle answer was <code>758</code>.</p><p class="day-success"><b>Both parts of this puzzle are complete! They provide two gold stars: 🌟🌟</b></p>
<h2>--- Results ---</h2>
<pre><code>
Fatal error: Declaration of mikeroq\AdventOfCode\AdventOfCode2020\Day08\Day08::findFirstAnswer() must be compatible with mikeroq\AdventOfCode\Shared\Day::findFirstAnswer(): int in C:\Code\AdventOfCode\AdventOfCode2020\Day08\Day08.php on line 95
</code></pre>
<pre><code>*** TESTING 2020 DAY Day08 ***
PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

Day08 (mikeroq\AdventOfCode\AdventOfCode2020\Day08\Day08)
 ✘ Part 1 test input equals 5
   │
   │ Error: Class "mikeroq\AdventOfCode\AdventOfCode2020\Day08\Day09" not found
   │
   │ C:\Code\AdventOfCode\AdventOfCode2020\Day08\Day08Test.php:10
   │

 ✘ Part 2 test input equals 8
   │
   │ Error: Class "mikeroq\AdventOfCode\AdventOfCode2020\Day08\Day09" not found
   │
   │ C:\Code\AdventOfCode\AdventOfCode2020\Day08\Day08Test.php:18
   │

 ✘ Part 1 equals real answer 1594
   │
   │ Error: Class "mikeroq\AdventOfCode\AdventOfCode2020\Day08\Day09" not found
   │
   │ C:\Code\AdventOfCode\AdventOfCode2020\Day08\Day08Test.php:27
   │

 ✘ Part 2 equals real answer 758
   │
   │ Error: Class "mikeroq\AdventOfCode\AdventOfCode2020\Day08\Day09" not found
   │
   │ C:\Code\AdventOfCode\AdventOfCode2020\Day08\Day08Test.php:35
   │

Time: 00:00.027, Memory: 6.00 MB


ERRORS!
Tests: 4, Assertions: 0, Errors: 4.
</code></pre>