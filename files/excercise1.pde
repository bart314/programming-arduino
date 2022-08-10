int CIRCLE_SIZE = 30;

void setup() {
  size(600,600);
  background(82,157,82);
}

void draw() {
  background(82,157,82);
  if (CIRCLE_SIZE > 600) {
    CIRCLE_SIZE = 30;
  }
  
  strokeWeight(8);
  stroke(70,200,70);
  ellipse(300,300,CIRCLE_SIZE, CIRCLE_SIZE);
  CIRCLE_SIZE = CIRCLE_SIZE + 10;
}
