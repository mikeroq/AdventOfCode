<article class="day-desc"><h2>--- Day 9: Sensor Boost ---</h2><p>You've just said goodbye to the rebooted rover and left Mars when you receive a faint distress signal coming from the asteroid belt.  It must be the Ceres monitoring station!</p>
<p>In order to lock on to the signal, you'll need to boost your sensors. The Elves send up the latest <b>BOOST</b> program - Basic Operation Of System Test.</p>
<p>While BOOST (your puzzle input) is capable of boosting your sensors, for <span title="Oh sure, NOW safety is a priority.">tenuous safety reasons</span>, it refuses to do so until the computer it runs on passes some checks to demonstrate it is a <b>complete Intcode computer</b>.</p>
<p><a href="5">Your existing Intcode computer</a> is missing one key feature: it needs support for parameters in <b>relative mode</b>.</p>
<p>Parameters in mode <code>2</code>, <b>relative mode</b>, behave very similarly to parameters in <b>position mode</b>: the parameter is interpreted as a position.  Like position mode, parameters in relative mode can be read from or written to.</p>
<p>The important difference is that relative mode parameters don't count from address <code>0</code>.  Instead, they count from a value called the <b>relative base</b>. The <b>relative base</b> starts at <code>0</code>.</p>
<p>The address a relative mode parameter refers to is itself <b>plus</b> the current <b>relative base</b>. When the relative base is <code>0</code>, relative mode parameters and position mode parameters with the same value refer to the same address.</p>
<p>For example, given a relative base of <code>50</code>, a relative mode parameter of <code>-7</code> refers to memory address <code>50 + -7 = <b>43</b></code>.</p>
<p>The relative base is modified with the <b>relative base offset</b> instruction:</p>
<ul>
<li>Opcode <code>9</code> <b>adjusts the relative base</b> by the value of its only parameter. The relative base increases (or decreases, if the value is negative) by the value of the parameter.</li>
</ul>
<p>For example, if the relative base is <code>2000</code>, then after the instruction <code>109,19</code>, the relative base would be <code>2019</code>. If the next instruction were <code>204,-34</code>, then the value at address <code>1985</code> would be output.</p>
<p>Your Intcode computer will also need a few other capabilities:</p>
<ul>
<li>The computer's available memory should be much larger than the initial program. Memory beyond the initial program starts with the value <code>0</code> and can be read or written like any other memory. (It is invalid to try to access memory at a negative address, though.)</li>
<li>The computer should have support for large numbers. Some instructions near the beginning of the BOOST program will verify this capability.</li>
</ul>
<p>Here are some example programs that use these features:</p>
<ul>
<li><code>109,1,204,-1,1001,100,1,100,1008,100,16,101,1006,101,0,99</code> takes no input and produces a <a href="https://en.wikipedia.org/wiki/Quine_(computing)">copy of itself</a> as output.</li>
<li><code>1102,34915192,34915192,7,4,7,99,0</code> should output a 16-digit number.</li>
<li><code>104,1125899906842624,99</code> should output the large number in the middle.</li>
</ul>


</article>

<form method="post" action="9/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>