<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coding and Electronics - assessment</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Lab Course: final assessment</h1>
    </header>

    <div id="main">
        <h2 id="introduction">Introduction: through the looking glass</h2>

<p>Naively, the glass of our computer or mobile phone screen can be seen as the boundary between that which is traditionally called the 'virtual' and the 'physical'. When we post text on a social network, create files on our computer, or talk with collegues using Teams, we seem to leave our physicality behind and enter the domain of the virtual: the online realm with its owwn logic, boundaries, and customs. On the other hand, when we close our laptops and leave our phones in our pockets in order to go for a walk, enjoy a nice dinner, or play the piano, we are again in the domain of the physical: the hard fleshy reality with its own logic, boundaries, and customs.</p>
<p>In this sense, we could speak of two different worlds: the online world of the virtual and the offline world of the physical. The edge between these two worlds is defined by our physical keyboards, trackpads and game consoled with which we manipulate the objects in the virtual world, whose state and reactions we observe by looking at the screen and listening to the sounds they make (and, sparsely, feeling some haptic feedback). There remains, however, always some kind of unbridgable abyss between the two. To borrow <a href="https://en.wikipedia.org/wiki/Don_Norman" target="_blank">Donald Norman</a>'s phrase: the <i>gulf of expectation</i> and the <i>gulf of evaluation</i> are never completely closed.</p>


<h2 id="arduino_and_unity">Arduino and Unity</h2>

<p>During the module on Unity, you have learned how to create a virtual world. You know how to make and position objects, how to give them shapes and color, and how to move them around in space. This way, you give meaning to specific parts of space in order to differentiate these parts from the principally endless cartesian space. Paraphrasing <a href="https://en.wikipedia.org/wiki/Espen_Aarseth" target="_blank">Espen Aarseth</a>, we could state that creating a virtual reality is “essentially concerned with spatial representation and negotiation" – both of which we do employing the physical structures we mentioned above.</p>
<p>On the other hand, we have learned to work with the Arduino. Using this small microprocessor, we were able to use some parts of the physical realm to change the brightness of an LED, make a motor rotate faster or have a microchip emit some kind of sound for us. We have worked with physical sensors to change the state and representation of physical actuators.</p>
<p>We also showed how we can use serial communication to connect the virtual with the physical. In a way one could state that the Arduino gives us possibilities to finally bridge the gulfs that Norman is talking about. We can finally go <i>through the looking glass</i>.</p>

<p class="center">
<img class="image" src="imgs/ass-ex4.jpeg" alt="A simple example: the position of the physical bar is reflected on the looking glass.">
</p>

<h2 id="assignment">Assignment</h2>

<p>In this assignment, you are asked to do exactly that. Create a world that contains both virtual and physical elements, taking into consideration the pros and cons of both modalities. Think about reasons why some parts of your world are located in the virtual realm, and other parts in the physical. Things in the virtual parts have find their effects in the physical, and the other way around.</p>

<p class="center">
    <img class="image" src="imgs/ass-ex2.jpeg" alt="A physical plant is communicating with the silicon on the Arduino.">
    <img class="image" src="imgs/ass-ex3.jpeg" alt="Physical interactivity has its reflection on the screen.">
</p>

<p>Create the virtual part of this world using Unity and use serial communication with the Arduino to connect this virtual part with the physical. Connect sensors to your Arduino in order to bring aspects of the physical into the virtual part of this world, use specific events in Unity to drive actuators in the physical. Changes and effects in one part should have repercussions in the other. In this way, reality becomes one complete whole again, when the difference between the virtual and the physical are obliterated.</p>

<p>During the last half of this module you will get time to work on this assignment. It is imperative that you keep track of your process, using images, movies, and text. In the end, you are asked to write a small report discussing your project: its initialisation, its reason of being, the procedures and developments that you made, and your final reflection. This document is an integral part of the project and will be assessed as well as the product.</p>

<h2 id="assessment">Assessment</h2>

<p>There are four aspects on which your project is reviewed</p>
<ul>
<li><u>The <i>Narrative:</i></u> what is the story you tell with regards to your reality? Why exactly did you choose this form of interaction, why are these parts in Unity and those parts in reality? Why did you choose these sensors, these actuators, these models...?</li>
<li><u>The <i>Design:</i></u> is the installation finished? Is the design thought-through, complete and convincing? Is the realisation based on concrete design-decisions? Does the design fit the narrative? </li>
<li><u>The <i>Technical realisation:</i></u> does the installation work? Does the realisation fit the narrative?</li>
<li><u>The <i>Documentation:</i></u> is the documentation complete and thorough? Can we follow the (creative, intellectual, collaborative) steps you have taken throughout the project?</li>
</ul>

<p class="center">
    <img class="image" src="imgs/ass-ex1.jpeg" alt="Coming too close to this demon changes its eyes and the things on the screen.">
</p>

    </div><!-- main -->


    <div id="hamburger">
        <img src="imgs/menu.jpeg" alt="Hamburger-menu">
    </div><!-- hamburger -->

    <?php
      $active = 'assessment';
      include 'menu.php';
    ?>

    <div id="toc" class="sidebar">
        <h1>Assessment</h1>
        <ol>
           <li><a href="#introduction">Introduction</a></li>
           <li><a href="#arduino_and_unity">Arduino and Unity</a></li>
           <li><a href="#assignment">Assignment</a></li>
           <li><a href="#assessment">Assessment</a></li>
        </ol>
    </div><!-- TOC -->

<script src="js/hamburger.js"></script>
<script src="js/images.js"></script>
</body>
</html>