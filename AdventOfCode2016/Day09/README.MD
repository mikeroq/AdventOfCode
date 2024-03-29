<article class="day-desc"><h2>--- Day 9: Explosives in Cyberspace ---</h2><p>Wandering around a secure area, you come across a datalink port to a new part of the network. After briefly scanning it for interesting files, you find one file in particular that catches your attention. It's compressed with an experimental format, but fortunately, the documentation for the format is nearby.</p>
<p>The format compresses a sequence of characters. Whitespace is ignored. To indicate that some sequence should be repeated, a marker is added to the file, like <code>(10x2)</code>. To decompress this marker, take the subsequent <code>10</code> characters and repeat them <code>2</code> times. Then, continue reading the file <b>after</b> the repeated data.  The marker itself is not included in the decompressed output.</p>
<p>If parentheses or other characters appear within the data referenced by a marker, that's okay - treat it like normal data, not a marker, and then resume looking for markers after the decompressed section.</p>

<ul>
<li><code>ADVENT</code> contains no markers and decompresses to itself with no changes, resulting in a decompressed length of <code>6</code>.</li>
<li><code>A(1x5)BC</code> repeats only the <code>B</code> a total of <code>5</code> times, becoming <code>ABBBBBC</code> for a decompressed length of <code>7</code>.</li>
<li><code>(3x3)XYZ</code> becomes <code>XYZXYZXYZ</code> for a decompressed length of <code>9</code>.</li>
<li><code>A(2x2)BCD(2x2)EFG</code> doubles the <code>BC</code> and <code>EF</code>, becoming <code>ABCBCDEFEFG</code> for a decompressed length of <code>11</code>.</li>
<li><code>(6x1)(1x3)A</code> simply becomes <code>(1x3)A</code> - the <code>(1x3)</code> looks like a marker, but because it's within a data section of another marker, it is not treated any differently from the <code>A</code> that comes after it. It has a decompressed length of <code>6</code>.</li>
<li><code>X(8x2)(3x3)ABCY</code> becomes <code>X(3x3)ABC(3x3)ABCY</code> (for a decompressed length of <code>18</code>), because the decompressed data from the <code>(8x2)</code> marker (the <code>(3x3)ABC</code>) is skipped and not processed further.</li>
</ul>

</article>

<form method="post" action="9/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>