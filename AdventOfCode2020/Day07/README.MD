<article class="day-desc"><h2>--- Day 7: Handy Haversacks ---</h2><p>You land at the regional airport in time for your next flight. In fact, it looks like you'll even have time to grab some food: all flights are currently delayed due to <b>issues in luggage processing</b>.</p>
<p>Due to recent aviation regulations, many rules (your puzzle input) are being enforced about bags and their contents; bags must be color-coded and must contain specific quantities of other color-coded bags. Apparently, nobody responsible for these regulations considered how long they would take to enforce!</p>
<p>For example, consider the following rules:</p>
<pre><code>light red bags contain 1 bright white bag, 2 muted yellow bags.
dark orange bags contain 3 bright white bags, 4 muted yellow bags.
bright white bags contain 1 shiny gold bag.
muted yellow bags contain 2 shiny gold bags, 9 faded blue bags.
shiny gold bags contain 1 dark olive bag, 2 vibrant plum bags.
dark olive bags contain 3 faded blue bags, 4 dotted black bags.
vibrant plum bags contain 5 faded blue bags, 6 dotted black bags.
faded blue bags contain no other bags.
dotted black bags contain no other bags.
</code></pre>
<p>These rules specify the required contents for 9 bag types. In this example, every <code>faded blue</code> bag is empty, every <code>vibrant plum</code> bag contains 11 bags (5 <code>faded blue</code> and 6 <code>dotted black</code>), and so on.</p>
<p>You have a <code><b>shiny gold</b></code> bag. If you wanted to carry it in at least one other bag, how many different bag colors would be valid for the outermost bag? (In other words: how many colors can, eventually, contain at least one <code>shiny gold</code> bag?)</p>
<p>In the above rules, the following options would be available to you:</p>
<ul>
<li>A <code>bright white</code> bag, which can hold your <code>shiny gold</code> bag directly.</li>
<li>A <code>muted yellow</code> bag, which can hold your <code>shiny gold</code> bag directly, plus some other bags.</li>
<li>A <code>dark orange</code> bag, which can hold <code>bright white</code> and <code>muted yellow</code> bags, either of which could then hold your <code>shiny gold</code> bag.</li>
<li>A <code>light red</code> bag, which can hold <code>bright white</code> and <code>muted yellow</code> bags, either of which could then hold your <code>shiny gold</code> bag.</li>
</ul>


</article>
<p>Your puzzle answer was <code>213</code>.</p><article class="day-desc"><h2 id="part2">--- Part Two ---</h2><p>It's getting pretty expensive to fly these days - not because of ticket prices, but because of the ridiculous number of bags you need to buy!</p>
<p>Consider again your <code>shiny gold</code> bag and the rules from the above example:</p>
<ul>
<li><code>faded blue</code> bags contain <code>0</code> other bags.</li>
<li><code>dotted black</code> bags contain <code>0</code> other bags.</li>
<li><code>vibrant plum</code> bags contain <code>11</code> other bags: 5 <code>faded blue</code> bags and 6 <code>dotted black</code> bags.</li>
<li><code>dark olive</code> bags contain <code>7</code> other bags: 3 <code>faded blue</code> bags and 4 <code>dotted black</code> bags.</li>
</ul>
<p>So, a single <code>shiny gold</code> bag must contain 1 <code>dark olive</code> bag (and the 7 bags within it) plus 2 <code>vibrant plum</code> bags (and the 11 bags within <b>each</b> of those): <code>1 + 1*7 + 2 + 2*11</code> = <code><b>32</b></code> bags!</p>
<p>Of course, the actual rules have a <span title="100%">small</span> chance of going several levels deeper than this example; be sure to count all of the bags, even if the nesting becomes topologically impractical!</p>
<p>Here's another example:</p>
<pre><code>shiny gold bags contain 2 dark red bags.
dark red bags contain 2 dark orange bags.
dark orange bags contain 2 dark yellow bags.
dark yellow bags contain 2 dark green bags.
dark green bags contain 2 dark blue bags.
dark blue bags contain 2 dark violet bags.
dark violet bags contain no other bags.
</code></pre>


</article>
<p>Your puzzle answer was <code>38426</code>.</p><p class="day-success"><b>Both parts of this puzzle are complete! They provide two gold stars: 🌟🌟</b></p>
<h2>--- Results ---</h2>
<pre><code>
Fatal error: Declaration of mikeroq\AdventOfCode\AdventOfCode2020\Day07\Day07::findFirstAnswer() must be compatible with mikeroq\AdventOfCode\Shared\Day::findFirstAnswer(): int in C:\Code\AdventOfCode\AdventOfCode2020\Day07\Day07.php on line 53
</code></pre>
<pre><code>*** TESTING 2020 DAY Day07 ***
PHPUnit 9.5.10 by Sebastian Bergmann and contributors.


Fatal error: Declaration of mikeroq\AdventOfCode\AdventOfCode2020\Day07\Day07::findFirstAnswer() must be compatible with mikeroq\AdventOfCode\Shared\Day::findFirstAnswer(): int in C:\Code\AdventOfCode\AdventOfCode2020\Day07\Day07.php on line 53
</code></pre>