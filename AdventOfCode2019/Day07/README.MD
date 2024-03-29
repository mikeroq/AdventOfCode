<article class="day-desc"><h2>--- Day 7: Amplification Circuit ---</h2><p>Based on the navigational maps, you're going to need to send more power to your ship's thrusters to reach Santa in time. To do this, you'll need to configure a series of <a href="https://en.wikipedia.org/wiki/Amplifier">amplifiers</a> already installed on the ship.</p>
<p>There are five <span title="As you can see, I know exactly how rockets work.">amplifiers connected in series</span>; each one receives an input signal and produces an output signal.  They are connected such that the first amplifier's output leads to the second amplifier's input, the second amplifier's output leads to the third amplifier's input, and so on.  The first amplifier's input value is <code>0</code>, and the last amplifier's output leads to your ship's thrusters.</p>
<pre><code>    O-------O  O-------O  O-------O  O-------O  O-------O
0 -&gt;| Amp A |-&gt;| Amp B |-&gt;| Amp C |-&gt;| Amp D |-&gt;| Amp E |-&gt; (to thrusters)
    O-------O  O-------O  O-------O  O-------O  O-------O
</code></pre>
<p>The Elves have sent you some <b>Amplifier Controller Software</b> (your puzzle input), a program that should run on your <a href="5">existing Intcode computer</a>. Each amplifier will need to run a copy of the program.</p>
<p>When a copy of the program starts running on an amplifier, it will first use an input instruction to ask the amplifier for its current <b>phase setting</b> (an integer from <code>0</code> to <code>4</code>). Each phase setting is used <b>exactly once</b>, but the Elves can't remember which amplifier needs which phase setting.</p>
<p>The program will then call another input instruction to get the amplifier's input signal, compute the correct output signal, and supply it back to the amplifier with an output instruction. (If the amplifier has not yet received an input signal, it waits until one arrives.)</p>
<p>Your job is to <b>find the largest output signal that can be sent to the thrusters</b> by trying every possible combination of phase settings on the amplifiers. Make sure that memory is not shared or reused between copies of the program.</p>
<p>For example, suppose you want to try the phase setting sequence <code>3,1,2,4,0</code>, which would mean setting amplifier <code>A</code> to phase setting <code>3</code>, amplifier <code>B</code> to setting <code>1</code>, <code>C</code> to <code>2</code>, <code>D</code> to <code>4</code>, and <code>E</code> to <code>0</code>. Then, you could determine the output signal that gets sent from amplifier <code>E</code> to the thrusters with the following steps:</p>
<ul>
<li>Start the copy of the amplifier controller software that will run on amplifier <code>A</code>. At its first input instruction, provide it the amplifier's phase setting, <code>3</code>.  At its second input instruction, provide it the input signal, <code>0</code>.  After some calculations, it will use an output instruction to indicate the amplifier's output signal.</li>
<li>Start the software for amplifier <code>B</code>. Provide it the phase setting (<code>1</code>) and then whatever output signal was produced from amplifier <code>A</code>. It will then produce a new output signal destined for amplifier <code>C</code>.</li>
<li>Start the software for amplifier <code>C</code>, provide the phase setting (<code>2</code>) and the value from amplifier <code>B</code>, then collect its output signal.</li>
<li>Run amplifier <code>D</code>'s software, provide the phase setting (<code>4</code>) and input value, and collect its output signal.</li>
<li>Run amplifier <code>E</code>'s software, provide the phase setting (<code>0</code>) and input value, and collect its output signal.</li>
</ul>
<p>The final output signal from amplifier <code>E</code> would be sent to the thrusters. However, this phase setting sequence may not have been the best one; another sequence might have sent a higher signal to the thrusters.</p>

<ul>
<li><pre><code>3,15,3,16,1002,16,10,16,1,16,15,15,4,15,99,0,0</code></pre></li>
<li><pre><code>3,23,3,24,1002,24,10,24,1002,23,-1,23,<br>101,5,23,23,1,24,23,23,4,23,99,0,0</code></pre></li>
<li><pre><code>3,31,3,32,1002,32,10,32,1001,31,-2,31,1007,31,0,33,<br>1002,33,7,33,1,33,31,31,1,32,31,31,4,31,99,0,0,0</code></pre></li>
</ul>

</article>

<form method="post" action="7/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>