<article class="day-desc"><h2>--- Day 5: Supply Stacks ---</h2><p>The expedition can depart as soon as the final supplies have been unloaded from the ships. Supplies are stored in stacks of marked <b>crates</b>, but because the needed supplies are buried under many other crates, the crates need to be rearranged.</p>
<p>The ship has a <b>giant cargo crane</b> capable of moving crates between stacks. To ensure none of the crates get crushed or fall over, the crane operator will rearrange them in a series of carefully-planned steps. After the crates are rearranged, the desired crates will be at the top of each stack.</p>
<p>The Elves don't want to interrupt the crane operator during this delicate procedure, but they forgot to ask her <b>which</b> crate will end up where, and they want to be ready to unload them as soon as possible so they can embark.</p>
<p>They do, however, have a drawing of the starting stacks of crates <b>and</b> the rearrangement procedure (your puzzle input). For example:</p>
<pre><code>    [D]    
[N] [C]    
[Z] [M] [P]
 1   2   3 

move 1 from 2 to 1
move 3 from 1 to 3
move 2 from 2 to 1
move 1 from 1 to 2
</code></pre>
<p>In this example, there are three stacks of crates. Stack 1 contains two crates: crate <code>Z</code> is on the bottom, and crate <code>N</code> is on top. Stack 2 contains three crates; from bottom to top, they are crates <code>M</code>, <code>C</code>, and <code>D</code>. Finally, stack 3 contains a single crate, <code>P</code>.</p>
<p>Then, the rearrangement procedure is given. In each step of the procedure, a quantity of crates is moved from one stack to a different stack. In the first step of the above rearrangement procedure, one crate is moved from stack 2 to stack 1, resulting in this configuration:</p>
<pre><code>[D]        
[N] [C]    
[Z] [M] [P]
 1   2   3 
</code></pre>
<p>In the second step, three crates are moved from stack 1 to stack 3. Crates are moved <b>one at a time</b>, so the first crate to be moved (<code>D</code>) ends up below the second and third crates:</p>
<pre><code>        [Z]
        [N]
    [C] [D]
    [M] [P]
 1   2   3
</code></pre>
<p>Then, both crates are moved from stack 2 to stack 1. Again, because crates are moved <b>one at a time</b>, crate <code>C</code> ends up below crate <code>M</code>:</p>
<pre><code>        [Z]
        [N]
[M]     [D]
[C]     [P]
 1   2   3
</code></pre>
<p>Finally, one crate is moved from stack 1 to stack 2:</p>
<pre><code>        [<b>Z</b>]
        [N]
        [D]
[<b>C</b>] [<b>M</b>] [P]
 1   2   3
</code></pre>


</article>
<p>Your puzzle answer was <code>RLFNRTNFB</code>.</p><article class="day-desc"><h2 id="part2">--- Part Two ---</h2><p>As you watch the crane operator expertly rearrange the crates, you notice the process isn't following your prediction.</p>
<p>Some mud was covering the writing on the side of the crane, and you quickly wipe it away. The crane isn't a CrateMover 9000 - it's a <b><span title="It's way better than the old CrateMover 1006.">CrateMover 9001</span></b>.</p>
<p>The CrateMover 9001 is notable for many new and exciting features: air conditioning, leather seats, an extra cup holder, and <b>the ability to pick up and move multiple crates at once</b>.</p>
<p>Again considering the example above, the crates begin in the same configuration:</p>
<pre><code>    [D]    
[N] [C]    
[Z] [M] [P]
 1   2   3 
</code></pre>
<p>Moving a single crate from stack 2 to stack 1 behaves the same as before:</p>
<pre><code>[D]        
[N] [C]    
[Z] [M] [P]
 1   2   3 
</code></pre>
<p>However, the action of moving three crates from stack 1 to stack 3 means that those three moved crates <b>stay in the same order</b>, resulting in this new configuration:</p>
<pre><code>        [D]
        [N]
    [C] [Z]
    [M] [P]
 1   2   3
</code></pre>
<p>Next, as both crates are moved from stack 2 to stack 1, they <b>retain their order</b> as well:</p>
<pre><code>        [D]
        [N]
[C]     [Z]
[M]     [P]
 1   2   3
</code></pre>
<p>Finally, a single crate is still moved from stack 1 to stack 2, but now it's crate <code>C</code> that gets moved:</p>
<pre><code>        [<b>D</b>]
        [N]
        [Z]
[<b>M</b>] [<b>C</b>] [P]
 1   2   3
</code></pre>


</article>
<p>Your puzzle answer was <code>MHQTLJRLB</code>.</p><p class="day-success"><b>Both parts of this puzzle are complete! They provide two gold stars: 🌟🌟</b></p>
<h2>--- Results ---</h2>
<pre><code>2022 Day05 - First Answer: RLFNRTNFB
2022 Day05 - Second Answer: MHQTLJRLB
2022 Day05 - Execution finished in 0.0026731491088867 seconds.
</code></pre>
<pre><code>2022 Day05 - First Answer: RLFNRTNFB
2022 Day05 - Second Answer: MHQTLJRLB
2022 Day05 - Execution finished in 0.0026731491088867 seconds.
</code></pre>