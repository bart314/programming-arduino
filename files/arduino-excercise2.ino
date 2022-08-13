
int BUTTON_PINS[4] = {7,6,5,4};
int LED_VALUES[4] = {0,0,0,0};
int LED_PINS[4] = {12,11,10,9};

void setup() {
  for (int i=0; i<4; i++) {
    pinMode(BUTTON_PINS[i], INPUT_PULLUP);
    pinMode(LED_PINS[i], OUTPUT);
  }
}


void loop() {
  for (int i=0; i<4; i++) {
    if (digitalRead(BUTTON_PINS[i])==0) LED_VALUES[i]=1;
  }
  setLedValues();
  delay(100);
}


void setLedValues() {
  for (int i=0; i<4; i++) {
    if (LED_VALUES[i]==1) digitalWrite(LED_PINS[i], HIGH);
  }
}
