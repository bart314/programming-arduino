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
        <h1>More hardware and basic Arduino</h1>
    </header>

  <div id="main">
    <section id="preperation">
        <h1>Preparation</h1>
        <p>Last week, we introduced several basic components: resistors, capacitors and transistors. In this week, we will use this knowledge to have several of these components work together. </p>
        <ol>
            <li>Have a look at <a target="_blank" href="https://www.youtube.com/watch?v=FDmHVRC6pQk">this video</a> (5:58) explaining the timing aspects of capacitors.</li>
            <li>Study the following introductionary texts on the (workings of the) Arduino:
                <p class="aside"><u>NOTE:</u> these are all links to sections within the same page; you don't have to study the whole page for this week, but only the particular sections that these links refer to.</p>
                <ol>
                    <li><a target="_blank" href="https://docs.arduino.cc/learn/starting-guide/getting-started-arduino#anatomy-of-an-arduino-board">The anatomy of an Arduino board</a></li>
                    <li><a target="_blank" href="https://docs.arduino.cc/learn/starting-guide/getting-started-arduino#basic-operation">Basic operation of the Arduino board</a></li>
                    <li><a target="_blank" href="https://docs.arduino.cc/learn/starting-guide/getting-started-arduino#circuit-basics">Circuit basics</a></li>
                </ol>
            </li>
            <li><p>Download <a href="https://www.arduino.cc/en/software" target="_blank">the Arduino Integrated Developen Environment (IDE)</a> and make sure your Arduino is found by this software; you can easily check this by opening <tt>Files &rarr; Examples &rarr; 01.Basics &rarr; Blink</tt> and hitting the <tt>Upload</tt> button on the top-left of the IDE. If the connection between your computer and the Arduino is correct, the code will upload and the small onboard LED will start to blink. </p>
            <p>If your computer cannot find the Arduino, you'll get an error message stating something like <tt style="color:red">can't open device</tt>. In that case, use <tt>Tools &rarr; Port</tt> to select another port (those are actually your USB-ports)</p></li>
            <li>Have a look at the Arduino IDE, of which you see an image below. Make sure you know and understand the different areas and buttons of this program.</li>
        </ol>
        <p class="center"><img class="image" src="imgs/anatomy-arduino-ide.png" alt="The most important pieces of the Arduino IDE"></p>
    </section><!-- preparation -->

    <section id="exercise1">
        <h2>Exercise 1: Signal inversion</h2>
        <p>Last week, we introduced several logical gates: we made an OR-gate and worked on an AND gate. One of remaining gates is the NOT-gate, whose truth-table can be found below. Basically, this gate functions as a signal-inverter: it returns whatever is NOT inputted. In your artistic practice, it is likely that at one moment you will need to invert a signal, so it is good that you encountered it here.</p>

        <table class="truth-table">
            <tr><th>A</th><th>NOT A</th></tr>
            <tr><td>1</td><td>0</td></tr>
            <tr><td>0</td><td>1</td></tr>
        </table>

        <p>Just to get your juices flowing at the start of this lab-course, we are going to make this relatively simple circuit.</p>

        <p class="center">
            <img class="image" src="imgs/not-gate-schematics.jpeg" alt="Schema of a NOT-gate">
            <img class="image" src="imgs/not-gate-breadboard.jpeg" alt="A NOT-gate on a breadboard">
        </p>
        <p class="center">
            <img class="image" src="imgs/not-gate_fritzing.png" alt="A model of a NOT-gate">
        </p>

        <p>Re-create this circuit on your breadboard and make sure it works. Explain why it is doing what it is. Do you think that this is the best circuit for a signal inverter?</p>

    </section><!-- exercise1 -->


    <section id="exercise2">
        <h2>Exercise 2: Basic Arduino</h2>
        <p>The Arduino platform has since its start in 2005 grown to become one of the most recognizable brands in the space of electronics and embedded design. Off course, we need to use our breadboard to actually create interesting stuff, as the pins on the Arduino are too few, too narrow and too error prone to be workable.</p>

        <h4>Part 1</h4>
        <p>Make sure you have the blinking LED example loaded on your Arduino. As has been explained, the pin that corresponds to the buildin LED is 13. Make use of this knowledge to have a LED on the breadboard blink. Next, add a few more LEDs on the same pin (or port, as they are also called regularly). For a nice effect, you can perhaps use different colors of LEDs.</p>

        <p class="center">
            <img class="image" src="imgs/arduino-multiple-leds.png" alt="Multiple LEDs blinking in unison">
        </p>

        <p class="center">
          <img class="image" src="imgs/parallel-leds-fritzing.png" alt="Model of the setup">
        </p>

      <p>Add a push button to your circuit so that the LED only blinks when the button is down. Do you think you need to change the Arduino-code for this?</p>

        <h4>Part 2</h4>
        <p>Last week, we introduced the variable resistor (potentiometer). We can also hook such a thing on the Arduino, to have the physical communicate with the virtual. In this second step we are going to experiment with it.<p>

<p>Add a potentiometer to the breadboard; connect one of the outer pins to 5V and the other one to the ground. Connect the middle pin, the one that is actually the washer, to one of the <i>Analog input-ports</i> (<pre>A0</pre> - <pre>A4</pre>). </p>

<p>During the plenary part, it was shown how to read the value of the potentiometer: the relevant code is repeated below:</p>

<pre class="code"><code class="language-arduino">
// above everything:
// first declare the pin for the potmeter:
int sensorPin = A0;

// variable to store the value coming from the potmeter
int sensorValue = 0;


// in your loop:
void loop() {
  // other code omitted
  sensorValue = analogRead(sensorPin);
  if(...) {
    /// start blinking
  }
}
</code></pre>

<p>Make use of this setup so that the light only starts to blink when the potentiometer is half way or more. You will need a <i>conditional statement</i> for this, which we also demonstrated during the plenary part. If you don't remember, have a look at <a href="https://www.arduino.cc/reference/en/language/structure/control-structure/if/">the documentation for conditionals on the Arduino-API</a>, the most important part of which is copied below.</p>

<pre class="code"><code class="language-arduino">if (condition) {
  //statement(s)
}</code></pre>
        </p>

        </section><!-- exercise 2-->


        <section id="exercise3">
       <h2>Exercise 3: Create a walking light</h2>

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
        </section><!-- exercise 3 -->

   <section id="assignment">
    <h2>Assignment</h2>


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

  <p>Finally, integrate both the LED and the variable resistor in some kind of construction so that we don't have to look at breadboards and Arduino's. Make sure you think about this construction and are able to explain why exactly you decided on this particular form. You can also build on your soldering-sculpture from last week.</p>

  <p>It should be possible to have the construction run without connecting it to a computer (i.e. use the battery-power). Next week, we will use a sensors to change the speed of this walking light. You can have <a href="week3.php#assignment">a look at that particular assignment already</a> in order to make your construction already a bit attuned towards that elaboration.</p>
</section><!-- assignment -->
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