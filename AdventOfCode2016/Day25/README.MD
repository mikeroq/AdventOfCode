<article class="day-desc"><h2>--- Day 25: Clock Signal ---</h2><p>You open the door and find yourself on the roof. The city sprawls away from you for miles and miles.</p>
<p>There's not much time now - it's already Christmas, but you're nowhere near the North Pole, much too far to deliver these stars to the sleigh in time.</p>
<p>However, maybe the <b>huge antenna</b> up here can offer a solution. After all, the sleigh doesn't need the stars, exactly; it needs the timing data they provide, and you happen to have a massive signal generator right here.</p>
<p>You connect the stars you have to your prototype computer, connect that to the antenna, and begin the transmission.</p>
<p><span title="Then again, if something ever works on the first try, you should be *very* suspicious.">Nothing happens.</span></p>
<p>You call the service number printed on the side of the antenna and quickly explain the situation. "I'm not sure what kind of equipment you have connected over there," he says, "but you need a clock signal." You try to explain that this is a signal for a clock.</p>
<p>"No, no, a <a href="https://en.wikipedia.org/wiki/Clock_signal">clock signal</a> - timing information so the antenna computer knows how to read the data you're sending it. An endless, alternating pattern of <code>0</code>, <code>1</code>, <code>0</code>, <code>1</code>, <code>0</code>, <code>1</code>, <code>0</code>, <code>1</code>, <code>0</code>, <code>1</code>...." He trails off.</p>
<p>You ask if the antenna can handle a clock signal at the frequency you would need to use for the data from the stars. "There's <b>no way</b> it can! The only antenna we've installed capable of <b>that</b> is on top of a top-secret Easter Bunny installation, and you're <b>definitely</b> not-" You hang up the phone.</p>
<p>You've extracted the antenna's clock signal generation <a href="12">assembunny</a> code (your puzzle input); it looks mostly compatible with code you worked on <a href="23">just recently</a>.</p>
<p>This antenna code, being a signal generator, uses one extra instruction:</p>
<ul>
<li><code>out x</code> <b>transmits</b> <code>x</code> (either an integer or the <b>value</b> of a register) as the next value for the clock signal.</li>
</ul>


</article>

<form method="post" action="25/answer"><input type="hidden" name="level" value="1"></form>