<article class="day-desc"><h2>--- Day 14: Space Stoichiometry ---</h2><p>As you approach the rings of Saturn, your ship's <b>low fuel</b> indicator turns on.  There isn't any fuel here, but the rings have plenty of raw material.  Perhaps your ship's <span title="Yes, the acronym is intentional.">Inter-Stellar Refinery Union</span> brand <b>nanofactory</b> can turn these raw materials into fuel.</p>
<p>You ask the nanofactory to produce a list of the <b>reactions</b> it can perform that are relevant to this process (your puzzle input). Every reaction turns some quantities of specific <b>input chemicals</b> into some quantity of an <b>output chemical</b>. Almost every <b>chemical</b> is produced by exactly one reaction; the only exception, <code>ORE</code>, is the raw material input to the entire process and is not produced by a reaction.</p>
<p>You just need to know how much <code><b>ORE</b></code> you'll need to collect before you can produce one unit of <code><b>FUEL</b></code>.</p>
<p>Each reaction gives specific quantities for its inputs and output; reactions cannot be partially run, so only whole integer multiples of these quantities can be used.  (It's okay to have leftover chemicals when you're done, though.) For example, the reaction <code>1 A, 2 B, 3 C =&gt; 2 D</code> means that exactly 2 units of chemical <code>D</code> can be produced by consuming exactly 1 <code>A</code>, 2 <code>B</code> and 3 <code>C</code>.  You can run the full reaction as many times as necessary; for example, you could produce 10 <code>D</code> by consuming 5 <code>A</code>, 10 <code>B</code>, and 15 <code>C</code>.</p>
<p>Suppose your nanofactory produces the following list of reactions:</p>
<pre><code>10 ORE =&gt; 10 A
1 ORE =&gt; 1 B
7 A, 1 B =&gt; 1 C
7 A, 1 C =&gt; 1 D
7 A, 1 D =&gt; 1 E
7 A, 1 E =&gt; 1 FUEL
</code></pre>
<p>The first two reactions use only <code>ORE</code> as inputs; they indicate that you can produce as much of chemical <code>A</code> as you want (in increments of 10 units, each 10 costing 10 <code>ORE</code>) and as much of chemical <code>B</code> as you want (each costing 1 <code>ORE</code>).  To produce 1 <code>FUEL</code>, a total of <b>31</b> <code>ORE</code> is required: 1 <code>ORE</code> to produce 1 <code>B</code>, then 30 more <code>ORE</code> to produce the 7 + 7 + 7 + 7 = 28 <code>A</code> (with 2 extra <code>A</code> wasted) required in the reactions to convert the <code>B</code> into <code>C</code>, <code>C</code> into <code>D</code>, <code>D</code> into <code>E</code>, and finally <code>E</code> into <code>FUEL</code>. (30 <code>A</code> is produced because its reaction requires that it is created in increments of 10.)</p>
<p>Or, suppose you have the following list of reactions:</p>
<pre><code>9 ORE =&gt; 2 A
8 ORE =&gt; 3 B
7 ORE =&gt; 5 C
3 A, 4 B =&gt; 1 AB
5 B, 7 C =&gt; 1 BC
4 C, 1 A =&gt; 1 CA
2 AB, 3 BC, 4 CA =&gt; 1 FUEL
</code></pre>
<p>The above list of reactions requires <b>165</b> <code>ORE</code> to produce 1 <code>FUEL</code>:</p>
<ul>
<li>Consume 45 <code>ORE</code> to produce 10 <code>A</code>.</li>
<li>Consume 64 <code>ORE</code> to produce 24 <code>B</code>.</li>
<li>Consume 56 <code>ORE</code> to produce 40 <code>C</code>.</li>
<li>Consume 6 <code>A</code>, 8 <code>B</code> to produce 2 <code>AB</code>.</li>
<li>Consume 15 <code>B</code>, 21 <code>C</code> to produce 3 <code>BC</code>.</li>
<li>Consume 16 <code>C</code>, 4 <code>A</code> to produce 4 <code>CA</code>.</li>
<li>Consume 2 <code>AB</code>, 3 <code>BC</code>, 4 <code>CA</code> to produce 1 <code>FUEL</code>.</li>
</ul>

<ul>
<li>
<pre><code>157 ORE =&gt; 5 NZVS
165 ORE =&gt; 6 DCFZ
44 XJWVT, 5 KHKGT, 1 QDVJ, 29 NZVS, 9 GPVTF, 48 HKGWZ =&gt; 1 FUEL
12 HKGWZ, 1 GPVTF, 8 PSHF =&gt; 9 QDVJ
179 ORE =&gt; 7 PSHF
177 ORE =&gt; 5 HKGWZ
7 DCFZ, 7 PSHF =&gt; 2 XJWVT
165 ORE =&gt; 2 GPVTF
3 DCFZ, 7 NZVS, 5 HKGWZ, 10 PSHF =&gt; 8 KHKGT
</code></pre></li>
<li>
<pre><code>2 VPVL, 7 FWMGM, 2 CXFTF, 11 MNCFX =&gt; 1 STKFG
17 NVRVD, 3 JNWZP =&gt; 8 VPVL
53 STKFG, 6 MNCFX, 46 VJHF, 81 HVMC, 68 CXFTF, 25 GNMV =&gt; 1 FUEL
22 VJHF, 37 MNCFX =&gt; 5 FWMGM
139 ORE =&gt; 4 NVRVD
144 ORE =&gt; 7 JNWZP
5 MNCFX, 7 RFSQX, 2 FWMGM, 2 VPVL, 19 CXFTF =&gt; 3 HVMC
5 VJHF, 7 MNCFX, 9 VPVL, 37 CXFTF =&gt; 6 GNMV
145 ORE =&gt; 6 MNCFX
1 NVRVD =&gt; 8 CXFTF
1 VJHF, 6 MNCFX =&gt; 4 RFSQX
176 ORE =&gt; 6 VJHF
</code></pre></li>
<li>
<pre><code>171 ORE =&gt; 8 CNZTR
7 ZLQW, 3 BMBT, 9 XCVML, 26 XMNCP, 1 WPTQ, 2 MZWV, 1 RJRHP =&gt; 4 PLWSL
114 ORE =&gt; 4 BHXH
14 VRPVC =&gt; 6 BMBT
6 BHXH, 18 KTJDG, 12 WPTQ, 7 PLWSL, 31 FHTLT, 37 ZDVW =&gt; 1 FUEL
6 WPTQ, 2 BMBT, 8 ZLQW, 18 KTJDG, 1 XMNCP, 6 MZWV, 1 RJRHP =&gt; 6 FHTLT
15 XDBXC, 2 LTCX, 1 VRPVC =&gt; 6 ZLQW
13 WPTQ, 10 LTCX, 3 RJRHP, 14 XMNCP, 2 MZWV, 1 ZLQW =&gt; 1 ZDVW
5 BMBT =&gt; 4 WPTQ
189 ORE =&gt; 9 KTJDG
1 MZWV, 17 XDBXC, 3 XCVML =&gt; 2 XMNCP
12 VRPVC, 27 CNZTR =&gt; 2 XDBXC
15 KTJDG, 12 BHXH =&gt; 5 XCVML
3 BHXH, 2 VRPVC =&gt; 7 MZWV
121 ORE =&gt; 7 VRPVC
7 XCVML =&gt; 6 RJRHP
5 BHXH, 4 VRPVC =&gt; 5 LTCX
</code></pre></li>
</ul>

</article>

<form method="post" action="14/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>