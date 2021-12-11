<article class="day-desc"><h2>--- Day 5: Alchemical Reduction ---</h2><p>You've managed to sneak in to the prototype suit manufacturing lab.  The Elves are making decent progress, but are still struggling with the suit's size reduction capabilities.</p>
<p>While the very latest in 1518 alchemical technology might have solved their problem eventually, you can do better.  You scan the chemical composition of the suit's material and discover that it is formed by extremely long <a href="https://en.wikipedia.org/wiki/Polymer">polymers</a> (one of which is <span title="I've always wanted a polymer!">available</span> as your puzzle input).</p>
<p>The polymer is formed by smaller <b>units</b> which, when triggered, react with each other such that two adjacent units of the same type and opposite polarity are destroyed. Units' types are represented by letters; units' polarity is represented by capitalization.  For instance, <code>r</code> and <code>R</code> are units with the same type but opposite polarity, whereas <code>r</code> and <code>s</code> are entirely different types and do not react.</p>
<p>For example:</p>
<ul>
<li>In <code>aA</code>, <code>a</code> and <code>A</code> react, leaving nothing behind.</li>
<li>In <code>abBA</code>, <code>bB</code> destroys itself, leaving <code>aA</code>.  As above, this then destroys itself, leaving nothing.</li>
<li>In <code>abAB</code>, no two adjacent units are of the same type, and so nothing happens.</li>
<li>In <code>aabAAB</code>, even though <code>aa</code> and <code>AA</code> are of the same type, their polarities match, and so nothing happens.</li>
</ul>
<p>Now, consider a larger example, <code>dabAcCaCBAcCcaDA</code>:</p>
<pre><code>dabA<b>cC</b>aCBAcCcaDA  The first 'cC' is removed.
dab<b>Aa</b>CBAcCcaDA    This creates 'Aa', which is removed.
dabCBA<b>cCc</b>aDA      Either 'cC' or 'Cc' are removed (the result is the same).
dabCBAcaDA        No further actions can be taken.
</code></pre>


</article>

<form method="post" action="5/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>