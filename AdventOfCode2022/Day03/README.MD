<article class="day-desc"><h2>--- Day 3: Rucksack Reorganization ---</h2><p>One Elf has the important job of loading all of the <a href="https://en.wikipedia.org/wiki/Rucksack" target="_blank">rucksacks</a> with supplies for the <span title="Where there's jungle, there's hijinxs.">jungle</span> journey. Unfortunately, that Elf didn't quite follow the packing instructions, and so a few items now need to be rearranged.</p>
<p>Each rucksack has two large <b>compartments</b>. All items of a given type are meant to go into exactly one of the two compartments. The Elf that did the packing failed to follow this rule for exactly one item type per rucksack.</p>
<p>The Elves have made a list of all of the items currently in each rucksack (your puzzle input), but they need your help finding the errors. Every item type is identified by a single lowercase or uppercase letter (that is, <code>a</code> and <code>A</code> refer to different types of items).</p>
<p>The list of items for each rucksack is given as characters all on a single line. A given rucksack always has the same number of items in each of its two compartments, so the first half of the characters represent items in the first compartment, while the second half of the characters represent items in the second compartment.</p>
<p>For example, suppose you have the following list of contents from six rucksacks:</p>
<pre><code>vJrwpWtwJgWrhcsFMMfFFhFp
jqHRNqRjqzjGDLGLrsFMfFZSrLrFZsSL
PmmdzqPrVvPwwTWBwg
wMqvLMZHhHMvwLHjbvcjnnSBnvTQFn
ttgJtRGJQctTZtZT
CrZsJsPPZsGzwwsLwLmpwMDw
</code></pre>
<ul>
<li>The first rucksack contains the items <code>vJrwpWtwJgWrhcsFMMfFFhFp</code>, which means its first compartment contains the items <code>vJrwpWtwJgWr</code>, while the second compartment contains the items <code>hcsFMMfFFhFp</code>. The only item type that appears in both compartments is lowercase <code><b>p</b></code>.</li>
<li>The second rucksack's compartments contain <code>jqHRNqRjqzjGDLGL</code> and <code>rsFMfFZSrLrFZsSL</code>. The only item type that appears in both compartments is uppercase <code><b>L</b></code>.</li>
<li>The third rucksack's compartments contain <code>PmmdzqPrV</code> and <code>vPwwTWBwg</code>; the only common item type is uppercase <code><b>P</b></code>.</li>
<li>The fourth rucksack's compartments only share item type <code><b>v</b></code>.</li>
<li>The fifth rucksack's compartments only share item type <code><b>t</b></code>.</li>
<li>The sixth rucksack's compartments only share item type <code><b>s</b></code>.</li>
</ul>
<p>To help prioritize item rearrangement, every item type can be converted to a <b>priority</b>:</p>
<ul>
<li>Lowercase item types <code>a</code> through <code>z</code> have priorities 1 through 26.</li>
<li>Uppercase item types <code>A</code> through <code>Z</code> have priorities 27 through 52.</li>
</ul>


</article>

<form method="post" action="3/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>2022 Day03 - First Answer: 7793
2022 Day03 - Second Answer: 2499
2022 Day03 - Execution finished in 0.0030069351196289 seconds.
</code></pre>
<pre><code>*** TESTING 2022 DAY Day03 ***
PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

Day03 (mikeroq\AdventOfCode\AdventOfCode2022\Day03\Day03)
 ✘ Part 1 equals 0
   │
   │ Failed asserting that 157 matches expected 0.
   │
   │ C:\Code\AdventOfCode\AdventOfCode2022\Day03\Day03Test.php:14
   │ C:\Code\AdventOfCode\vendor\phpunit\phpunit\phpunit:92
   │

 ✘ Part 2 equals 0
   │
   │ Failed asserting that 70 matches expected 0.
   │
   │ C:\Code\AdventOfCode\AdventOfCode2022\Day03\Day03Test.php:22
   │ C:\Code\AdventOfCode\vendor\phpunit\phpunit\phpunit:92
   │

Time: 00:00.017, Memory: 6.00 MB


FAILURES!
Tests: 2, Assertions: 2, Failures: 2.
</code></pre>