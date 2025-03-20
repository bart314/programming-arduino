<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coding and Electronics - week 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Lab Course week 4: </h1>
        <h1>Arduino and Unity</h1>
    </header>

  <div id="main">
    <section id="preperation">
        <h2>Preparation</h2>
<p>This week, we are going to connect our Arduino with the software of Unity, thereby <a href="assessment.php">going through the looking glass</a>. We are going to let the physical world enter the real, and vice versa.</p>
<ol>
<li>In order to get the most out of this workshop, you should have at least <a href="week3.php#exercise1">exercise 1 of week 3</a> ready to roll. Here, we used the serial monitor to send data (e.g. <tt>red</tt> or <tt>green</tt>) to the Arduino and have it put on the LED with the corresponding color.</li>
<li>Have a look at <a href="https://www.youtube.com/watch?v=7ENFeb-J75k">this explanation of multi-threading by Computerphile</a>. This explains how we can have a computer do multiple things at one time. Don't worry if you don't understand it completely – a little working knowledge will suffice.</li>
<li>If you want, you could also <a href="https://learn.sparkfun.com/tutorials/serial-communication/all" target="_blank">read up on the internals of serial communication</a>. However, this goes quite deep and is not necessary for accomplishing our dream.</li>
</ol>
    </section><!-- preparation -->

    <section id="exercise1">
<h2>Exercise 1: blinking LEDs again</h2>
<p>Using you breadboard, hook up two LEDs: one on port 12 and one on port 13. Download <a href="files/BlinkingLights_read_char.ino">this code</a> and upload it to your Arduino. Now, if you type an <tt>A</tt> in the Serial Monitor of the Arduino, the lEDs start blinking.</p>

<p>The <tt>loop()</tt>-method actually contains two blocks. The first block is dependent on the value of <tt>Serial.available()</tt>:</p>

<pre class="code"><code class="language-arduino">if (Serial.available() > 0) {
    // String command = Serial.readStringUntil('\n');
    // command.trim();
        char command = (char)Serial.read();
    if (command == 'A') {
      running = true;
    } else if (command == 'B') {
      running = false;
      digitalWrite(led1, LOW);
      digitalWrite(led2, LOW);
    }
  }</code></pre>

  <p>Explain to your partner what is going on in this small piece of code.</p>
</section><!-- exercise 1 -->

<section id="exercise1a">
  <h2>Exercise 1a: check the serial communication</h2>
  <p>Use <a href="files/SerialPortManager.cs">this script</a> and add it to your Unity setup. If you start to run the program, it should display that a succesful connection with the Serial port was made.</p>
</section>

<section id="exercise2">
  <h2>Exercise 2: no more typing</h2> 
  <p>Now, <a href="files/SendToSerialOnStart.cs">download this code</a> and add it to your Unity-project. Instead of typing the <tt>A</tt> in the Serial Monitor, this code send the same character of the USB-line when you start up the Unity project.</p>
</section><!-- exercise2 -->

<section id="exercise3">
  <h2>Exercise 3: interacting with Unity</h2>
  <p>The <a href="files/SendToSerialOnCollision.cs">next piece of code</a> does more or less the same as the previous, as in that it send a character over the USB line. However, this script doesn't do it on startup, but only when your gam object collides with some other object.</p>
</section><!-- exercise3 -->

<section id="exercise4">
  <h2>Exercise 4: two-way interaction</h2>
  <p>Until now, we have only communicated from the computer to the Arduino. However, nothing prohibits us from doing the same thing from the Arduino to Unity.</p>

  <p>For this to work, you need to add a potentiometer to your breadboard and hook up its washer to port <tt>A0</tt>. The code you uploaded to your Arduino already had the reading and sending of the value of the potentiometer in it, so you don't need to upload a new version.</p>

  <p>Check the Serial Monitor of the Serial Plotter to ascertain that the potentiometer is working and that the Arduino is sending its value over the USB cable.</p>

  <p>Now, use <a href="ReadPot.cs">this code</a> in Unity to display the value of the potentiometer. Note: in order for this to work you need to close the Serial Monitor: only one process can listen to incoming messages on a serial port at any give time, so if the Serial Monitor is doing that you cannot have Unity listening to it as well.</p>
</section><!-- exercise4 -->

<section id="assignment">
  <h2>Assignment</h2>
</section>
  </div><!-- main -->


    <div id="hamburger">
        <img src="imgs/menu.jpeg" alt="Hamburger-menu">
    </div><!-- hamburger -->

    <?php
      $active = 'week4';
      include 'menu.php';
    ?>

    <div id="toc" class="sidebar">
        <h1>This week</h1>
        <ol>
           <li><a href="#preperation">preperation</a></li>
           <li><a href="#exercise1">exercise 1</a></li>
           <li><a href="#exercise2">exercise 2</a></li>
           <li><a href="#exercise3">exercise 3</a></li>
           <li><a href="#exercise4">exercise 4</a></li>
           <li><a href="#assignment">assignment</a></li>
        </ol>
    </div><!-- TOC -->



    
</body>
<script src="js/hamburger.js"></script>
<script src="js/images.js"></script>
<script src="hilightjs/highlight.min.js"></script>
<script>hljs.highlightAll();</script>
</html>