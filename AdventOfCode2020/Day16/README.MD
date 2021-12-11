<article class="day-desc"><h2>--- Day 16: Ticket Translation ---</h2><p>As you're walking to yet another connecting flight, you realize that one of the legs of your re-routed trip coming up is on a high-speed train. However, the train ticket you were given is in a language you don't understand. You should probably figure out what it says before you get to the train station after the next flight.</p>
<p>Unfortunately, you <span title="This actually happened to me once, but I solved it by just asking someone.">can't actually <b>read</b> the words on the ticket</span>. You can, however, read the numbers, and so you figure out <b>the fields these tickets must have</b> and <b>the valid ranges</b> for values in those fields.</p>
<p>You collect the <b>rules for ticket fields</b>, the <b>numbers on your ticket</b>, and the <b>numbers on other nearby tickets</b> for the same train service (via the airport security cameras) together into a single document you can reference (your puzzle input).</p>
<p>The <b>rules for ticket fields</b> specify a list of fields that exist <b>somewhere</b> on the ticket and the <b>valid ranges of values</b> for each field. For example, a rule like <code>class: 1-3 or 5-7</code> means that one of the fields in every ticket is named <code>class</code> and can be any value in the ranges <code>1-3</code> or <code>5-7</code> (inclusive, such that <code>3</code> and <code>5</code> are both valid in this field, but <code>4</code> is not).</p>
<p>Each ticket is represented by a single line of comma-separated values. The values are the numbers on the ticket in the order they appear; every ticket has the same format. For example, consider this ticket:</p>
<pre><code>.--------------------------------------------------------.
| ????: 101    ?????: 102   ??????????: 103     ???: 104 |
|                                                        |
| ??: 301  ??: 302             ???????: 303      ??????? |
| ??: 401  ??: 402           ???? ????: 403    ????????? |
'--------------------------------------------------------'
</code></pre>
<p>Here, <code>?</code> represents text in a language you don't understand. This ticket might be represented as <code>101,102,103,104,301,302,303,401,402,403</code>; of course, the actual train tickets you're looking at are <b>much</b> more complicated. In any case, you've extracted just the numbers in such a way that the first number is always the same specific field, the second number is always a different specific field, and so on - you just don't know what each position actually means!</p>
<p>Start by determining which tickets are <b>completely invalid</b>; these are tickets that contain values which <b>aren't valid for any field</b>. Ignore <b>your ticket</b> for now.</p>
<p>For example, suppose you have the following notes:</p>
<pre><code>class: 1-3 or 5-7
row: 6-11 or 33-44
seat: 13-40 or 45-50

your ticket:
7,1,14

nearby tickets:
7,3,47
40,<b>4</b>,50
<b>55</b>,2,20
38,6,<b>12</b>
</code></pre>


</article>
<p>Your puzzle answer was <code>29759</code>.</p><p class="day-success"><b>The first half of this puzzle is complete! It provides one gold star: *</p>
<article class="day-desc"><h2 id="part2">--- Part Two ---</h2><p>Now that you've identified which tickets contain invalid values, <b>discard those tickets entirely</b>. Use the remaining valid tickets to determine which field is which.</p>
<p>Using the valid ranges for each field, determine what order the fields appear on the tickets. The order is consistent between all tickets: if <code>seat</code> is the third field, it is the third field on every ticket, including <b>your ticket</b>.</p>
<p>For example, suppose you have the following notes:</p>
<pre><code>class: 0-1 or 4-19
row: 0-5 or 8-19
seat: 0-13 or 16-19

your ticket:
11,12,13

nearby tickets:
3,9,18
15,1,5
5,14,9
</code></pre>


</article>
<form method="post" action="16/answer"><input type="hidden" name="level" value="2"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>