<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coding and Electronics - week 1</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="hilightjs/vs.min.css">
    <script src="js/mathjax.js"></script>
</head>
<body>

    <header>
        <h1>Lab course week 1:</h1>
        <h1>Basic electronics and Arduino</h1>
    </header>

    <div id="main">
  <section id="preperation">
    <h1>Preparation</h1>
    <ol>
      <li>In order to prepare for the workshop, read <a href="https://www.allaboutcircuits.com/textbook/direct-current/chpt-1/voltage-current/">this introduction on voltages and currents</a>. You don't have to go over the <i>complete</i> text, but at least read until the title <i>The Definition of Voltage</i>.</li>
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
      <li>Have a look at the Arduino IDE, of which you see an image below. Make sure you know and understand the different areas and buttons of this program. It is likely that your Arduino IDE will look somewhat different, depending on the version and on your operating system.</li>
      </ol>
        <div class="center"><img class="image" src="imgs/anatomy-arduino-ide.png" alt="The most important pieces of the Arduino IDE"><div >
  </section><!-- preperation -->

  <section id="exercise1">
    <h1>Exercises</h1>
    <h2>Exersise 1: Getting to know the breadboard</h2>
    <p>During the planairy part, the wiring of the breadboard was explained. For easy reference, see the images below.</p>

    <div class="center">
        <img class="image" src="imgs/breadboard.png" alt="A normal breadboard">
        <img class="image" src="imgs/breadboard-open.png" alt="The wirings in the breadboard shown">
    </div>

    <p>Connect the electromotor to the breadboard, as has been explained in the plenairy part. Make sure that you make use of jump wires to transfer the current from the long lines at the side to the smaller lines orthogonal to these. Add a small switch to the circuit, so that the electromotor only runs when the switch is pressed.</p>

    <p>Change the wiring of the electromotor, so that what was previously on the negative pole of the current is now on the positive pole. Do you notice any difference in the rotation of the motor? Why do you think this is?</p>
        
    <div class="center">
        <img class="image" src="imgs/electromotor-connected.png" alt="The electromotor connected with a switch">
    </div>
    <div class="center">
        <img class="image" src="imgs/electromotor-connected-fritz.png" alt="model of the connected electromotor">
      </div>
  </section> <!-- exercise 1 -->


    <section id="exercise2">
    <h2>Exercise 2: Adding resistors</h2>
    <p>In order to control the amount of current over a conductor, we need to add resistors to the circuit. Lots of components don't work well when too much current is applied to it – making them too hot so that they eventually would burn out (as would be the case if you were to put an LED in the previous circuit).</p>

    <p>Add a resistor after the switch in your circuit with the electromotor. Do you notice any difference between the workings, when you close the switch? You can determine the resistance of the resistor by looking at its colored bands. Check <a href="https://www.calculator.net/resistor-calculator.html">this site to see how to do that</a>. Note that the direction of the resistor doesn't matter: you can put them either way in the breadboard.</p>

    <div class="center"><img class="image" src="imgs/resistors.png" alt="Resistors with different values"></div>

    <p>Now we know how to work with resistors, we can work with LEDs insteads of an electromotor – which is visually more attractive, less noisy and easier to do. Clear you breadboard completely and connect one LED with the current, using a resistor of about 150 ohm (the exact amount doesn't matter that much in this point, and is dependent on the voltage of the source). Remember that with LED's, the orientation <em>does</em> matter: the longer pin of the LED should be connected with the positive pole of the power source.</p>

    <div class="center">
        <img class="image" src="imgs/some-leds.png" alt="LED's with their different pin-lengths">
    </div>

    <p>Now, use jump wire to connect multiple LEDs on the breadboard. In general, there are two ways in which you can connect the LEDs to each other: in parallel of in series – have a look a the drawing below. Begin with a few LEDs in series (add a resistor 150 ohm). What happens when you remove one LED from the circuit? Can you explain why that is?</p>

    <div class="aside">
        <div>Though we are not asking you to calculate the exact value of the resistor, it is, in fact, not that difficult. You only need to know the *voltage drop* of the LED and the required *light intensity*, which is dependent on the amount of *current*. </div>
        <div>Usually, the *voltage drop* (\(V_f\)) of an LED is 1.7 to 2.0 volts for red LEDs, while the maximum continuous-on current (\(I_{LED}\)) is 20mA (0.020A). So if we power the circuit with a 9V battery, the value of the resistor follows from <a href="Ohm's law - Wikipedia">Ohms law</a>: 
            <div class="center"> \(R = \frac{9 - 1.7}{0.020} = 365 \Omega\).</div>
        </div>
    </div>
 
    <p>Now, make a new circuit but this time put the LEDs parallel. Make sure that you use individual resistors for each individual LED (if you're interested in why this is needed, <a href="https://www.youtube.com/watch?v=5BoBNW3swpA">check out this explanation by SimplyPut</a>). Now what happens when you remove one of the LEDs of the circuit. Can you explain the difference?</p>

    <div class="center">
        <img class="image" src="imgs/leds-in-series.png" alt="LEDs connected in series">
        <img class="image" src="imgs/leds-in-parallel.png" alt="LEDs connected parallel">
    </div>
    <div class="center">
        <img class="image" src="imgs/parallel-leds-fritzing.png" alt="Model of the parallel leds">
    </div>

    <p>Instead of just a regular resistor, we can also use a <i>variable resistor</i>: this component is like a regular resistor, but with a <i>washer</i> in between so that we can tap in the resistance at any given time. Look at the image below: when the washer is turned completely to the left, all the current from <i><b>A</b></i> over <i><b>B</b></i>, so nothing is happening at pin <i><b>C</b></i>. On the other hand, if the washer is turned completely to the right, all the current needs to go over the complete resisting wire, so almost no current will leave the circuit at pin <i><b>B</b></i>.</p>

    <div class="center">
        <img src="imgs/werking-potmeter.jpeg" alt="The general structure of a potentiometer">
    </div>

    <p>Add a variable restistor between your power supply and the LEDs. You can use a potentiometer for that, but (more interesing) some kind of sensor (several types are available in DAT-space). Experiment with different values of these sensors – do you notice what is happening?</p>

    <div class="center">
        <img class="image" src="imgs/multiple-leds.png" alt="multiple LEDs in series on the breadboard">
        <img class="image" src="imgs/leds-with-sensor.png" alt="LEDs in series with a sensor in the circuit">
    </div>
    <div class="center">
        <img class="image" src="imgs/parallel-leds-potmeter-fritzing.png" alt="Model of the parallel leds with a variable resistor">
    </div>
    </section><!-- exercise 2 -->

    <section id="exercise3">
        <h2>Exercise 3: Basic Arduino</h2>
        <h3>Part 1: expanding on the blinking LED </h3>

        <p>The Arduino platform has since its start in 2005 grown to become one of the most recognizable brands in the space of electronics and embedded design. Off course, we need to use our breadboard to actually create interesting stuff, as the pins on the Arduino are too few, too narrow and too error prone to be workable.</p>

        <p>Make sure you have the blinking LED example loaded on your Arduino. As has been explained, the pin that corresponds to the buildin LED is 13. Make use of this knowledge to have a LED on the breadboard blink. Next, add a few more LEDs on the same pin (or port, as they are also called regularly). For a nice effect, you can perhaps use different colors of LEDs.</p>

        <div class="center">
            <img class="image" src="imgs/arduino-multiple-leds.png" alt="Multiple LEDs blinking in unison">
        </div>

        <div class="center">
          <img class="image" src="imgs/parallel-leds-fritzing.png" alt="Model of the setup">
        </div>

    <h3>Adding a push button</h3>
      <p>Now we are going to add a push button to the circuit so that the LED only blinks when this button is down. We can actually do this in two different ways: we can just use the switch to stop the flow of the current, or we can use some internal logic on the Arduino. The first way is actually quite ease, so we're going to work on the second option.</p>

      <p>For this to work, you will need a <i>conditional statement</i>, which we also demonstrated during the plenary part. If you don't remember, have a look at <a href="https://www.arduino.cc/reference/en/language/structure/control-structure/if/">the documentation for conditionals on the Arduino-API</a>, the most important part of which is copied below.</p>

<pre class="code"><code class="language-arduino">if (condition) {
    //statement(s)
}</code></pre>

    <p>Connect the one part of the push button to the \(V_{CC}\) and the other pin to some port on your Arduino. In your <tt>setup</tt> method, define this pin as <i>input</i> (<tt>pinMode(YOUR_PINNR, INPUT;)</tt>, also have a look at <a href="https://docs.arduino.cc/language-reference/en/functions/digital-io/pinMode/" target="_blank">the documentation</a>). Next, have your <tt>loop</tt> method continously check for the value of the <tt>PINNR</tt>, using <tt>digitalRead(PINNR);</tt>. When this value is <tt>HIGH</tt>, start the blinking. </p>

    <p>Have a look at <a href="https://docs.arduino.cc/built-in-examples/digital/Button/">this example</a> to get a basic idea.</p>

    </section><!-- exercise3 -->

    
    <section id="exercise4">
        <h2>Exercise 4: adding a potentiometer</h2>
        <p>We can also hook a potentiometer on the Arduino, to have the physical communicate with the virtual. In this second step we are going to experiment with it.<p>

<p>Add a potentiometer to the breadboard; connect one of the outer pins to 5V and the other one to the ground. Connect the middle pin, the one that is actually the washer, to one of the <i>Analog input-ports</i> (<tt>A0</tt> - <tt>A4</tt>). </p>

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

<p>Make use of this setup so that the light only starts to blink when the potentiometer is half way or more. As an extra challenge, can you use the potmeter to control the speed with which the LED is blinking...?</p>

    </section><!-- exercise4 -->


    <section id="assignment">
        <h2>Assignment: solder an electronic sculpture</h2>
        <p>Until now, we have done all of our work on the breadboard. This is perfect for quick experimenting and rapid prototyping, but in real life you probably want to solder the components together: this makes your work more robust and permanent.</p>

        <p>Obviously, esthetics is seldom a requirement for such an electronic circuit (a notable exception is formed by the (early) Macintosh computers, whose electronic boards were as thoroughly designed as the more visible parts of the hardware). However, in this assignment we <i>are</i> going to make a beautiful <i>and</i> (more of less) functional sculpture.</p>

        <p>We did some soldering during class; now it is up to you to make a nice sculpture using at least LEDs, resistors and a battery. Make sure that the circuit you make actually <i>works</i>, but solder it together so that looks nice. You could just make a simple lamp (such as the one we showed during class), or make it more interesing using some active components.</p>

        <div class="center">
            <img class="image" src="imgs/led-sculpture.png" alt="LED sculpture">
            <img class="image" src="imgs/soldering-sculpture-2.jpeg" alt="A bug made with wires and a battery">
        </div>

        <p>This week, you can go to the electronics lab for help and assistance on this assignment. We will look at your elaborations at the beginning of the next class (before we start with <a href="week2.php">the next topics</a>). </p>
    </section><!-- assignment -->

    </div><!-- main -->

    <div id="hamburger">
        <img src="imgs/menu.jpeg" alt="Hamburger-menu">
    </div><!-- hamburger -->

    <?php
        $active = 'week1';
        include 'menu.php';
    ?>

    <div id="toc" class="sidebar">
        <h1>This week</h1>
        <ol>
           <li><a href="#preperation">preperation</a></li>
           <li><a href="#exercise1">breadboard</a></li>
           <li><a href="#exercise2">resistors</a></li>
           <li><a href="#exercise3">basic arduino</a></li>
           <li><a href="#exercise4">potentiometers</a></li>
           <li><a href="#assignment">assignment</a></li>
        </ol>
    </div><!-- TOC -->



<script src="js/hamburger.js"></script>
<script src="js/images.js"></script>
<script src="hilightjs/highlight.min.js"></script>
<script>hljs.highlightAll();</script>
</body>
</html>