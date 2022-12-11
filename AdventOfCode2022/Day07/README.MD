<article class="day-desc"><h2>--- Day 7: No Space Left On Device ---</h2><p>You can hear birds chirping and raindrops hitting leaves as the expedition proceeds. Occasionally, you can even hear much louder sounds in the distance; how big do the animals get out here, anyway?</p>
<p>The device the Elves gave you has problems with more than just its communication system. You try to run a system update:</p>
<pre><code>$ system-update --please --pretty-please-with-sugar-on-top
<span title="E099 PROGRAMMER IS OVERLY POLITE">Error</span>: No space left on device
</code></pre>
<p>Perhaps you can delete some files to make space for the update?</p>
<p>You browse around the filesystem to assess the situation and save the resulting terminal output (your puzzle input). For example:</p>
<pre><code>$ cd /
$ ls
dir a
14848514 b.txt
8504156 c.dat
dir d
$ cd a
$ ls
dir e
29116 f
2557 g
62596 h.lst
$ cd e
$ ls
584 i
$ cd ..
$ cd ..
$ cd d
$ ls
4060174 j
8033020 d.log
5626152 d.ext
7214296 k
</code></pre>
<p>The filesystem consists of a tree of files (plain data) and directories (which can contain other directories or files). The outermost directory is called <code>/</code>. You can navigate around the filesystem, moving into or out of directories and listing the contents of the directory you're currently in.</p>
<p>Within the terminal output, lines that begin with <code>$</code> are <b>commands you executed</b>, very much like some modern computers:</p>
<ul>
<li><code>cd</code> means <b>change directory</b>. This changes which directory is the current directory, but the specific result depends on the argument:
  <ul>
  <li><code>cd x</code> moves <b>in</b> one level: it looks in the current directory for the directory named <code>x</code> and makes it the current directory.</li>
  <li><code>cd ..</code> moves <b>out</b> one level: it finds the directory that contains the current directory, then makes that directory the current directory.</li>
  <li><code>cd /</code> switches the current directory to the outermost directory, <code>/</code>.</li>
  </ul>
</li>
<li><code>ls</code> means <b>list</b>. It prints out all of the files and directories immediately contained by the current directory:
  <ul>
  <li><code>123 abc</code> means that the current directory contains a file named <code>abc</code> with size <code>123</code>.</li>
  <li><code>dir xyz</code> means that the current directory contains a directory named <code>xyz</code>.</li>
  </ul>
</li>
</ul>
<p>Given the commands and output in the example above, you can determine that the filesystem looks visually like this:</p>
<pre><code>- / (dir)
  - a (dir)
    - e (dir)
      - i (file, size=584)
    - f (file, size=29116)
    - g (file, size=2557)
    - h.lst (file, size=62596)
  - b.txt (file, size=14848514)
  - c.dat (file, size=8504156)
  - d (dir)
    - j (file, size=4060174)
    - d.log (file, size=8033020)
    - d.ext (file, size=5626152)
    - k (file, size=7214296)
</code></pre>
<p>Here, there are four directories: <code>/</code> (the outermost directory), <code>a</code> and <code>d</code> (which are in <code>/</code>), and <code>e</code> (which is in <code>a</code>). These directories also contain files of various sizes.</p>
<p>Since the disk is full, your first step should probably be to find directories that are good candidates for deletion. To do this, you need to determine the <b>total size</b> of each directory. The total size of a directory is the sum of the sizes of the files it contains, directly or indirectly. (Directories themselves do not count as having any intrinsic size.)</p>
<p>The total sizes of the directories above can be found as follows:</p>
<ul>
<li>The total size of directory <code>e</code> is <b>584</b> because it contains a single file <code>i</code> of size 584 and no other directories.</li>
<li>The directory <code>a</code> has total size <b>94853</b> because it contains files <code>f</code> (size 29116), <code>g</code> (size 2557), and <code>h.lst</code> (size 62596), plus file <code>i</code> indirectly (<code>a</code> contains <code>e</code> which contains <code>i</code>).</li>
<li>Directory <code>d</code> has total size <b>24933642</b>.</li>
<li>As the outermost directory, <code>/</code> contains every file. Its total size is <b>48381165</b>, the sum of the size of every file.</li>
</ul>


</article>

<form method="post" action="7/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>