<article class="day-desc"><h2>--- Day 7: Internet Protocol Version 7 ---</h2><p>While snooping around the local network of EBHQ, you compile a list of <a href="https://en.wikipedia.org/wiki/IP_address">IP addresses</a> (they're IPv7, of course; <a href="https://en.wikipedia.org/wiki/IPv6">IPv6</a> is much too limited). You'd like to figure out which IPs support <b>TLS</b> (transport-layer snooping).</p>
<p>An IP supports TLS if it has an Autonomous Bridge Bypass Annotation, or <span title="Any similarity to the pattern it describes is purely coincidental."><b>ABBA</b></span>.  An ABBA is any four-character sequence which consists of a pair of two different characters followed by the reverse of that pair, such as <code>xyyx</code> or <code>abba</code>.  However, the IP also must not have an ABBA within any hypernet sequences, which are contained by <b>square brackets</b>.</p>

<ul>
<li><code>abba[mnop]qrst</code> supports TLS (<code>abba</code> outside square brackets).</li>
<li><code>abcd[bddb]xyyx</code> does <b>not</b> support TLS (<code>bddb</code> is within square brackets, even though <code>xyyx</code> is outside square brackets).</li>
<li><code>aaaa[qwer]tyui</code> does <b>not</b> support TLS (<code>aaaa</code> is invalid; the interior characters must be different).</li>
<li><code>ioxxoj[asdfgh]zxcvbn</code> supports TLS (<code>oxxo</code> is outside square brackets, even though it's within a larger string).</li>
</ul>

</article>

<form method="post" action="7/answer"><input type="hidden" name="level" value="1"></form>