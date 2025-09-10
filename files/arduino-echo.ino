String inputString = ""; 

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
} 