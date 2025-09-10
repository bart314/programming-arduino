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
  getValue(demo, ',', 0) // will return red
  getValue(demo, ',', 2) // will return blue
*/