<article class="day-desc"><h2>--- Day 25: Combo Breaker ---</h2><p>You finally reach the check-in desk. Unfortunately, their registration systems are currently offline, and they cannot check you in. Noticing the look on your face, they quickly add that tech support is already on the way! They even created all the room keys this morning; you can take yours now and give them your room deposit once the registration system comes back online.</p>
<p>The room key is a small <a href="https://en.wikipedia.org/wiki/Radio-frequency_identification" target="_blank">RFID</a> card. Your room is on the 25th floor and the elevators are also temporarily out of service, so it takes what little energy you have left to even climb the stairs and navigate the halls. You finally reach the door to your room, swipe your card, and - <b>beep</b> - the light turns red.</p>
<p>Examining the card more closely, you discover a phone number for tech support.</p>
<p>"Hello! How can we help you today?" You explain the situation.</p>
<p>"Well, it sounds like the card isn't sending the right command to unlock the door. If you go back to the check-in desk, surely someone there can reset it for you." Still catching your breath, you describe the status of the elevator and the exact number of stairs you just had to climb.</p>
<p>"I see! Well, your only other option would be to reverse-engineer the cryptographic handshake the card does with the door and then inject your own commands into the data stream, but that's definitely impossible." You thank them for their time.</p>
<p>Unfortunately for the door, you know a thing or two about cryptographic handshakes.</p>
<p>The handshake used by the card and the door involves an operation that <b>transforms</b> a <b>subject number</b>. To transform a subject number, start with the value <code>1</code>. Then, a number of times called the <b>loop size</b>, perform the following steps:</p>
<ul>
<li>Set the value to itself multiplied by the <b>subject number</b>.</li>
<li>Set the value to the remainder after dividing the value by <b><code>20201227</code></b>.</li>
</ul>
<p>The card always uses a specific, secret <b>loop size</b> when it transforms a subject number. The door always uses a different, secret loop size.</p>
<p>The cryptographic handshake works like this:</p>
<ul>
<li>The <b>card</b> transforms the subject number of <b><code>7</code></b> according to the <b>card's</b> secret loop size. The result is called the <b>card's public key</b>.</li>
<li>The <b>door</b> transforms the subject number of <b><code>7</code></b> according to the <b>door's</b> secret loop size. The result is called the <b>door's public key</b>.</li>
<li>The card and door use the wireless RFID signal to transmit the two public keys (your puzzle input) to the other device. Now, the <b>card</b> has the <b>door's</b> public key, and the <b>door</b> has the <b>card's</b> public key. Because you can eavesdrop on the signal, you have both public keys, but neither device's loop size.</li>
<li>The <b>card</b> transforms the subject number of <b>the door's public key</b> according to the <b>card's</b> loop size. The result is the <b>encryption key</b>.</li>
<li>The <b>door</b> transforms the subject number of <b>the card's public key</b> according to the <b>door's</b> loop size. The result is the same <b>encryption key</b> as the <b>card</b> calculated.</li>
</ul>
<p>If you can use the two public keys to determine each device's loop size, you will have enough information to calculate the secret <b>encryption key</b> that the card and door use to communicate; this would let you send the <code>unlock</code> command directly to the door!</p>
<p>For example, suppose you know that the card's public key is <code>5764801</code>. With a little trial and error, you can work out that the card's loop size must be <b><code>8</code></b>, because transforming the initial subject number of <code>7</code> with a loop size of <code>8</code> produces <code>5764801</code>.</p>



</article>

<form method="post" action="25/answer"><input type="hidden" name="level" value="1"></form>
<h2>--- Results ---</h2>
<pre><code>Not completed</code></pre>
<pre><code>Not completed</code></pre>