<article class="day-desc"><h2>--- Day 11: Chronal Charge ---</h2><p>You watch the Elves and their sleigh fade into the distance as they head toward the North Pole.</p>
<p>Actually, you're the one fading. The <span title="wheeeeeeeeeeeeeeeeee">falling sensation</span> returns.</p>
<p>The low fuel warning light is illuminated on your wrist-mounted device. Tapping it once causes it to project a hologram of the situation: a <b>300x300</b> grid of fuel cells and their current power levels, some negative. You're not sure what negative power means in the context of time travel, but it can't be good.</p>
<p>Each fuel cell has a coordinate ranging <b>from 1 to 300</b> in both the X (horizontal) and Y (vertical) direction.  In <code>X,Y</code> notation, the top-left cell is <code>1,1</code>, and the top-right cell is <code>300,1</code>.</p>
<p>The interface lets you select <b>any 3x3 square</b> of fuel cells. To increase your chances of getting to your destination, you decide to choose the 3x3 square with the <b>largest total power</b>.</p>
<p>The power level in a given fuel cell can be found through the following process:</p>
<ul>
<li>Find the fuel cell's <b>rack ID</b>, which is its <b>X coordinate plus 10</b>.</li>
<li>Begin with a power level of the <b>rack ID</b> times the <b>Y coordinate</b>.</li>
<li>Increase the power level by the value of the <b>grid serial number</b> (your puzzle input).</li>
<li>Set the power level to itself multiplied by the <b>rack ID</b>.</li>
<li>Keep only the <b>hundreds digit</b> of the power level (so <code>12<b>3</b>45</code> becomes <code>3</code>; numbers with no hundreds digit become <code>0</code>).</li>
<li><b>Subtract 5</b> from the power level.</li>
</ul>
<p>For example, to find the power level of the fuel cell at <code>3,5</code> in a grid with serial number <code>8</code>:</p>
<ul>
<li>The rack ID is <code>3 + 10 = <b>13</b></code>.</li>
<li>The power level starts at <code>13 * 5 = <b>65</b></code>.</li>
<li>Adding the serial number produces <code>65 + 8 = <b>73</b></code>.</li>
<li>Multiplying by the rack ID produces <code>73 * 13 = <b>949</b></code>.</li>
<li>The hundreds digit of <code><b>9</b>49</code> is <code><b>9</b></code>.</li>
<li>Subtracting 5 produces <code>9 - 5 = <b>4</b></code>.</li>
</ul>
<p>So, the power level of this fuel cell is <code><b>4</b></code>.</p>
<p>Here are some more example power levels:</p>
<ul>
<li>Fuel cell at  <code>122,79</code>, grid serial number <code>57</code>: power level <code>-5</code>.</li>
<li>Fuel cell at <code>217,196</code>, grid serial number <code>39</code>: power level  <code>0</code>.</li>
<li>Fuel cell at <code>101,153</code>, grid serial number <code>71</code>: power level  <code>4</code>.</li>
</ul>
<p>Your goal is to find the 3x3 square which has the largest total power. The square must be entirely within the 300x300 grid. Identify this square using the <code>X,Y</code> coordinate of its <b>top-left fuel cell</b>. For example:</p>
<p>For grid serial number <code>18</code>, the largest total 3x3 square has a top-left corner of <code><b>33,45</b></code> (with a total power of <code>29</code>); these fuel cells appear in the middle of this 5x5 region:</p>
<pre><code>-2  -4   4   4   4
-4  <b> 4   4   4  </b>-5
 4  <b> 3   3   4  </b>-4
 1  <b> 1   2   4  </b>-3
-1   0   2  -5  -2
</code></pre>

<pre><code>-3   4   2   2   2
-4  <b> 4   3   3  </b> 4
-5  <b> 3   3   4  </b>-4
 4  <b> 3   3   4  </b>-3
 3   3   3  -5  -1
</code></pre>

</article>

<form method="post" action="11/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>