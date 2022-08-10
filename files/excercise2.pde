int[] MOUSEPOS = new int[2];

void setup() {
  size(800,400);
  background(255);
  fill(255,0,0);
  rect(80,50,100,100);  
  fill(0,255,0);
  rect(260,50,100,100);  
  fill(0,0,255);
  rect(440,50,100,100);  
  fill(0,255,255);
  rect(620,50,100,100);
}

void draw() {
  //
}

void mouseClicked() {
  MOUSEPOS[0] = mouseX;
  MOUSEPOS[1] = mouseY;
  println ("mouse position: (" + mouseX + "," + mouseY + ")");
}
