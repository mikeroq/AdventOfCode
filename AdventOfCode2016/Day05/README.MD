<article class="day-desc"><h2>--- Day 5: How About a Nice Game of Chess? ---</h2><p>You are faced with a security door designed by Easter Bunny engineers that seem to have acquired most of their security knowledge by watching <a href="https://en.wikipedia.org/wiki/Hackers_(film)">hacking</a> <a href="https://en.wikipedia.org/wiki/WarGames">movies</a>.</p>
<p>The <b>eight-character password</b> for the door is generated one character at a time by finding the <a href="https://en.wikipedia.org/wiki/MD5">MD5</a> hash of some Door ID (your puzzle input) and an increasing integer index (starting with <code>0</code>).</p>
<p>A hash indicates the <b>next character</b> in the password if its <a href="https://en.wikipedia.org/wiki/Hexadecimal">hexadecimal</a> representation starts with <b>five zeroes</b>. If it does, the sixth character in the hash is the next character of the password.</p>
<p>For example, if the Door ID is <code>abc</code>:</p>
<ul>
<li>The first index which produces a hash that starts with five zeroes is <code>3231929</code>, which we find by hashing <code>abc3231929</code>; the sixth character of the hash, and thus the first character of the password, is <code>1</code>.</li>
<li><code>5017308</code> produces the next interesting hash, which starts with <code>000008f82...</code>, so the second character of the password is <code>8</code>.</li>
<li>The third time a hash starts with five zeroes is for <code>abc5278568</code>, discovering the character <code>f</code>.</li>
</ul>


</article>

<form method="post" action="5/answer"><input type="hidden" name="level" value="1"></form>