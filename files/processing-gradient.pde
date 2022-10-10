void setup() {
  size(600, 300);

  for (int i = 0; i <= width; i++) {
    float inter = map(i, 0, width, 0, 1);
    color c = lerpColor(color(0), color(255), inter);
    stroke(c);
    line(i, 0, i, height);
  }
}

void draw() {
  println (mouseX);
}