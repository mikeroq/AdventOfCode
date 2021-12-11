<article class="day-desc"><h2>--- Day 24: It Hangs in the Balance ---</h2><p>It's Christmas Eve, and Santa is loading up the sleigh for this year's deliveries.  However, there's one small problem: he can't get the sleigh to balance.  If it isn't balanced, he can't defy physics, and nobody gets presents this year.</p>
<p>No pressure.</p>
<p>Santa has provided you a list of the weights of every package he needs to fit on the sleigh.  The packages need to be split into <b>three groups of exactly the same weight</b>, and every package has to fit.  The first group goes in the passenger compartment of the sleigh, and the second and third go in containers on either side.  Only when all three groups weigh exactly the same amount will the sleigh be able to fly.  Defying physics has rules, you know!</p>
<p>Of course, that's not the only problem.  The first group - the one going in the passenger compartment - needs <b>as few packages as possible</b> so that Santa has some legroom left over.  It doesn't matter how many packages are in either of the other two groups, so long as all of the groups weigh the same.</p>
<p>Furthermore, Santa tells you, if there are multiple ways to arrange the packages such that the fewest possible are in the first group, you need to choose the way where the first group has <b>the smallest quantum entanglement</b> to reduce the chance of any <span title="Santa does not elaborate on what he means by this, but the cringe he makes indicates that it wouldn't be pretty.">"complications"</span>.  The quantum entanglement of a group of packages is the <a href="https://en.wikipedia.org/wiki/Product_%28mathematics%29">product</a> of their weights, that is, the value you get when you multiply their weights together.  Only consider quantum entanglement if the first group has the fewest possible number of packages in it and all groups weigh the same amount.</p>
<p>For example, suppose you have ten packages with weights <code>1</code> through <code>5</code> and <code>7</code> through <code>11</code>.  For this situation, some of the unique first groups, their quantum entanglements, and a way to divide the remaining packages are as follows:</p>
<pre><code>Group 1;             Group 2; Group 3
11 9       (QE= 99); 10 8 2;  7 5 4 3 1
10 9 1     (QE= 90); 11 7 2;  8 5 4 3
10 8 2     (QE=160); 11 9;    7 5 4 3 1
10 7 3     (QE=210); 11 9;    8 5 4 2 1
10 5 4 1   (QE=200); 11 9;    8 7 3 2
10 5 3 2   (QE=300); 11 9;    8 7 4 1
10 4 3 2 1 (QE=240); 11 9;    8 7 5
9 8 3      (QE=216); 11 7 2;  10 5 4 1
9 7 4      (QE=252); 11 8 1;  10 5 3 2
9 5 4 2    (QE=360); 11 8 1;  10 7 3
8 7 5      (QE=280); 11 9;    10 4 3 2 1
8 5 4 3    (QE=480); 11 9;    10 7 2 1
7 5 4 3 1  (QE=420); 11 9;    10 8 2
</code></pre>


</article>

<form method="post" action="24/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>2015 Day24 - First Answer: 0
2015 Day24 - Second Answer: 0
2015 Day24 - Execution finished in 0.00080704689025879 seconds.
</code></pre>
<pre><code>*** TESTING 2015 DAY Day24 ***
PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

Day24 (mikeroq\AdventOfCode\AdventOfCode2015\Day24\Day24)
 ✔ Part 1 equals 0
 ✔ Part 2 equals 0

Time: 00:00.008, Memory: 4.00 MB

OK (2 tests, 2 assertions)
</code></pre>