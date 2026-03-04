<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arduino and Programming: week 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Lab Course week 4: </h1>
        <h1>Arduino and Unity</h1>
    </header>

  <div id="main">
    <div class="aside">
      <p><b>Work in progress: </b> we are refactoring this module in the spring semester of 2025-2026, so the below is likely to change.
    </div>
    <section id="preperation">
        <h2>Preparation</h2>
<p>This final more or less organised week, we are going to connect our Arduino with the software of Unity, thereby <a href="assessment.php">going through the looking glass</a>. We are going to let the physical world enter the real, and vice versa.</p>
<ol>
<li>In order to get the most out of this workshop, you should have at least <a href="week3.php#exercise2">exercise 2 of week 3</a> ready to roll. In that exercise, we used the serial monitor to send data (e.g. <tt>red</tt> or <tt>green</tt>) to the Arduino and have it put on the LED with the corresponding color.</li>
<li>Have a look at <a href="https://www.youtube.com/watch?v=7ENFeb-J75k">this explanation of multi-threading by Computerphile</a>. This explains how we can have a computer do multiple things at one time. Don't worry if you don't understand it completely – a little working knowledge will suffice.</li>
<li>If you want, you could also <a href="https://learn.sparkfun.com/tutorials/serial-communication/all" target="_blank">read up on the internals of serial communication</a>. However, this goes quite deep and is not necessary for accomplishing our dream.</li>
</ol>
    </section><!-- preparation -->

<p class="aside"><u>IMPORTANT:</u> In the exercises below, you will get some unity and some arduino code. This is tested and set up for this particular workflow. <i>Do not change it</i> if you do not know what you are doing. Don't ask chatgpt (or the like) to change it if it doesn't work as you expect it to – you <i>will</i> get into more trouble if you go throught that path. Instead, ask one of us to help you if it doesn't work out.</p>

    <section id="exercise1">
<h2>Exercise 1: blinking LEDs again</h2>
<p>Using you breadboard, hook up two LEDs: one on port 12 and one on port 13. Download <a href="files/BlinkingLights_read_char.ino">this code</a> and upload it to your Arduino. Now, if you type an <tt>A</tt> in the Serial Monitor of the Arduino, the LEDs start blinking.</p>

<p>The <tt>loop()</tt>-method actually contains two blocks. The first block is dependent on the value of <tt>Serial.available()</tt>:</p>

<pre class="code"><code class="language-arduino">
    if (Serial.available() > 0) {
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
    }
</code></pre>


  The second block actually makes use of the variable <tt>running</tt> that was set in the first block:

<pre class="code"><code class="language-arduino">
    if (running) {
      static unsigned long lastToggleTime = 0;
      static bool ledState = false;
    
      if (millis() - lastToggleTime >= 500) {
        lastToggleTime = millis();
        ledState = !ledState;
        digitalWrite(led1, ledState);
        digitalWrite(led2, !ledState);
      }
    }
</code></pre>

  <p>Within your group, discuss what is going on in this code; why do we need two blocks and how do they work together?</p>
</section><!-- exercise 1 -->

<section id="exercise1a">
  <h2>Exercise 1a: check the serial communication</h2>
	<p>Clone <a href="https://github.com/UnityArduinoCourse2026/UnityArduinoTemplate.git">this</a> UnityArduinoTemplate</a> with your GitHub Desktop or download the zip-file. Add this project to your UnityHub. If necessary download the right editor version. If you do not want to install a new project but adjust your project, you can download <a href="files/SerialCommunication.unitypackage">this</a> package and add it to your project</p>
  <p>Open the scene <i>Student_Scene</i> from the folder _StudentWorkHere. Addjust the settings from the SerialPortManager in the inspector. Change the Port to the port you have connected your Arduino to and check the Bautrate.</p>
	<p>Hit the play button, check the Console for what is happening. Check if the serial connection had been made.</p>
	<p>Is anything changing with your Aduino setup on starting and stopping the Unity Scene?</p>
</section>

<section id="exercise2">
  <h2>Exercise 2: two-way interaction - Check out the Demo folder in the Unity Project</h2> 
	<p>Until now, we have only communicated from the computer to the Arduino. However, nothing prohibits us from doing the same thing from the Arduino to Unity.</p>
  <p>Open the scene <i>SpeedByPot</i> from the folder SerialCommunication/Demo/Scenes. Addjust the settings from the SerialPortManager in the inspector. Change the Port to the port you have connected your Arduino to and check the Bautrate.</p>
	<p>Copy the file <i>ReadAndWrite.ino</i> from the folder Docs to a different place on you computer and upload this code to your Arduino</p>
	<p>For this to work, you need to add a potentiometer to your breadboard and hook up its washer to port <tt>A0</tt>. Make use of the knowledge you gained at <a href="week2.php#exercise2">part 2 of exercise 2 of week 2 😎</a> to have the value of the potentiometer send over the serial port. </p>
	  <p>Check the <i>Serial Monitor</i> or the <i>Serial Plotter</i> of the Arduino IDE to ascertain that the potentiometer is working and that the Arduino is sending the value of the potmeter over the USB cable.</p>
	<p><b>Note:</b> in order for this to work you need to close the Serial Monitor, as only one process can listen to incoming messages on a serial port at any give time. If the Serial Monitor is doing that, you cannot have Unity listening to it as well.</p>
	<p>Check out all the different things that are happening in the scene by turning the potentiometer on your breadboard.</p>
</section><!-- exercise2 -->


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