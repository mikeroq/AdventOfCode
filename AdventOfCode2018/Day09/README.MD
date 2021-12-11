<article class="day-desc"><h2>--- Day 9: Marble Mania ---</h2><p>You talk to the Elves while you wait for your navigation system to <span title="Do you have any idea how long it takes to load navigation data for all of time and space?!">initialize</span>. To pass the time, they introduce you to their favorite <a href="https://en.wikipedia.org/wiki/Marble_(toy)">marble</a> game.</p>
<p>The Elves play this game by taking turns arranging the marbles in a <b>circle</b> according to very particular rules. The marbles are numbered starting with <code>0</code> and increasing by <code>1</code> until every marble has a number.</p>
<p>First, the marble numbered <code>0</code> is placed in the circle. At this point, while it contains only a single marble, it is still a circle: the marble is both clockwise from itself and counter-clockwise from itself. This marble is designated the <b>current marble</b>.</p>
<p>Then, each Elf takes a turn placing the <b>lowest-numbered remaining marble</b> into the circle between the marbles that are <code>1</code> and <code>2</code> marbles <b>clockwise</b> of the current marble. (When the circle is large enough, this means that there is one marble between the marble that was just placed and the current marble.) The marble that was just placed then becomes the <b>current marble</b>.</p>
<p>However, if the marble that is about to be placed has a number which is a multiple of <code>23</code>, <b>something entirely different happens</b>. First, the current player keeps the marble they would have placed, adding it to their <b>score</b>. In addition, the marble <code>7</code> marbles <b>counter-clockwise</b> from the current marble is <b>removed</b> from the circle and <b>also</b> added to the current player's score. The marble located immediately <b>clockwise</b> of the marble that was removed becomes the new <b>current marble</b>.</p>
<p>For example, suppose there are 9 players. After the marble with value <code>0</code> is placed in the middle, each player (shown in square brackets) takes a turn. The result of each of those turns would produce circles of marbles like this, where clockwise is to the right and the resulting current marble is in parentheses:</p>
<pre><code>[-] <b>(0)</b>
[1]  0<b> (1)</b>
[2]  0<b> (2)</b> 1 
[3]  0  2  1<b> (3)</b>
[4]  0<b> (4)</b> 2  1  3 
[5]  0  4  2<b> (5)</b> 1  3 
[6]  0  4  2  5  1<b> (6)</b> 3 
[7]  0  4  2  5  1  6  3<b> (7)</b>
[8]  0<b> (8)</b> 4  2  5  1  6  3  7 
[9]  0  8  4<b> (9)</b> 2  5  1  6  3  7 
[1]  0  8  4  9  2<b>(10)</b> 5  1  6  3  7 
[2]  0  8  4  9  2 10  5<b>(11)</b> 1  6  3  7 
[3]  0  8  4  9  2 10  5 11  1<b>(12)</b> 6  3  7 
[4]  0  8  4  9  2 10  5 11  1 12  6<b>(13)</b> 3  7 
[5]  0  8  4  9  2 10  5 11  1 12  6 13  3<b>(14)</b> 7 
[6]  0  8  4  9  2 10  5 11  1 12  6 13  3 14  7<b>(15)</b>
[7]  0<b>(16)</b> 8  4  9  2 10  5 11  1 12  6 13  3 14  7 15 
[8]  0 16  8<b>(17)</b> 4  9  2 10  5 11  1 12  6 13  3 14  7 15 
[9]  0 16  8 17  4<b>(18)</b> 9  2 10  5 11  1 12  6 13  3 14  7 15 
[1]  0 16  8 17  4 18  9<b>(19)</b> 2 10  5 11  1 12  6 13  3 14  7 15 
[2]  0 16  8 17  4 18  9 19  2<b>(20)</b>10  5 11  1 12  6 13  3 14  7 15 
[3]  0 16  8 17  4 18  9 19  2 20 10<b>(21)</b> 5 11  1 12  6 13  3 14  7 15 
[4]  0 16  8 17  4 18  9 19  2 20 10 21  5<b>(22)</b>11  1 12  6 13  3 14  7 15 
[5]  0 16  8 17  4 18<b>(19)</b> 2 20 10 21  5 22 11  1 12  6 13  3 14  7 15 
[6]  0 16  8 17  4 18 19  2<b>(24)</b>20 10 21  5 22 11  1 12  6 13  3 14  7 15 
[7]  0 16  8 17  4 18 19  2 24 20<b>(25)</b>10 21  5 22 11  1 12  6 13  3 14  7 15
</code></pre>
<p>The goal is to be the <b>player with the highest score</b> after the last marble is used up. Assuming the example above ends after the marble numbered <code>25</code>, the winning score is <code>23+9=<b>32</b></code> (because player 5 kept marble <code>23</code> and removed marble <code>9</code>, while no other player got any points in this very short example game).</p>

<ul>
<li><code>10</code> players; last marble is worth <code>1618</code> points: high score is <b><code>8317</code></b></li>
<li><code>13</code> players; last marble is worth <code>7999</code> points: high score is <b><code>146373</code></b></li>
<li><code>17</code> players; last marble is worth <code>1104</code> points: high score is <b><code>2764</code></b></li>
<li><code>21</code> players; last marble is worth <code>6111</code> points: high score is <b><code>54718</code></b></li>
<li><code>30</code> players; last marble is worth <code>5807</code> points: high score is <b><code>37305</code></b></li>
</ul>

</article>

<form method="post" action="9/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>