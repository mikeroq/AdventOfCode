<article class="day-desc"><h2>--- Day 2: Rock Paper Scissors ---</h2><p>The Elves begin to set up camp on the beach. To decide whose tent gets to be closest to the snack storage, a giant <a href="https://en.wikipedia.org/wiki/Rock_paper_scissors" target="_blank">Rock Paper Scissors</a> tournament is already in progress.</p>
<p>Rock Paper Scissors is a game between two players. Each game contains many rounds; in each round, the players each simultaneously choose one of Rock, Paper, or Scissors using a hand shape. Then, a winner for that round is selected: Rock defeats Scissors, Scissors defeats Paper, and Paper defeats Rock. If both players choose the same shape, the round instead ends in a draw.</p>
<p>Appreciative of your help yesterday, one Elf gives you an <b>encrypted strategy guide</b> (your puzzle input) that they say will be sure to help you win. "The first column is what your opponent is going to play: <code>A</code> for Rock, <code>B</code> for Paper, and <code>C</code> for Scissors. The second column--" Suddenly, the Elf is called away to help with someone's tent.</p>
<p>The second column, <span title="Why do you keep guessing?!">you reason</span>, must be what you should play in response: <code>X</code> for Rock, <code>Y</code> for Paper, and <code>Z</code> for Scissors. Winning every time would be suspicious, so the responses must have been carefully chosen.</p>
<p>The winner of the whole tournament is the player with the highest score. Your <b>total score</b> is the sum of your scores for each round. The score for a single round is the score for the <b>shape you selected</b> (1 for Rock, 2 for Paper, and 3 for Scissors) plus the score for the <b>outcome of the round</b> (0 if you lost, 3 if the round was a draw, and 6 if you won).</p>
<p>Since you can't be sure if the Elf is trying to help you or trick you, you should calculate the score you would get if you were to follow the strategy guide.</p>
<p>For example, suppose you were given the following strategy guide:</p>
<pre><code>A Y
B X
C Z
</code></pre>
<p>This strategy guide predicts and recommends the following:</p>
<ul>
<li>In the first round, your opponent will choose Rock (<code>A</code>), and you should choose Paper (<code>Y</code>). This ends in a win for you with a score of <b>8</b> (2 because you chose Paper + 6 because you won).</li>
<li>In the second round, your opponent will choose Paper (<code>B</code>), and you should choose Rock (<code>X</code>). This ends in a loss for you with a score of <b>1</b> (1 + 0).</li>
<li>The third round is a draw with both players choosing Scissors, giving you a score of 3 + 3 = <b>6</b>.</li>
</ul>


</article>
<p>Your puzzle answer was <code>10941</code>.</p><article class="day-desc"><h2 id="part2">--- Part Two ---</h2><p>The Elf finishes helping with the tent and sneaks back over to you. "Anyway, the second column says how the round needs to end: <code>X</code> means you need to lose, <code>Y</code> means you need to end the round in a draw, and <code>Z</code> means you need to win. Good luck!"</p>
<p>The total score is still calculated in the same way, but now you need to figure out what shape to choose so the round ends as indicated. The example above now goes like this:</p>
<ul>
<li>In the first round, your opponent will choose Rock (<code>A</code>), and you need the round to end in a draw (<code>Y</code>), so you also choose Rock. This gives you a score of 1 + 3 = <b>4</b>.</li>
<li>In the second round, your opponent will choose Paper (<code>B</code>), and you choose Rock so you lose (<code>X</code>) with a score of 1 + 0 = <b>1</b>.</li>
<li>In the third round, you will defeat your opponent's Scissors with Rock for a score of 1 + 6 = <b>7</b>.</li>
</ul>


</article>
<p>Your puzzle answer was <code>13071</code>.</p><p class="day-success"><b>Both parts of this puzzle are complete! They provide two gold stars: 🌟🌟</b></p>
<h2>--- Results ---</h2>
<pre><code>2022 Day02 - First Answer: 10941
2022 Day02 - Second Answer: 13071
2022 Day02 - Execution finished in 0.0032579898834229 seconds.
</code></pre>
<pre><code>*** TESTING 2022 DAY Day02 ***
PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

Day02 (mikeroq\AdventOfCode\AdventOfCode2022\Day02\Day02)
 ✔ Part 1 example equals 15
 ✔ Part 1 equals 10941
 ✔ Part 2 example equals 12
 ✔ Part 2 equals 13071

Time: 00:00.009, Memory: 6.00 MB

OK (4 tests, 4 assertions)
</code></pre>