#include <ESP32Servo.h>

Servo myservo;
int pos = 0;

void setup()

{

  Serial.begin(9600);
  while (!Serial);
  Serial.println("-------");
  myservo.attach(5);
}

    void loop() {

  if (Serial.available() > 0){
    String commend = Serial.readStringUntil('\n');
    Serial.println(commend);
    if (commend == "RIGHT" || commend == "يمين"||commend == "right"){
        pos=0;
      delay(100);
      myservo.write(pos);
    } if (commend == "LEFT" || commend == "يسار" || commend == "left"){
          pos=180;
      delay(100); 
      myservo.write(pos);
    }
  }}
