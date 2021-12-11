<article class="day-desc"><h2>--- Day 25: Cryostasis ---</h2><p>As you approach Santa's ship, your sensors report two important details:</p>
<p>First, that you might be too late: the internal temperature is <span title="This is the same in Fahrenheit and Celsius."><code>-40</code> degrees</span>.</p>
<p>Second, that one faint life signature is somewhere on the ship.</p>
<p>The airlock door is locked with a code; your best option is to send in a small droid to investigate the situation.  You attach your ship to Santa's, break a small hole in the hull, and let the droid run in before you seal it up again. Before your ship starts freezing, you detach your ship and set it to automatically stay within range of Santa's ship.</p>
<p>This droid can follow basic instructions and report on its surroundings; you can communicate with it through an <a href="9">Intcode</a> program (your puzzle input) running on an <a href="17">ASCII-capable</a> computer.</p>
<p>As the droid moves through its environment, it will describe what it encounters.  When it says <code>Command?</code>, you can give it a single instruction terminated with a newline (ASCII code <code>10</code>). Possible instructions are:</p>
<ul>
<li><b>Movement</b> via <code>north</code>, <code>south</code>, <code>east</code>, or <code>west</code>.</li>
<li>To <b>take</b> an item the droid sees in the environment, use the command <code>take &lt;name of item&gt;</code>. For example, if the droid reports seeing a <code>red ball</code>, you can pick it up with <code>take red ball</code>.</li>
<li>To <b>drop</b> an item the droid is carrying, use the command <code>drop &lt;name of item&gt;</code>. For example, if the droid is carrying a <code>green ball</code>, you can drop it with <code>drop green ball</code>.</li>
<li>To get a <b>list of all of the items</b> the droid is currently carrying, use the command <code>inv</code> (for "inventory").</li>
</ul>



</article>

<form method="post" action="25/answer"><input type="hidden" name="level" value="1"></form>