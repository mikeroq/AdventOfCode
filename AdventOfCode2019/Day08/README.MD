<article class="day-desc"><h2>--- Day 8: Space Image Format ---</h2><p><span title="I'm not sorry.">The Elves' spirits are lifted when they realize you have an opportunity to reboot one of their Mars rovers, and so they are curious if you would spend a brief sojourn on Mars.</span> You land your ship near the rover.</p>
<p>When you reach the rover, you discover that it's already in the process of rebooting! It's just waiting for someone to enter a <a href="https://en.wikipedia.org/wiki/BIOS">BIOS</a> password. The Elf responsible for the rover takes a picture of the password (your puzzle input) and sends it to you via the Digital Sending Network.</p>
<p>Unfortunately, images sent via the Digital Sending Network aren't encoded with any normal encoding; instead, they're encoded in a special Space Image Format.  None of the Elves seem to remember why this is the case. They send you the instructions to decode it.</p>
<p>Images are sent as a series of digits that each represent the color of a single pixel.  The digits fill each row of the image left-to-right, then move downward to the next row, filling rows top-to-bottom until every pixel of the image is filled.</p>
<p>Each image actually consists of a series of identically-sized <b>layers</b> that are filled in this way. So, the first digit corresponds to the top-left pixel of the first layer, the second digit corresponds to the pixel to the right of that on the same layer, and so on until the last digit, which corresponds to the bottom-right pixel of the last layer.</p>
<p>For example, given an image <code>3</code> pixels wide and <code>2</code> pixels tall, the image data <code>123456789012</code> corresponds to the following image layers:</p>
<pre><code>Layer 1: 123
         456

Layer 2: 789
         012
</code></pre>


</article>

<form method="post" action="8/answer"><input type="hidden" name="level" value="1"></form>