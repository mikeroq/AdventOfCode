<article class="day-desc"><h2>--- Day 12: Passage Pathing ---</h2><p>With your <span title="Sublime.">submarine's subterranean subsystems subsisting suboptimally</span>, the only way you're getting out of this cave anytime soon is by finding a path yourself. Not just <b>a</b> path - the only way to know if you've found the <b>best</b> path is to find <b>all</b> of them.</p>
<p>Fortunately, the sensors are still mostly working, and so you build a rough map of the remaining caves (your puzzle input). For example:</p>
<pre><code>start-A
start-b
A-c
A-b
b-d
A-end
b-end
</code></pre>
<p>This is a list of how all of the caves are connected. You start in the cave named <code>start</code>, and your destination is the cave named <code>end</code>. An entry like <code>b-d</code> means that cave <code>b</code> is connected to cave <code>d</code> - that is, you can move between them.</p>
<p>So, the above cave system looks roughly like this:</p>
<pre><code>    start
    /   \
c--A-----b--d
    \   /
     end
</code></pre>
<p>Your goal is to find the number of distinct <b>paths</b> that start at <code>start</code>, end at <code>end</code>, and don't visit small caves more than once. There are two types of caves: <b>big</b> caves (written in uppercase, like <code>A</code>) and <b>small</b> caves (written in lowercase, like <code>b</code>). It would be a waste of time to visit any small cave more than once, but big caves are large enough that it might be worth visiting them multiple times. So, all paths you find should <b>visit small caves at most once</b>, and can <b>visit big caves any number of times</b>.</p>
<p>Given these rules, there are <code><b>10</b></code> paths through this example cave system:</p>
<pre><code>start,A,b,A,c,A,end
start,A,b,A,end
start,A,b,end
start,A,c,A,b,A,end
start,A,c,A,b,end
start,A,c,A,end
start,A,end
start,b,A,c,A,end
start,b,A,end
start,b,end
</code></pre>
<p>(Each line in the above list corresponds to a single path; the caves visited by that path are listed in the order they are visited and separated by commas.)</p>
<p>Note that in this cave system, cave <code>d</code> is never visited by any path: to do so, cave <code>b</code> would need to be visited twice (once on the way to cave <code>d</code> and a second time when returning from cave <code>d</code>), and since cave <code>b</code> is small, this is not allowed.</p>
<p>Here is a slightly larger example:</p>
<pre><code>dc-end
HN-start
start-kj
dc-start
dc-HN
LN-dc
HN-end
kj-sa
kj-HN
kj-dc
</code></pre>
<p>The <code>19</code> paths through it are as follows:</p>
<pre><code>start,HN,dc,HN,end
start,HN,dc,HN,kj,HN,end
start,HN,dc,end
start,HN,dc,kj,HN,end
start,HN,end
start,HN,kj,HN,dc,HN,end
start,HN,kj,HN,dc,end
start,HN,kj,HN,end
start,HN,kj,dc,HN,end
start,HN,kj,dc,end
start,dc,HN,end
start,dc,HN,kj,HN,end
start,dc,end
start,dc,kj,HN,end
start,kj,HN,dc,HN,end
start,kj,HN,dc,end
start,kj,HN,end
start,kj,dc,HN,end
start,kj,dc,end
</code></pre>

<pre><code>fs-end
he-DX
fs-he
start-DX
pj-DX
end-zg
zg-sl
zg-pj
pj-he
RW-he
fs-DX
pj-RW
zg-RW
start-pj
he-WI
zg-he
pj-fs
start-RW
</code></pre>

</article>

<form method="post" action="12/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>