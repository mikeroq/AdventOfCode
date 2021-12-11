<article class="day-desc"><h2>--- Day 11: Corporate Policy ---</h2><p>Santa's previous password expired, and he needs help choosing a new one.</p>
<p>To help him remember his new password after the old one expires, Santa has devised a method of coming up with a password based on the previous one.  Corporate policy dictates that passwords must be exactly eight lowercase letters (for security reasons), so he finds his new password by <b>incrementing</b> his old password string repeatedly until it is valid.</p>
<p>Incrementing is just like counting with numbers: <code>xx</code>, <code>xy</code>, <code>xz</code>, <code>ya</code>, <code>yb</code>, and so on. Increase the rightmost letter one step; if it was <code>z</code>, it wraps around to <code>a</code>, and repeat with the next letter to the left until one doesn't wrap around.</p>
<p>Unfortunately for Santa, a new Security-Elf recently started, and he has imposed some additional password requirements:</p>
<ul>
<li>Passwords must include one increasing straight of at least three letters, like <code>abc</code>, <code>bcd</code>, <code>cde</code>, and so on, up to <code>xyz</code>. They cannot skip letters; <code>abd</code> doesn't count.</li>
<li>Passwords may not contain the letters <code>i</code>, <code>o</code>, or <code>l</code>, as these letters can be mistaken for other characters and are therefore confusing.</li>
<li>Passwords must contain at least two different, non-overlapping pairs of letters, like <code>aa</code>, <code>bb</code>, or <code>zz</code>.</li>
</ul>

<ul>
<li><code>hijklmmn</code> meets the first requirement (because it contains the straight <code>hij</code>) but fails the second requirement requirement (because it contains <code>i</code> and <code>l</code>).</li>
<li><code>abbceffg</code> meets the third requirement (because it repeats <code>bb</code> and <code>ff</code>) but fails the first requirement.</li>
<li><code>abbcegjk</code> fails the third requirement, because it only has one double letter (<code>bb</code>).</li>
<li>The next password after <code>abcdefgh</code> is <code>abcdffaa</code>.</li>
<li>The next password after <code>ghijklmn</code> is <code>ghjaabcc</code>, because you eventually skip all the passwords that start with <code>ghi...</code>, since <code>i</code> is not allowed.</li>
</ul>

</article>

<form method="post" action="11/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>2015 Day11 - First Answer: 0
2015 Day11 - Second Answer: 0
2015 Day11 - Execution finished in 0.00080204010009766 seconds.
</code></pre>
<pre><code>*** TESTING 2015 DAY Day11 ***
PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

Day11 (mikeroq\AdventOfCode\AdventOfCode2015\Day11\Day11)
 ✔ Part 1 equals 0
 ✔ Part 2 equals 0

Time: 00:00.008, Memory: 4.00 MB

OK (2 tests, 2 assertions)
</code></pre>