const int led1 = 12;  // Pin for first LED
const int led2 = 13; // Pin for second LED
bool running = false; // Flag to check if blinking should happen

void setup() {
  pinMode(led1, OUTPUT);
  pinMode(led2, OUTPUT);
  Serial.begin(9600); // Start serial communication
}

void loop() {
  if (Serial.available() > 0) {
    // String command = Serial.readStringUntil('\n');
    // command.trim();
        char command = (char)Serial.read();

    if (command == "A") {
      running = true;
    } else if (command == "B") {
      running = false;
      digitalWrite(led1, LOW);
      digitalWrite(led2, LOW);
    }
  }

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
}
