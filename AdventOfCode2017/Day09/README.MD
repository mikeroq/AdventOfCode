<article class="day-desc"><h2>--- Day 9: Stream Processing ---</h2><p>A large stream blocks your path. According to the locals, it's not safe to <span title="&quot;Don't cross the streams!&quot;, they yell, even though there's only one. They seem to think they're hilarious.">cross the stream</span> at the moment because it's full of <b>garbage</b>. You look down at the stream; rather than water, you discover that it's a <b>stream of characters</b>.</p>
<p>You sit for a while and record part of the stream (your puzzle input). The characters represent <b>groups</b> - sequences that begin with <code>{</code> and end with <code>}</code>. Within a group, there are zero or more other things, separated by commas: either another <b>group</b> or <b>garbage</b>. Since groups can contain other groups, a <code>}</code> only closes the <b>most-recently-opened unclosed group</b> - that is, they are nestable. Your puzzle input represents a single, large group which itself contains many smaller ones.</p>
<p>Sometimes, instead of a group, you will find <b>garbage</b>. Garbage begins with <code>&lt;</code> and ends with <code>&gt;</code>. Between those angle brackets, almost any character can appear, including <code>{</code> and <code>}</code>. <b>Within</b> garbage, <code>&lt;</code> has no special meaning.</p>
<p>In a futile attempt to clean up the garbage, some program has <b>canceled</b> some of the characters within it using <code>!</code>: inside garbage, <b>any</b> character that comes after <code>!</code> should be <b>ignored</b>, including <code>&lt;</code>, <code>&gt;</code>, and even another <code>!</code>.</p>
<p>You don't see any characters that deviate from these rules.  Outside garbage, you only find well-formed groups, and garbage always terminates according to the rules above.</p>
<p>Here are some self-contained pieces of garbage:</p>
<ul>
<li><code>&lt;&gt;</code>, empty garbage.</li>
<li><code>&lt;random characters&gt;</code>, garbage containing random characters.</li>
<li><code>&lt;&lt;&lt;&lt;&gt;</code>, because the extra <code>&lt;</code> are ignored.</li>
<li><code>&lt;{!&gt;}&gt;</code>, because the first <code>&gt;</code> is canceled.</li>
<li><code>&lt;!!&gt;</code>, because the second <code>!</code> is canceled, allowing the <code>&gt;</code> to terminate the garbage.</li>
<li><code>&lt;!!!&gt;&gt;</code>, because the second <code>!</code> and the first <code>&gt;</code> are canceled.</li>
<li><code>&lt;{o"i!a,&lt;{i&lt;a&gt;</code>, which ends at the first <code>&gt;</code>.</li>
</ul>
<p>Here are some examples of whole streams and the number of groups they contain:</p>
<ul>
<li><code>{}</code>, <code>1</code> group.</li>
<li><code>{{{}}}</code>, <code>3</code> groups.</li>
<li><code>{{},{}}</code>, also <code>3</code> groups.</li>
<li><code>{{{},{},{{}}}}</code>, <code>6</code> groups.</li>
<li><code>{&lt;{},{},{{}}&gt;}</code>, <code>1</code> group (which itself contains garbage).</li>
<li><code>{&lt;a&gt;,&lt;a&gt;,&lt;a&gt;,&lt;a&gt;}</code>, <code>1</code> group.</li>
<li><code>{{&lt;a&gt;},{&lt;a&gt;},{&lt;a&gt;},{&lt;a&gt;}}</code>, <code>5</code> groups.</li>
<li><code>{{&lt;!&gt;},{&lt;!&gt;},{&lt;!&gt;},{&lt;a&gt;}}</code>, <code>2</code> groups (since all but the last <code>&gt;</code> are canceled).</li>
</ul>

<ul>
<li><code>{}</code>, score of <code>1</code>.</li>
<li><code>{{{}}}</code>, score of <code>1 + 2 + 3 = 6</code>.</li>
<li><code>{{},{}}</code>, score of <code>1 + 2 + 2 = 5</code>.</li>
<li><code>{{{},{},{{}}}}</code>, score of <code>1 + 2 + 3 + 3 + 3 + 4 = 16</code>.</li>
<li><code>{&lt;a&gt;,&lt;a&gt;,&lt;a&gt;,&lt;a&gt;}</code>, score of <code>1</code>.</li>
<li><code>{{&lt;ab&gt;},{&lt;ab&gt;},{&lt;ab&gt;},{&lt;ab&gt;}}</code>, score of <code>1 + 2 + 2 + 2 + 2 = 9</code>.</li>
<li><code>{{&lt;!!&gt;},{&lt;!!&gt;},{&lt;!!&gt;},{&lt;!!&gt;}}</code>, score of <code>1 + 2 + 2 + 2 + 2 = 9</code>.</li>
<li><code>{{&lt;a!&gt;},{&lt;a!&gt;},{&lt;a!&gt;},{&lt;ab&gt;}}</code>, score of <code>1 + 2 = 3</code>.</li>
</ul>

</article>

<form method="post" action="9/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>