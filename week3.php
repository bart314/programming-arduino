<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coding and Electronics - week 3</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="hilightjs/vs.min.css">
</head>
<body>
    <header>
        <h1>Lab Course week 3:</h1>
        <h1>More Arduino</h1>
    </header>

    <div id="main">
    <section id="preperation">
        <h1>Preparation</h1>
        <ol>
            <li>Look at the first eleven minutes of <a href="https://www.youtube.com/watch?v=FDmHVRC6pQk">this video</a>, explaining how servo motors work (you can skip over the parts on gears, if you want). The last four minutes of this video are about controlling the servo motor with an arduino, which we are not going to do this week.</li>
            <li>Study the following introductionary texts on the (workings of the) Arduino:
                <ul>
                    <li><a href="https://docs.arduino.cc/learn/starting-guide/getting-started-arduino#electronic-signals">Electronic signals</a></li>
                    <li><a href="https://docs.arduino.cc/learn/starting-guide/getting-started-arduino#analog-signal">Analog signals</a></li>
                    <li><a href="https://docs.arduino.cc/learn/starting-guide/getting-started-arduino#digital-signal">Digital signals</a></li>
                    <li><a href="https://docs.arduino.cc/learn/starting-guide/getting-started-arduino#sensors--actuators">Sensors and actuators</a></li>
                </ul>
            </li>


        </ol>
    </section><!-- preperation -->

  <section id="exercise1">
    <h2>Exercise 1: servo motor</h2>

    <p>Working with LEDs is fun and all, but sometimes we want some more action than just walking lights. In such a case we use <em>actors</em> instead of <em>sensors</em>. In this exercise, we are going to use a potentiometer to control the angle of rotation of a servo-meter. As always, this is just to introduce you to the general workings in the hope that you can use these techniques in one way or another in your own project.</p>

    <p>Servos are clever devices. Using just one input pin, they receive the position from the Arduino and they go there. Internally, they have a motor driver and a feedback circuit that makes sure that the servo arm reaches the desired position. But what kind of signal do they receive on the input pin?</p>

  <p>It is a square wave. Each cycle in the signal lasts for 20 milliseconds and for most of the time, the value is LOW. At the beginning of each cycle, the signal is HIGH for a time between 1 and 2 milliseconds. At 1 millisecond it represents 0 degrees and at 2 milliseconds it represents 180 degrees. In between, it represents the value from 0–180. This is a very good and reliable method. The graphic below makes it a little easier to understand.</p>

<p class="center">
  <img src="imgs/pulses-servo.png" alt="Pulses related to the angle of the servo-motor">
</p>

<p>Luckely, we don't have to create all this machinery by ourselves: Arduino has a build-in library <tt>Servo</tt>, that we can use to our benefit. Have a look at the code below (which you can download <a href="files/servo-exercise.ino">here</a>). Here, we are using this library to rotate the servo to the left and to the right every second.</p>


<pre class="code"><code class="language-arduino">// Include the Servo library 
  #include &lt;Servo.h&gt;
  // Declare the Servo pin 
  int servoPin = 3; 
  // Create a servo object 
  Servo Servo1; 
  void setup() { 
     // We need to attach the servo to the used pin number 
     Servo1.attach(servoPin); 
  }

  void loop(){ 
     // Make servo go to 0 degrees 
     Servo1.write(0); 
     delay(1000); 
     // Make servo go to 90 degrees 
     Servo1.write(90); 
     delay(1000); 
     // Make servo go to 180 degrees 
     Servo1.write(180); 
     delay(1000); 
  }
  </code></pre>

  <p>Realise the following setup on your breadboard (of course, we don't actually need a breadboard in this case) and upload the code to your Arduino. Make sure you understand what is going on and why the system is doing what it is doing.</p>

  <p class="center">
    <img src="imgs/servo-breadboard.jpeg" alt="The servo motor connected to the breadboard">
  </p>

  <p class="center">
    <img src="imgs/servo-fritzing.png" alt="A model of the setup">
  </p>

  <p>In the next few exercises we are going to expand on this simple setup.</p>

  </section><!-- exercise 1-->

  <section id="exercise2">
    <h2>Exercise 2: Serial communication</h2>

    <p><b>Introduction</b></p>

    <p>Serial communication is a method of sending data from one computer to another one one bit at a time over a communication channel or wire, such as a USB (Universal <em>Serial Bus</em>) cable. It is called "serial" because data bits are transmitted one after the other, in a series. As in all communication, we need at least two parties. In this case, we talk about a <em>sender</em> and a <em>receiver</em>. Both the sender and receiver need to agree on how fast to send and receive bits, known as the <em>baud rate</em> (bit rate).</p>

    <p>Last week, we already introduced the Arduino Serial Monitor to display the value of the potentiometer (or the sensor); however, we can also use the Serial Monitor to send data <em>to</em> the Arduino. In this first example, we will use that Arduino just to echo whatever is send to it. Because the Arduino is not doing anything else, we don't need to hook up a breadboard. Just copy-past the code below into your IDE, upload it to the Arduino and type something in the Serial Monitor. Be sure you understand what is going on in the code; have a look at <a href="https://www.arduino.cc/reference/en/language/functions/communication/serial/read/"></a>the documentation for <tt>Serial.read()</tt></a> as well.</p>

<pre class="code"><code class="language-arduino">String inputString = ""; 

void setup() {
  Serial.begin(9600);
  Serial.println("Please type something and hit ENTER");
}

void loop() {
  while (Serial.available()) {
    char inChar = (char)Serial.read();

    if (inChar == '\n' || inChar == '\r') { 
      Serial.print("Arduino received: ");
      Serial.println(inputString);
      inputString = "";
    } else {
      inputString += inChar;
    }
  }
} </code></pre>

<p class="aside">Please note that in order for this to work, you need to setup your Serial Monitor in such a way that it sends either newlines (<tt>'\n'</tt>) or carriage returns (<tt>'\r'</tt>) or both at the end of a transmission. Also, the baud rate of the Serial Monitor must be the same as the one you put on the Arduino (in line 4 of the code above). Have a look at the image below to see where and how.</p>

<p class="center">
  <img class="image" src="imgs/setup-serial-monitor.png" alt="">
</p>

<p><b>Part 1</b></p>

<p>Now, create a breadboard with a few LEDs of different colors connected to different ports – make use of exercise 4 on ports and LEDs of <a href="wee2.html#exercise4">the previous week</a>. Now alter the code above to that you you can type the color of the LED you wish to put on. If you don't remember, have a look at <a href="https://www.arduino.cc/reference/en/language/structure/control-structure/if/">the documentation for conditionals on the Arduino-API</a>, the most important part of which is copied below.</p>

<pre class="code"><code class="language-arduino">if (condition) {
  //statement(s)
}</code></pre>

<p>In this case, the <tt>condition</tt> should check which color is being received by the Arduino and the <tt>statements</tt> should put all but the chosen LED off.</p>

<p><b>Part 2</b></p>

<p>Modify the code so that it is possible to switch more than one LED on, by separating the colors with a comma (','); e.g. when you want to put a red and a green LED on, you type 'red, green' in the Serial Monitor. You can make use of the method <tt>getValue(sting, seperator, index)</tt> that is provided below (just past that code into your Arduino IDE, below the <tt>loop</tt>-method):</p>


<pre class="code"><code class="language-arduino">
String getValue(String data, char separator, int index) {
  int found = 0;
  int strIndex[] = {0, -1};
  int maxIndex = data.length()-1;

  for(int i=0; i<=maxIndex && found<=index; i++){
    if(data.charAt(i)==separator || i==maxIndex){
        found++;
        strIndex[0] = strIndex[1]+1;
        strIndex[1] = (i == maxIndex) ? i+1 : i;
    }
  }

  return found>index ? data.substring(strIndex[0], strIndex[1]) : "";
}

//source: https://stackoverflow.com/a/29673158/10974490

/* example usage:
  String demo = "red,green,blue"; // note the absence of spaces
  getValue(demo, ',', 0) // will return read
  getValue(demo, ',', 2) // will return blue
*/
</code></pre>

<p class="aside">As you can see, we agree not to allow spaces after the comma. If you want, you can change the method <tt>getValue</tt> to remote the trailing spaces, or use <a href="https://www.arduino.cc/reference/en/language/variables/data-types/string/functions/indexof/">the method <tt>indexOf</tt></a> to check for a string without the commas. This is left as an exercise for the reader 😎.</p>













  </section><!-- exercise2 -->

  <section id="exercise3">
    <h2>Exercise 3: Sensors and actuators</h2>

  </section><!-- exercise3 -->


    <section id="assignment">
      <h2>Assignment</h2>
    </section><!-- assignment-->

    </div><!-- main -->


    <div id="hamburger">
        <img src="imgs/menu.jpeg" alt="Hamburger-menu">
    </div><!-- hamburger -->

    <?php
      $active = 'week3';
      include 'menu.php';
    ?>

    <div id="toc" class="sidebar">
        <h1>This week</h1>
        <ol>
           <li><a href="#preperation">preperation</a></li>
           <li><a href="#exercise1">servo motor</a></li>
           <li><a href="#exercise2">serial communication</a></li>
           <li><a href="#exercise3">sensors and actuators</a></li>
           <li><a href="#assignment">assignment</a></li>
        </ol>
    </div><!-- TOC -->



<script src="js/hamburger.js"></script>
<script src="js/images.js"></script>
<script src="hilightjs/highlight.min.js"></script>
    
</body>
<script>hljs.highlightAll();</script>
</html>
