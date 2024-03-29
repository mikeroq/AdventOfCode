<article class="day-desc"><h2>--- Day 22: Slam Shuffle ---</h2><p>There isn't much to do while you wait for the droids to repair your ship.  At least you're drifting in the right direction.  You decide to practice a new <a href="https://en.wikipedia.org/wiki/Shuffling">card shuffle</a> you've been working on.</p>
<p>Digging through the ship's storage, you find a deck of <b>space cards</b>! Just like <span title="What do you mean, you've never heard of space cards? They're all the rage in Zozo.">any deck of space cards</span>, there are 10007 cards in the deck numbered <code>0</code> through <code>10006</code>. The deck must be new - they're still in <b>factory order</b>, with <code>0</code> on the top, then <code>1</code>, then <code>2</code>, and so on, all the way through to <code>10006</code> on the bottom.</p>
<p>You've been practicing three different <b>techniques</b> that you use while shuffling. Suppose you have a deck of only 10 cards (numbered <code>0</code> through <code>9</code>):</p>
<p><b>To <code>deal into new stack</code></b>, create a new stack of cards by dealing the top card of the deck onto the top of the new stack repeatedly until you run out of cards:</p>
<pre><code>Top          Bottom
0 1 2 3 4 5 6 7 8 9   Your deck
                      New stack

  1 2 3 4 5 6 7 8 9   Your deck
                  0   New stack

    2 3 4 5 6 7 8 9   Your deck
                1 0   New stack

      3 4 5 6 7 8 9   Your deck
              2 1 0   New stack

Several steps later...

                  9   Your deck
  8 7 6 5 4 3 2 1 0   New stack

                      Your deck
9 8 7 6 5 4 3 2 1 0   New stack
</code></pre>
<p>Finally, pick up the new stack you've just created and use it as the deck for the next technique.</p>
<p><b>To <code>cut N</code> cards</b>, take the top <code>N</code> cards off the top of the deck and move them as a single unit to the bottom of the deck, retaining their order. For example, to <code>cut 3</code>:</p>
<pre><code>Top          Bottom
0 1 2 3 4 5 6 7 8 9   Your deck

      3 4 5 6 7 8 9   Your deck
0 1 2                 Cut cards

3 4 5 6 7 8 9         Your deck
              0 1 2   Cut cards

3 4 5 6 7 8 9 0 1 2   Your deck
</code></pre>
<p>You've also been getting pretty good at a version of this technique where <code>N</code> is negative! In that case, cut (the absolute value of) <code>N</code> cards from the bottom of the deck onto the top.  For example, to <code>cut -4</code>:</p>
<pre><code>Top          Bottom
0 1 2 3 4 5 6 7 8 9   Your deck

0 1 2 3 4 5           Your deck
            6 7 8 9   Cut cards

        0 1 2 3 4 5   Your deck
6 7 8 9               Cut cards

6 7 8 9 0 1 2 3 4 5   Your deck
</code></pre>
<p><b>To <code>deal with increment N</code></b>, start by clearing enough space on your table to lay out all of the cards individually in a long line.  Deal the top card into the leftmost position. Then, move <code>N</code> positions to the right and deal the next card there. If you would move into a position past the end of the space on your table, wrap around and keep counting from the leftmost card again.  Continue this process until you run out of cards.</p>
<p>For example, to <code>deal with increment 3</code>:</p>
<pre><code>
0 1 2 3 4 5 6 7 8 9   Your deck
. . . . . . . . . .   Space on table
^                     Current position

Deal the top card to the current position:

  1 2 3 4 5 6 7 8 9   Your deck
0 . . . . . . . . .   Space on table
^                     Current position

Move the current position right 3:

  1 2 3 4 5 6 7 8 9   Your deck
0 . . . . . . . . .   Space on table
      ^               Current position

Deal the top card:

    2 3 4 5 6 7 8 9   Your deck
0 . . 1 . . . . . .   Space on table
      ^               Current position

Move right 3 and deal:

      3 4 5 6 7 8 9   Your deck
0 . . 1 . . 2 . . .   Space on table
            ^         Current position

Move right 3 and deal:

        4 5 6 7 8 9   Your deck
0 . . 1 . . 2 . . 3   Space on table
                  ^   Current position

Move right 3, wrapping around, and deal:

          5 6 7 8 9   Your deck
0 . 4 1 . . 2 . . 3   Space on table
    ^                 Current position

And so on:

0 7 4 1 8 5 2 9 6 3   Space on table
</code></pre>
<p>Positions on the table which already contain cards are still counted; they're not skipped.  Of course, this technique is carefully designed so it will never put two cards in the same position or leave a position empty.</p>
<p>Finally, collect the cards on the table so that the leftmost card ends up at the top of your deck, the card to its right ends up just below the top card, and so on, until the rightmost card ends up at the bottom of the deck.</p>
<p>The complete shuffle process (your puzzle input) consists of applying many of these techniques.  Here are some examples that combine techniques; they all start with a <b>factory order</b> deck of 10 cards:</p>
<pre><code>deal with increment 7
deal into new stack
deal into new stack
Result: 0 3 6 9 2 5 8 1 4 7
</code></pre>
<pre><code>cut 6
deal with increment 7
deal into new stack
Result: 3 0 7 4 1 8 5 2 9 6
</code></pre>
<pre><code>deal with increment 7
deal with increment 9
cut -2
Result: 6 3 0 7 4 1 8 5 2 9
</code></pre>
<pre><code>deal into new stack
cut -2
deal with increment 7
cut 8
cut -4
deal with increment 7
cut 3
deal with increment 9
deal with increment 3
cut -1
Result: 9 2 5 8 1 4 7 0 3 6
</code></pre>


</article>

<form method="post" action="22/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>