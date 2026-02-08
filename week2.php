<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coding and Electronics - week 2</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="hilightjs/vs.min.css">
</head>
<body>
    <header>
        <h1>Lab Course week 2: </h1>
        <h1>More Arduino</h1>
    </header>

  <div id="main">
    <div class="aside">
      <p><b>Work in progress: </b> we are refactoring this module in the spring semester of 2025-2026, so the below is likely to change.
    </div>
    <section id="preperation">
        <h1>Preparation</h1>
        <p>Last week, we introduced the basic workings of the Arduino. We added LEDs and some potmeters. This week and the next, we are going to have the Arduino communicate with our computer (and vice versa) and for that, we need a communication protocol – USB, in fact.</p>
        <ol>
          <li>Read <a href="https://learn.sparkfun.com/tutorials/serial-communication/all">this article on serial communication at sparkfun.com</a>. You don't have to go over all the stuff, but at least read until you see the headline <i>Wiring and Hardware</i>. Also, don't worry if you do not completely graps everything that is talked about in this article – a small working knowledge of the protocol will be sufficient.</li>
        <li>Have a look at <a href="https://docs.arduino.cc/software/ide-v2/tutorials/ide-v2-serial-monitor/">this tutorial on the serial monitor</a>. You don't have to actually <i>make</i> the setup that they are talking about here, as we are going to work on this during this lab class anyway.</li>
        <li>Make sure that you have a possibility to hook up the Arduino on your computer (bring a USB-A to USB-C interface to class if necessary).</li>
        <li>Make sure you have finished and understand all the exercises of week 1.</li>
        </ol>

    <section id="exercise1">
       <h2>Exercise 1: Create a walking light</h2>

       <p>Realise a breadboard with four LEDs in parallel. Have the positive pin of each of the LEDs wired to a different (preferably sequential) port on the Arduino (e.g. pins 4, 5, 6, and 7 - there are some things happening at port 0 and 1, so we usually shy away from using those in a more general setup). Next, create a new Arduino-sketch in which you define all those pins as <tt>OUTPUT</tt> (you should do this in the <tt>setup()</tt> method; have a look at the BlinkingLed-example).</p>

       <p class="center"><img class="image" src="imgs/walking-leds.png" alt="The setup of four LEDs that blink one after the other"></p>

       <p class="center"><img class="image" src="imgs/walking-leds-fritzing.png" alt="Model of the setup"></p>

        <p>Now, in the <tt>loop()</tt> method, you should iterate over all those pins and set them to <tt>HIGH</tt>, wait for a few microseconds, set them to <tt>LOW</tt> again and repeat the process for the next pin. Have a look at the code below to get an idea of this process:</p>

<pre class="code"><code class="language-arduino">void loop() {
   digitalWrite(4, HIGH);
   delay(500);
   digitalWrite(4, LOW);
   delay(500);
}
</code></pre>

     <p>In your <tt>loop()</tt>, iterate over all the pins that the LEDs are connected to and have every pin switch on and off. If all goes well, you have created a walking light. Can you make this light go back and forth as well? Play around with the value of the call to <tt>delay()</tt> to get a feeling of the effects of the changes you make.</p>
        </section><!-- exercise1 -->

   <section id="exercise2">
    <h2>Exercise 2</h2>

     <p>Add a variable resistor (a <i>potentiometer</i>) to your breadboard. Connect the external pins to the plus and the minus and the middle pin to an analog input of the Arduino; look at the drawing and the image below to see how to do this.</p>

     <p>Next, create a new sketch and copy the code below. If you run this sketch with the serial monitor open, you will see the value that the Arduino is reading from the potentiometer. If you turn it, you will notice that the value that it is reading goes from 0 to 1023, while the second parameter is going from 1 to 255 (this is an edited example from <a href="https://docs.arduino.cc/built-in-examples/analog/AnalogInOutSerial">Arduino.cc itself</a>).</p>

    <p class="aside"><u>NOTE:</u> We will dive into serial communication next week; for now it suffices to know that the code above writes values to the computer, which we can display in the serial monitor of the Arduino-IDE.</p>

<pre class="code"><code class="language-arduino">const int analogInPin = A0;  // Analog input pin that the potentiometer is attached to
  int sensorValue = 0;        // value read from the pot
  int outputValue = 0; // the value we are going to use later on
  
  void setup() {
    Serial.begin(9600);
  }
  
  void loop() {
    // read the analog in value:
    sensorValue = analogRead(analogInPin);
  
    // map it to the range of the analog out:
    outputValue = map(sensorValue, 0, 1023, 0, 255);
  
    Serial.print("sensor = ");
    Serial.print(sensorValue);
    Serial.print("\t output = ");
    Serial.println(outputValue);
  
    delay(2);
  }
  </code></pre>

  <p class="center">
    <img class="image" src="imgs/potmeter-wiring.png" alt="The wiring of the potmeter for this experiment">
    <img class="image" src="imgs/potmeter.png" alt="How the potmeter is wired from the breadboard to the Arduino">
  </p>

  <p class="center">
    <img class="image" src="imgs/potentio-meter-fritzing.png" alt="Model of the setup">
  </p>

  <p>Now add the code above to your walking light code, so that it changes the value of the call to <tt>delay()</tt> in your walking light. Have the Arduino read and map the value of the potentiometer on every loop; if all goes well, you are now able to change the speed with which the LEDs are 'walking' by changing the value of the potentiometer.</p>

</section><!-- exercise2 -->

  </div> <!-- main -->

    <div id="hamburger">
        <img src="imgs/menu.jpeg" alt="Hamburger-menu">
    </div><!-- hamburger -->

    <?php
        $active = 'week2';
        include 'menu.php';
    ?>

    <div id="toc" class="sidebar">
        <h1>This week</h1>
        <ol>
           <li><a href="#preperation">preperation</a></li>
           <li><a href="#exercise1">signal inversion</a></li>
           <li><a href="#exercise2">basic arduino</a></li>
           <li><a href="#exercise3">create a walking light</a></li>
           <li><a href="#assignment">assignment</a></li>
        </ol>
    </div><!-- TOC -->


    
<script src="js/hamburger.js"></script>
<script src="js/images.js"></script>
<script src="hilightjs/highlight.min.js"></script>
<script>hljs.highlightAll();</script>
</body>
</html>