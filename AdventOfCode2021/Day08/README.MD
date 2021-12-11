<article class="day-desc"><h2>--- Day 8: Seven Segment Search ---</h2><p>You barely reach the safety of the cave when the whale smashes into the cave mouth, collapsing it. Sensors indicate another exit to this cave at a much greater depth, so you have no choice but to press on.</p>
<p>As your submarine slowly makes its way through the cave system, you notice that the four-digit <a href="https://en.wikipedia.org/wiki/Seven-segment_display" target="_blank">seven-segment displays</a> in your submarine are malfunctioning; <span title="Yes, just the four-digit seven-segment ones. Whole batch must have been faulty.">they must have been damaged</span> during the escape. You'll be in a lot of trouble without them, so you'd better figure out what's wrong.</p>
<p>Each digit of a seven-segment display is rendered by turning on or off any of seven segments named <code>a</code> through <code>g</code>:</p>
<pre><code>  0:      1:      2:      3:      4:
 <b>aaaa</b>    ....    <b>aaaa    aaaa</b>    ....
<b>b    c</b>  .    <b>c</b>  .    <b>c</b>  .    <b>c  b    c</b>
<b>b    c</b>  .    <b>c</b>  .    <b>c</b>  .    <b>c  b    c</b>
 ....    ....    <b>dddd    dddd    dddd</b>
<b>e    f</b>  .    <b>f  e</b>    .  .    <b>f</b>  .    <b>f</b>
<b>e    f</b>  .    <b>f  e</b>    .  .    <b>f</b>  .    <b>f</b>
 <b>gggg</b>    ....    <b>gggg    gggg</b>    ....

  5:      6:      7:      8:      9:
 <b>aaaa    aaaa    aaaa    aaaa    aaaa</b>
<b>b</b>    .  <b>b</b>    .  .    <b>c  b    c  b    c</b>
<b>b</b>    .  <b>b</b>    .  .    <b>c  b    c  b    c</b>
 <b>dddd    dddd</b>    ....    <b>dddd    dddd</b>
.    <b>f  e    f</b>  .    <b>f  e    f</b>  .    <b>f</b>
.    <b>f  e    f</b>  .    <b>f  e    f</b>  .    <b>f</b>
 <b>gggg    gggg</b>    ....    <b>gggg    gggg</b>
</code></pre>
<p>So, to render a <code>1</code>, only segments <code>c</code> and <code>f</code> would be turned on; the rest would be off. To render a <code>7</code>, only segments <code>a</code>, <code>c</code>, and <code>f</code> would be turned on.</p>
<p>The problem is that the signals which control the segments have been mixed up on each display. The submarine is still trying to display numbers by producing output on signal wires <code>a</code> through <code>g</code>, but those wires are connected to segments <b>randomly</b>. Worse, the wire/segment connections are mixed up separately for each four-digit display! (All of the digits <b>within</b> a display use the same connections, though.)</p>
<p>So, you might know that only signal wires <code>b</code> and <code>g</code> are turned on, but that doesn't mean <b>segments</b> <code>b</code> and <code>g</code> are turned on: the only digit that uses two segments is <code>1</code>, so it must mean segments <code>c</code> and <code>f</code> are meant to be on. With just that information, you still can't tell which wire (<code>b</code>/<code>g</code>) goes to which segment (<code>c</code>/<code>f</code>). For that, you'll need to collect more information.</p>
<p>For each display, you watch the changing signals for a while, make a note of <b>all ten unique signal patterns</b> you see, and then write down a single <b>four digit output value</b> (your puzzle input). Using the signal patterns, you should be able to work out which pattern corresponds to which digit.</p>
<p>For example, here is what you might see in a single entry in your notes:</p>
<pre><code>acedgfb cdfbe gcdfa fbcad dab cefabd cdfgeb eafb cagedb ab |
cdfeb fcadb cdfeb cdbaf</code></pre>
<p>(The entry is wrapped here to two lines so it fits; in your notes, it will all be on a single line.)</p>
<p>Each entry consists of ten <b>unique signal patterns</b>, a <code>|</code> delimiter, and finally the <b>four digit output value</b>. Within an entry, the same wire/segment connections are used (but you don't know what the connections actually are). The unique signal patterns correspond to the ten different ways the submarine tries to render a digit using the current wire/segment connections. Because <code>7</code> is the only digit that uses three segments, <code>dab</code> in the above example means that to render a <code>7</code>, signal lines <code>d</code>, <code>a</code>, and <code>b</code> are on. Because <code>4</code> is the only digit that uses four segments, <code>eafb</code> means that to render a <code>4</code>, signal lines <code>e</code>, <code>a</code>, <code>f</code>, and <code>b</code> are on.</p>
<p>Using this information, you should be able to work out which combination of signal wires corresponds to each of the ten digits. Then, you can decode the four digit output value. Unfortunately, in the above example, all of the digits in the output value (<code>cdfeb fcadb cdfeb cdbaf</code>) use five segments and are more difficult to deduce.</p>
<p>For now, <b>focus on the easy digits</b>. Consider this larger example:</p>
<pre><code>be cfbegad cbdgef fgaecd cgeb fdcge agebfd fecdb fabcd edb |
<b>fdgacbe</b> cefdb cefbgd <b>gcbe</b>
edbfga begcd cbg gc gcadebf fbgde acbgfd abcde gfcbed gfec |
fcgedb <b>cgb</b> <b>dgebacf</b> <b>gc</b>
fgaebd cg bdaec gdafb agbcfd gdcbef bgcad gfac gcb cdgabef |
<b>cg</b> <b>cg</b> fdcagb <b>cbg</b>
fbegcd cbd adcefb dageb afcb bc aefdc ecdab fgdeca fcdbega |
efabcd cedba gadfec <b>cb</b>
aecbfdg fbg gf bafeg dbefa fcge gcbea fcaegb dgceab fcbdga |
<b>gecf</b> <b>egdcabf</b> <b>bgf</b> bfgea
fgeab ca afcebg bdacfeg cfaedg gcfdb baec bfadeg bafgc acf |
<b>gebdcfa</b> <b>ecba</b> <b>ca</b> <b>fadegcb</b>
dbcfg fgd bdegcaf fgec aegbdf ecdfab fbedc dacgb gdcebf gf |
<b>cefg</b> dcbef <b>fcge</b> <b>gbcadfe</b>
bdfegc cbegaf gecbf dfcage bdacg ed bedf ced adcbefg gebcd |
<b>ed</b> bcgafe cdgba cbgef
egadfb cdbfeg cegd fecab cgb gbdefca cg fgcdab egfdb bfceg |
<b>gbdfcae</b> <b>bgc</b> <b>cg</b> <b>cgb</b>
gcafb gcf dcaebfg ecagb gf abcdeg gaef cafbge fdbac fegbdc |
<b>fgae</b> cfgab <b>fg</b> bagce
</code></pre>


</article>
<p>Your puzzle answer was <code>390</code>.</p><article class="day-desc"><h2 id="part2">--- Part Two ---</h2><p>Through a little deduction, you should now be able to determine the remaining digits. Consider again the first example above:</p>
<pre><code>acedgfb cdfbe gcdfa fbcad dab cefabd cdfgeb eafb cagedb ab |
cdfeb fcadb cdfeb cdbaf</code></pre>
<p>After some careful analysis, the mapping between signal wires and segments only make sense in the following configuration:</p>
<pre><code> dddd
e    a
e    a
 ffff
g    b
g    b
 cccc
</code></pre>
<p>So, the unique signal patterns would correspond to the following digits:</p>
<ul>
<li><code>acedgfb</code>: <code>8</code></li>
<li><code>cdfbe</code>: <code>5</code></li>
<li><code>gcdfa</code>: <code>2</code></li>
<li><code>fbcad</code>: <code>3</code></li>
<li><code>dab</code>: <code>7</code></li>
<li><code>cefabd</code>: <code>9</code></li>
<li><code>cdfgeb</code>: <code>6</code></li>
<li><code>eafb</code>: <code>4</code></li>
<li><code>cagedb</code>: <code>0</code></li>
<li><code>ab</code>: <code>1</code></li>
</ul>
<p>Then, the four digits of the output value can be decoded:</p>
<ul>
<li><code>cdfeb</code>: <code><b>5</b></code></li>
<li><code>fcadb</code>: <code><b>3</b></code></li>
<li><code>cdfeb</code>: <code><b>5</b></code></li>
<li><code>cdbaf</code>: <code><b>3</b></code></li>
</ul>
<p>Therefore, the output value for this entry is <code><b>5353</b></code>.</p>
<p>Following this same process for each entry in the second, larger example above, the output value of each entry can be determined:</p>
<ul>
<li><code>fdgacbe cefdb cefbgd gcbe</code>: <code>8394</code></li>
<li><code>fcgedb cgb dgebacf gc</code>: <code>9781</code></li>
<li><code>cg cg fdcagb cbg</code>: <code>1197</code></li>
<li><code>efabcd cedba gadfec cb</code>: <code>9361</code></li>
<li><code>gecf egdcabf bgf bfgea</code>: <code>4873</code></li>
<li><code>gebdcfa ecba ca fadegcb</code>: <code>8418</code></li>
<li><code>cefg dcbef fcge gbcadfe</code>: <code>4548</code></li>
<li><code>ed bcgafe cdgba cbgef</code>: <code>1625</code></li>
<li><code>gbdfcae bgc cg cgb</code>: <code>8717</code></li>
<li><code>fgae cfgab fg bagce</code>: <code>4315</code></li>
</ul>


</article>
<p>Your puzzle answer was <code>1011785</code>.</p><p class="day-success"><b>Both parts of this puzzle are complete! They provide two gold stars: 🌟🌟</b></p>
<h2>--- Results ---</h2>
<pre><code>2021 Day08 - First Answer: 390

Fatal error: Uncaught TypeError: mikeroq\AdventOfCode\AdventOfCode2021\Day08\Day08::findNumbers(): Return value must be of type int, none returned in C:\Code\AdventOfCode\AdventOfCode2021\Day08\Day08.php:71
Stack trace:
#0 C:\Code\AdventOfCode\AdventOfCode2021\Day08\Day08.php(100): mikeroq\AdventOfCode\AdventOfCode2021\Day08\Day08->findNumbers(Array)
#1 C:\Code\AdventOfCode\AdventOfCode2021\Day08\Day08.php(113): mikeroq\AdventOfCode\AdventOfCode2021\Day08\Day08->doPart2()
#2 C:\Code\AdventOfCode\Shared\Advent.php(18): mikeroq\AdventOfCode\AdventOfCode2021\Day08\Day08->findSecondAnswer()
#3 C:\Code\AdventOfCode\cli.php(28): mikeroq\AdventOfCode\Shared\Advent->runDay(2021, Object(mikeroq\AdventOfCode\AdventOfCode2021\Day08\Day08))
#4 {main}
  thrown in C:\Code\AdventOfCode\AdventOfCode2021\Day08\Day08.php on line 71
</code></pre>
<pre><code>*** TESTING 2021 DAY Day08 ***
PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

Day08 (mikeroq\AdventOfCode\AdventOfCode2021\Day08\Day08)
 ✔ Part 1 example equals 26
 ✘ Part 2 example equals 61229
   │
   │ TypeError: mikeroq\AdventOfCode\AdventOfCode2021\Day08\Day08::findNumbers(): Return value must be of type int, none returned
   │
   │ C:\Code\AdventOfCode\AdventOfCode2021\Day08\Day08.php:71
   │ C:\Code\AdventOfCode\AdventOfCode2021\Day08\Day08.php:100
   │ C:\Code\AdventOfCode\AdventOfCode2021\Day08\Day08.php:113
   │ C:\Code\AdventOfCode\AdventOfCode2021\Day08\Day08Test.php:21
   │

Time: 00:00.033, Memory: 6.00 MB

Summary of non-successful tests:

Day08 (mikeroq\AdventOfCode\AdventOfCode2021\Day08\Day08)
 ✘ Part 2 example equals 61229
   │
   │ TypeError: mikeroq\AdventOfCode\AdventOfCode2021\Day08\Day08::findNumbers(): Return value must be of type int, none returned
   │
   │ C:\Code\AdventOfCode\AdventOfCode2021\Day08\Day08.php:71
   │ C:\Code\AdventOfCode\AdventOfCode2021\Day08\Day08.php:100
   │ C:\Code\AdventOfCode\AdventOfCode2021\Day08\Day08.php:113
   │ C:\Code\AdventOfCode\AdventOfCode2021\Day08\Day08Test.php:21
   │

ERRORS!
Tests: 2, Assertions: 1, Errors: 1.
</code></pre>