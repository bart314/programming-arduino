String currentItem = "";
String[] todoItems = {"","","","","","","","","",""};
String[] doneItems = {"","","","","","","","","",""};
int todoidx = 9;
int doneidx = 9;

void setup() {
  size(800,600);
}

void draw() {
  createInterface();
  // YOUR CODE HERE
}

void keyTyped() {
  // YOUR CODE HERE
}

void mouseClicked() {
  // YOUR CODE HERE
}

void createInterface() {
  background(0);
  textFont(createFont("SourceCodePro-Regular.ttf", 36));
  
  fill(0,255,255);
  rect(620,50,150,80);
  textSize(18);
  fill(0);
  text("Do the \nnext thing", 640, 75);
  stroke(255);
  line(300, 20, 300, 400);
  
  fill(255);
  text("To Do", 100, 30);
  text("Done", 400, 30);
  text("New Item:", 20, 450);
}
