<article class="day-desc"><h2>--- Day 16: Permutation Promenade ---</h2><p>You come upon a very unusual sight; a group of programs here appear to be <a href="https://www.youtube.com/watch?v=lyZQPjUT5B4&amp;t=53">dancing</a>.</p>
<p>There are sixteen programs in total, named <code>a</code> through <code>p</code>. They start by standing in a <span title="This is called a 'newline'.">line</span>: <code>a</code> stands in position <code>0</code>, <code>b</code> stands in position <code>1</code>, and so on until <code>p</code>, which stands in position <code>15</code>.</p>
<p>The programs' <b>dance</b> consists of a sequence of <b>dance moves</b>:</p>
<ul>
<li><b>Spin</b>, written <code>sX</code>, makes <code>X</code> programs move from the end to the front, but maintain their order otherwise. (For example, <code>s3</code> on <code>abcde</code> produces <code>cdeab</code>).</li>
<li><b>Exchange</b>, written <code>xA/B</code>, makes the programs at positions <code>A</code> and <code>B</code> swap places.</li>
<li><b>Partner</b>, written <code>pA/B</code>, makes the programs named <code>A</code> and <code>B</code> swap places.</li>
</ul>
<p>For example, with only five programs standing in a line (<code>abcde</code>), they could do the following dance:</p>
<ul>
<li><code>s1</code>, a spin of size <code>1</code>: <code>eabcd</code>.</li>
<li><code>x3/4</code>, swapping the last two programs: <code>eabdc</code>.</li>
<li><code>pe/b</code>, swapping programs <code>e</code> and <code>b</code>: <code>baedc</code>.</li>
</ul>

</article>

<form method="post" action="16/answer"><input type="hidden" name="level" value="1"></form>