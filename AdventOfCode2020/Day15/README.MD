<article class="day-desc"><h2>--- Day 15: Rambunctious Recitation ---</h2><p>You catch the airport shuttle and try to book a new flight to your vacation island. Due to the storm, all direct flights have been cancelled, but a route is available to get around the storm. You take it.</p>
<p>While you wait for your flight, you decide to check in with the Elves back at the North Pole. They're playing a <b>memory game</b> and are <span title="Of course they are.">ever so excited</span> to explain the rules!</p>
<p>In this game, the players take turns saying <b>numbers</b>. They begin by taking turns reading from a list of <b>starting numbers</b> (your puzzle input). Then, each turn consists of considering the <b>most recently spoken number</b>:</p>
<ul>
<li>If that was the <b>first</b> time the number has been spoken, the current player says <b><code>0</code></b>.</li>
<li>Otherwise, the number had been spoken before; the current player announces <b>how many turns apart</b> the number is from when it was previously spoken.</li>
</ul>
<p>So, after the starting numbers, each turn results in that player speaking aloud either <b><code>0</code></b> (if the last number is new) or an <b>age</b> (if the last number is a repeat).</p>
<p>For example, suppose the starting numbers are <code>0,3,6</code>:</p>
<ul>
<li><b>Turn 1</b>: The <code>1</code>st number spoken is a starting number, <b><code>0</code></b>.</li>
<li><b>Turn 2</b>: The <code>2</code>nd number spoken is a starting number, <b><code>3</code></b>.</li>
<li><b>Turn 3</b>: The <code>3</code>rd number spoken is a starting number, <b><code>6</code></b>.</li>
<li><b>Turn 4</b>: Now, consider the last number spoken, <code>6</code>. Since that was the first time the number had been spoken, the <code>4</code>th number spoken is <b><code>0</code></b>.</li>
<li><b>Turn 5</b>: Next, again consider the last number spoken, <code>0</code>. Since it <b>had</b> been spoken before, the next number to speak is the difference between the turn number when it was last spoken (the previous turn, <code>4</code>) and the turn number of the time it was most recently spoken before then (turn <code>1</code>). Thus, the <code>5</code>th number spoken is <code>4 - 1</code>, <b><code>3</code></b>.</li>
<li><b>Turn 6</b>: The last number spoken, <code>3</code> had also been spoken before, most recently on turns <code>5</code> and <code>2</code>. So, the <code>6</code>th number spoken is <code>5 - 2</code>, <b><code>3</code></b>.</li>
<li><b>Turn 7</b>: Since <code>3</code> was just spoken twice in a row, and the last two turns are <code>1</code> turn apart, the <code>7</code>th number spoken is <b><code>1</code></b>.</li>
<li><b>Turn 8</b>: Since <code>1</code> is new, the <code>8</code>th number spoken is <b><code>0</code></b>.</li>
<li><b>Turn 9</b>: <code>0</code> was last spoken on turns <code>8</code> and <code>4</code>, so the <code>9</code>th number spoken is the difference between them, <b><code>4</code></b>.</li>
<li><b>Turn 10</b>: <code>4</code> is new, so the <code>10</code>th number spoken is <b><code>0</code></b>.</li>
</ul>
<p>(The game ends when the Elves get sick of playing or dinner is ready, whichever comes first.)</p>
<p>Their question for you is: what will be the <b><code>2020</code>th</b> number spoken? In the example above, the <code>2020</code>th number spoken will be <code>436</code>.</p>

<ul>
<li>Given the starting numbers <code>1,3,2</code>, the <code>2020</code>th number spoken is <code>1</code>.</li>
<li>Given the starting numbers <code>2,1,3</code>, the <code>2020</code>th number spoken is <code>10</code>.</li>
<li>Given the starting numbers <code>1,2,3</code>, the <code>2020</code>th number spoken is <code>27</code>.</li>
<li>Given the starting numbers <code>2,3,1</code>, the <code>2020</code>th number spoken is <code>78</code>.</li>
<li>Given the starting numbers <code>3,2,1</code>, the <code>2020</code>th number spoken is <code>438</code>.</li>
<li>Given the starting numbers <code>3,1,2</code>, the <code>2020</code>th number spoken is <code>1836</code>.</li>
</ul>

</article>

<form method="post" action="15/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>