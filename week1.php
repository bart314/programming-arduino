<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coding and Electronics - week 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Lab course week 1:</h1>
        <h1>Basic electronics</h1>
    </header>

    <div id="main">
  <section id="preperation">
    <h1>Preparation</h1>
    <ol>
      <li>In order to prepare for the workshop, read <a href="https://www.allaboutcircuits.com/textbook/direct-current/chpt-1/voltage-current/">this introduction on voltages and currents</a>.</li>
      <li>To give a clear and neat overview of the concepts described in this introduction (and some more), we have provided the following table. Study this table and make sure you understand what is being stated in it.</li>
    </ol>

    <table>
        <tr class="header">
            <th width="10%">Name</th>
            <th class="extra">Description</th>
            <th width="10%">Unit</th>
            <th width="10%">Symbol</th>
            <th class="extra">Notes</th>
        </tr>

        <tr>
            <th><a href="https://en.wikipedia.org/wiki/Electric_charge">Charge</a></th>
            <td class="extra">The property of matter to experience a force when put in an (electro)magnetic field.</td>
            <td>Coulomb</td>
            <td><b><i>C</i></b></td>
            <td class="extra">Charge can be positive or negative; elements of the same charge oppose each other, while elements of opposing charge are attracted.</td>
        </tr>

        <tr>
            <th><a href="https://en.wikipedia.org/wiki/Electric_current">Current</a></th>
            <td class="extra">The amount of charge that flows through a conductor in a certain amount of time.</td>
            <td>Ampère</td>
            <td><b><i>I</i></b></td>
            <td class="extra">One ampère is actually one coulomb per second.</td>
        </tr>

        <tr>
            <th><a href="">Voltage</a></th>
            <td class="extra">The difference in (electrical) potential between two points in a circuit.</td>
            <td>Volt</td>
            <td><b><i>V</i></b></td>
            <td class="extra">The voltage at any point in a circuit is always relative to the voltage at some other point – usually the negative terminal of the power source.</td>
        </tr>

        <tr>
            <th><a href="https://en.wikipedia.org/wiki/Electric_power">Power</a></th>
            <td class="extra">The rate at which electrical energy is transferred over a conductor.</td>
            <td>Watt</td>
            <td><b><i>P</i></b></td>
            <td class="extra">A watt is actually one joule per second.</td>
        </tr>

        <tr>
            <th><a href="https://en.wikipedia.org/wiki/Electrical_resistivity_and_conductivity">Resistivity</a></th>
            <td class="extra">The ease (or lack thereof) with which conductors carry charge.</td>
            <td>Ohm</td>
            <td><b><i>&Omega;</i></b></td>
            <td class="extra">An normal wire has a resistivity of almost zero. In general, <a href="https://en.wikipedia.org/wiki/Ohm%27s_law">Ohm's law</a> applies: R=V/I.</td>
        </tr>
    </table>
  </section><!-- preperation -->

  <section id="exercise1">
    <h1>Exercises</h1>
    <h2>Exersise 1: Getting to know the breadboard</h2>
    <p>During the planairy part, the wiring of the breadboard was explained. For easy reference, see the images below.</p>

    <p class="center">
        <img class="image" src="imgs/breadboard.png" alt="A normal breadboard">
        <img class="image" src="imgs/breadboard-open.png" alt="The wirings in the breadboard shown">
    </p>

    <p>Connect the electromotor to the breadboard, as has been explained in the plenairy part. Make sure that you make use of jump wires to transfer the current from the long lines at the side to the smaller lines orthogonal to these. Add a small switch to the circuit, so that the electromotor only runs when the switch is pressed.</p>

    <p>Change the wiring of the electromotor, so that what was previously on the negative pole of the current is now on the positive pole. Do you notice any difference in the rotation of the motor? Why do you think this is?</p>
        
    <p class="center">
        <img class="image" src="imgs/electromotor-connected.png" alt="The electromotor connected with a switch">
    </p>
    <p class="center">
        <img class="image" src="imgs/electromotor-connected-fritz.png" alt="model of the connected electromotor">
    </p>
  </section> <!-- exercise 1 -->


    <section id="exercise2">
    <h2>Exercise 2: Adding resistors</h2>
    <p>In order to control the amount of current over a conductor, we need to add resistors to the circuit. Lots of components don't work well when too much current is applied to it – making them too hot so that they eventually would burn out (as would be the case if you were to put an LED in the previous circuit).</p>

    <p>Add a resistor after the switch in your circuit with the electromotor. Do you notice any difference between the workings, when you close the switch? You can determine the resistance of the resistor by looking at its colored bands. Check <a href="https://www.calculator.net/resistor-calculator.html">this site to see how to do that</a>. Note that the direction of the resistor doesn't matter: you can put them either way in the breadboard.</p>

    <p class="center"><img class="image" src="imgs/resistors.png" alt="Resistors with different values"></p>

    <p>Now we know how to work with resistors, we can work with LEDs insteads of an electromotor – which is visually more attractive, less noisy and easier to do. Clear you breadboard completely and connect one LED with the current, using a resistor of about 150 ohm (the exact amount doesn't matter that much in this point, and is dependent on the voltage of the source). Remember that with LED's, the orientation <em>does</em> matter: the longer pin of the LED should be connected with the positive pole of the power source.</p>

    <p>Now, use jump wire to connect multiple LEDs on the breadboard. In general, there are two ways in which you can connect the LEDs to each other: in parallel of in series – have a look a the drawing below. Begin with a few LEDs in series (add one resistor 150 ohm). What happens when you remove one LED from the circuit? Can you explain why that is?</p>

    <p>Now, make a new circuit but this time put the LEDs parallel. Make sure that you use individual resistors for each individual LED (if you're interested in why this is needed, <a href="https://www.youtube.com/watch?v=5BoBNW3swpA">check out this explanation by SimplyPut</a>). Now what happens when you remove one of the LEDs of the circuit. Can you explain the difference?</p>

    <p class="center">
        <img class="image" src="imgs/leds-in-series.png" alt="LEDs connected in series">
        <img class="image" src="imgs/leds-in-parallel.png" alt="LEDs connected parallel">
    </p>
    <p class="center">
        <img class="image" src="imgs/parallel-leds-fritzing.png" alt="Model of the parallel leds">
    </p>

    <p>Finally, add a variable restistor between your power supply and the LEDs. You can use a potentiometer for that, but (more interesing) some kind of sensor (several types are available in DAT-space). Experiment with different values of these sensors – do you notice what is happening?</p>

    <p class="center">
        <img class="image" src="imgs/multiple-leds.png" alt="multiple LEDs in series on the breadboard">
        <img class="image" src="imgs/leds-with-sensor.png" alt="LEDs in series with a sensor in the circuit">
    </p>
    <p class="center">
        <img class="image" src="imgs/parallel-leds-potmeter-fritzing.png" alt="Model of the parallel leds with a variable resistor">
    </p>
    </section><!-- exercise 2 -->

    <section id="exercise3">
    <h2>Exercise 3: Capacitors</h2>

    <p>In this exercise, we are only showing the general workings of capacitors. In order to do this, we use manual switches to change the state of the capacitor from state 1 (charging) to state 2 (discharging). Later, we will show you how to use connected <i>electronic switches</i> in order to automate this process.</p>

    <p>As has been explained, capacitors store small amounts of energy in their metal plates that are separated by an insulator. They are used to hold this energy until other parts of the circuit needs it. When you connect a capacitor to a battery, this battery keeps pushing electrons to the capacitor until they are fully saturated – the capacitor is said to be <i>completely charged</i>.</p>

    <p>When a capacitor is fully charged, the voltage drop across its plates equals the battery voltage. When you remove the battery, current doesn't flow and charge remains in the capacitor. The capacitor looks like a power source on its own because it has electrical charge stored on its plates.</p>

    <p>So now, we can for example use this energy to light up a LED, if only for a brief amount of time (the charge stored on a capacitor is usually not that large). In order to do this, we have to provide a path between both ends of the capacitor, allowing charge to flow over the LED.</p>

    <p>Look at the schema below and make that on your breadboard. When you press switch <b><i>S1</i></b>, current flows through the capacitor, allowing it to charge. Then, when you release <b><i>S1</i></b> and press <b><i>S2</i></b>, you provide a path between both ends of the capacitor, allowing current to flow and thereby lightning the LED.</p>

    <p class="center">
        <img class="image" src="imgs/manual-blinking-led-schema.png" alt="Schema of the manual blinking LED">
        <img class="image" src="imgs/manual-blinking-led.png" alt="A realisation on the breadboard">
    </p>
    <p class="center">
        <img class="image" src="imgs/capacitor-led-fritzing.png" alt="Model of the schematic above">
    </p>

    <p>Experiment with different values for the capacitor – or put several capacitors in series; how does that influence the behavior of the circuit? Also check what happens when you press both switches at the same time. Can you explain what is happening?</p>

    <p>As you see, the wire from the LED is also connected to the ground. Would the circuit still work in the same manner if this connection was removed after the capacitor was charged?</p>
    </section> <!-- exercise 3-->

    <section id="exercise4">
    <h2>Exercise 4: Transistors</h2>

    <p>There are literary hundreds of types of transistors, all of whom have different specific qualities and workings. In general, transistors can be used as either a switch or as an amplifier; in these exercises, however, we are only going to use them as switches. We will use a very common PNP transistor called 2N2222A. Have a look at <a href="https://www.onsemi.com/pdf/datasheet/p2n2222a-d.pdf">the datasheet of this component</a> if you're interested in its particualrs.</p>

    <p>The working of transistors has been explained in the planairy part. To recall, a simple drawing of the pins is provided below</p>

    <ul>
        <li><b><i>V<sub>BC</sub></i></b> &lt; 0.7V &rarr; switch off</li>
        <li><b><i>V<sub>BC</sub></i></b> &gt; 0.7V AND <b><i>I<sub>B</sub></i></b> small &rarr; switch partially on</li>
        <li><b><i>V<sub>BC</sub></i></b> &gt; 0.7V AND <b><i>I<sub>B</sub></i></b> = max &rarr; switch on</li>
    </ul>

    <p class="center"><img class="image" src="imgs/transistor.png" alt="A transistor with its pins named"></p>

    <p>Have a look at the circuit below. What do you think will happen if you put current on either point <b><i>A</i></b> or point <b><i>B</i></b>? As you can see in the right picture, we have used push button to put current on the base of either transistor (also note that we have used the same colors for the same functionality – something that is good practice when you start to make more complex circuits). Re-create this circuit on your own breadboard and experiment with the push button.</p>

    <p class="center">
        <img class="image" src="imgs/or-circuit.png" alt="The circuit for an OR-gate">
        <img class="image" src="imgs/or-circuit-breadboard.png" alt="An OR-gate realised on a breadboard">
    </p>
    <p class="center">
        <img class="image" src="imgs/or-circuit-fritzing.png" alt="Model of the circuit above">
    </p>

    <p>As you have seen, the LED goes on when either of the push buttons is pressed. You have just created what is known as a OR-gate: the LED turns on when either A OR B is pressed. We can actually summarize the functionality of this small circuit by providing its so-called <i>truth-table</i> (1 means current is present, 0 means current is not present):</p>

    <table class="truth-table">
        <tr><th>A</th><th>B</th><th>A or B</th></tr>
        <tr><td>1</td><td>1</td><td>1</td></tr>
        <tr><td>1</td><td>0</td><td>1</td></tr>
        <tr><td>0</td><td>1</td><td>1</td></tr>
        <tr><td>0</td><td>0</td><td>0</td></tr>
    </table>

    Now, as an extra challenge, can you come up with a circuit for an AND-gate? A circuit whose working corresponds to the truth-table below?

    <table class="truth-table">
        <tr><th>A</th><th>B</th><th>A and B</th></tr>
        <tr><td>1</td><td>1</td><td>1</td></tr>
        <tr><td>1</td><td>0</td><td>0</td></tr>
        <tr><td>0</td><td>1</td><td>0</td></tr>
        <tr><td>0</td><td>0</td><td>0</td></tr>
    </table>

    </section><!-- exercise 4-->

    <section id="assignment">
        <h2>Assignment: solder an electronic sculpture</h2>
        <p>Until now, we have done all of our work on the breadboard. This is perfect for quick experimenting and rapid prototyping, but in real life you probably want to solder the components together: this makes your work more robust and permanent.</p>

        <p>Obviously, esthetics is seldom a requirement for such an electronic circuit (a notable exception is formed by the (early) Macintosh computers, whose electronic boards were as thoroughly designed as the more visible parts of the hardware). However, in this assignment we <i>are</i> going to make a beautiful <i>and</i> (more of less) functional sculpture.</p>

        <p>We did some soldering during class; now it is up to you to make a nice sculpture using at least LEDs, resistors and a battery. Make sure that the circuit you make actually <i>works</i>, but solder it together so that looks nice. You could just make a simple lamp (such as the one we showed during class), or make it more interesing using some active components.</p>

        <p class="center"><img class="image" src="imgs/led-sculpture.png" alt="LED sculpture"></p>

        <p>This week, you can go to the electronics lab for help and assistance on this assignment. We will look at your elaborations at the beginning of the next class on Friday (before we start with <a href="week2.php">the next topics</a>). </p>
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
           <li><a href="#exercise3">capacitors</a></li>
           <li><a href="#exercise4">transistors</a></li>
           <li><a href="#assignment">assignment</a></li>
        </ol>
    </div><!-- TOC -->



</body>
<script src="js/hamburger.js"></script>
<script src="js/images.js"></script>
</html>