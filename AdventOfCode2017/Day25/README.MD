<article class="day-desc"><h2>--- Day 25: The Halting Problem ---</h2><p>Following the twisty passageways deeper and deeper into the CPU, you finally reach the <span title="Get it? CPU core?">core</span> of the computer. Here, in the expansive central chamber, you find a grand apparatus that fills the entire room, suspended nanometers above your head.</p>
<p>You had always imagined CPUs to be noisy, chaotic places, bustling with activity. Instead, the room is quiet, motionless, and dark.</p>
<p>Suddenly, you and the CPU's <b>garbage collector</b> startle each other. "It's not often we get  many visitors here!", he says. You inquire about the stopped machinery.</p>
<p>"It stopped milliseconds ago; not sure why. I'm a garbage collector, not a doctor." You ask what the machine is for.</p>
<p>"Programs these days, don't know their origins. That's the <b>Turing machine</b>! It's what makes the whole computer work." You try to explain that Turing machines are merely models of computation, but he cuts you off. "No, see, that's just what they <b>want</b> you to think. Ultimately, inside every CPU, there's a Turing machine driving the whole thing! Too bad this one's broken. <a href="https://www.youtube.com/watch?v=cTwZZz0HV8I">We're doomed!</a>"</p>
<p>You ask how you can help. "Well, unfortunately, the only way to get the computer running again would be to create a whole new Turing machine from scratch, but there's no <b>way</b> you can-" He notices the look on your face, gives you a curious glance, shrugs, and goes back to sweeping the floor.</p>
<p>You find the <b>Turing machine blueprints</b> (your puzzle input) on a tablet in a nearby pile of debris. Looking back up at the broken Turing machine above, you can start to identify its parts:</p>
<ul>
<li>A <b>tape</b> which contains <code>0</code> repeated infinitely to the left and right.</li>
<li>A <b>cursor</b>, which can move left or right along the tape and read or write values at its current position.</li>
<li>A set of <b>states</b>, each containing rules about what to do based on the current value under the cursor.</li>
</ul>
<p>Each slot on the tape has two possible values: <code>0</code> (the starting value for all slots) and <code>1</code>. Based on whether the cursor is pointing at a <code>0</code> or a <code>1</code>, the current state says <b>what value to write</b> at the current position of the cursor, whether to <b>move the cursor</b> left or right one slot, and <b>which state to use next</b>.</p>
<p>For example, suppose you found the following blueprint:</p>
<pre><code>Begin in state A.
Perform a diagnostic checksum after 6 steps.

In state A:
  If the current value is 0:
    - Write the value 1.
    - Move one slot to the right.
    - Continue with state B.
  If the current value is 1:
    - Write the value 0.
    - Move one slot to the left.
    - Continue with state B.

In state B:
  If the current value is 0:
    - Write the value 1.
    - Move one slot to the left.
    - Continue with state A.
  If the current value is 1:
    - Write the value 1.
    - Move one slot to the right.
    - Continue with state A.
</code></pre>
<p>Running it until the number of steps required to take the listed <b>diagnostic checksum</b> would result in the following tape configurations (with the <b>cursor</b> marked in square brackets):</p>
<pre><code>... 0  0  0 [0] 0  0 ... (before any steps; about to run state A)
... 0  0  0  1 [0] 0 ... (after 1 step;     about to run state B)
... 0  0  0 [1] 1  0 ... (after 2 steps;    about to run state A)
... 0  0 [0] 0  1  0 ... (after 3 steps;    about to run state B)
... 0 [0] 1  0  1  0 ... (after 4 steps;    about to run state A)
... 0  1 [1] 0  1  0 ... (after 5 steps;    about to run state B)
... 0  1  1 [0] 1  0 ... (after 6 steps;    about to run state A)
</code></pre>


</article>

<form method="post" action="25/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>