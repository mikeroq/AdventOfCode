<article class="day-desc"><h2>--- Day 23: Crab Cups ---</h2><p>The small crab challenges <b>you</b> to a game! The crab is going to mix up some cups, and you have to predict where they'll end up.</p>
<p>The cups will be arranged in a circle and labeled <b>clockwise</b> (your puzzle input). For example, if your labeling were <code>32415</code>, there would be five cups in the circle; going clockwise around the circle from the first cup, the cups would be labeled <code>3</code>, <code>2</code>, <code>4</code>, <code>1</code>, <code>5</code>, and then back to <code>3</code> again.</p>
<p>Before the crab starts, it will designate the first cup in your list as the <b>current cup</b>. The crab is then going to do <b>100 moves</b>.</p>
<p>Each <b>move</b>, the crab does the following actions:</p>
<ul>
<li>The crab picks up the <b>three cups</b> that are immediately <b>clockwise</b> of the <b>current cup</b>. They are removed from the circle; cup spacing is adjusted as necessary to maintain the circle.</li>
<li>The crab selects a <b>destination cup</b>: the cup with a <b>label</b> equal to the <b>current cup's</b> label minus one. If this would select one of the cups that was just picked up, the crab will keep subtracting one until it finds a cup that wasn't just picked up. If at any point in this process the value goes below the lowest value on any cup's label, it <b>wraps around</b> to the highest value on any cup's label instead.</li>
<li>The crab places the cups it just picked up so that they are <b>immediately clockwise</b> of the destination cup. They keep the same order as when they were picked up.</li>
<li>The crab selects a new <b>current cup</b>: the cup which is immediately clockwise of the current cup.</li>
</ul>
<p>For example, suppose your cup labeling were <code>389125467</code>. If the crab were to do merely 10 moves, the following changes would occur:</p>
<pre><code>-- move 1 --
cups: (3) 8  9  1  2  5  4  6  7 
pick up: 8, 9, 1
destination: 2

-- move 2 --
cups:  3 (2) 8  9  1  5  4  6  7 
pick up: 8, 9, 1
destination: 7

-- move 3 --
cups:  3  2 (5) 4  6  7  8  9  1 
pick up: 4, 6, 7
destination: 3

-- move 4 --
cups:  7  2  5 (8) 9  1  3  4  6 
pick up: 9, 1, 3
destination: 7

-- move 5 --
cups:  3  2  5  8 (4) 6  7  9  1 
pick up: 6, 7, 9
destination: 3

-- move 6 --
cups:  9  2  5  8  4 (1) 3  6  7 
pick up: 3, 6, 7
destination: 9

-- move 7 --
cups:  7  2  5  8  4  1 (9) 3  6 
pick up: 3, 6, 7
destination: 8

-- move 8 --
cups:  8  3  6  7  4  1  9 (2) 5 
pick up: 5, 8, 3
destination: 1

-- move 9 --
cups:  7  4  1  5  8  3  9  2 (6)
pick up: 7, 4, 1
destination: 5

-- move 10 --
cups: (5) 7  4  1  8  3  9  2  6 
pick up: 7, 4, 1
destination: 3

-- final --
cups:  5 (8) 3  7  4  1  9  2  6 
</code></pre>



</article>

<form method="post" action="23/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>