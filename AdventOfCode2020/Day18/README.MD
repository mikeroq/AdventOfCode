<article class="day-desc"><h2>--- Day 18: Operation Order ---</h2><p>As you look out the window and notice a heavily-forested continent slowly appear over the horizon, you are interrupted by the child sitting next to you. They're curious if you could help them with their <span title='Or "maths", if you have more than one.'>math</span> homework.</p>
<p>Unfortunately, it seems like this "math" <a href="https://www.youtube.com/watch?v=3QtRK7Y2pPU&amp;t=15" target="_blank">follows different rules</a> than you remember.</p>
<p>The homework (your puzzle input) consists of a series of expressions that consist of addition (<code>+</code>), multiplication (<code>*</code>), and parentheses (<code>(...)</code>). Just like normal math, parentheses indicate that the expression inside must be evaluated before it can be used by the surrounding expression. Addition still finds the sum of the numbers on both sides of the operator, and multiplication still finds the product.</p>
<p>However, the rules of <b>operator precedence</b> have changed. Rather than evaluating multiplication before addition, the operators have the <b>same precedence</b>, and are evaluated left-to-right regardless of the order in which they appear.</p>
<p>For example, the steps to evaluate the expression <code>1 + 2 * 3 + 4 * 5 + 6</code> are as follows:</p>
<pre><code><b>1 + 2</b> * 3 + 4 * 5 + 6
  <b>3   * 3</b> + 4 * 5 + 6
      <b>9   + 4</b> * 5 + 6
         <b>13   * 5</b> + 6
             <b>65   + 6</b>
                 <b>71</b>
</code></pre>
<p>Parentheses can override this order; for example, here is what happens if parentheses are added to form <code>1 + (2 * 3) + (4 * (5 + 6))</code>:</p>
<pre><code>1 + <b>(2 * 3)</b> + (4 * (5 + 6))
<b>1 +    6</b>    + (4 * (5 + 6))
     7      + (4 * <b>(5 + 6)</b>)
     7      + <b>(4 *   11   )</b>
     <b>7      +     44</b>
            <b>51</b>
</code></pre>

<ul>
<li><code>2 * 3 + (4 * 5)</code> becomes <b><code>26</code></b>.</li>
<li><code>5 + (8 * 3 + 9 + 3 * 4 * 3)</code> becomes <b><code>437</code></b>.</li>
<li><code>5 * 9 * (7 * 3 * 3 + 9 * 3 + (8 + 6 * 4))</code> becomes <b><code>12240</code></b>.</li>
<li><code>((2 + 4 * 9) * (6 + 9 * 8 + 6) + 6) + 2 + 4 * 2</code> becomes <b><code>13632</code></b>.</li>
</ul>

</article>

<form method="post" action="18/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>