#include<stdio.h>
#include<stdlib.h>

#include<wiringPi.h>

int CENCER_PIN = 15;

int main(){
  if(wiringPiSetup() == -1){
    printf("Error\n");
    return -1;
  }

  pinMode(CENCER_PIN, INPUT);
  int sensorPinState;
  char *command = "php takePicture2.php";
  while(1){
    sensorPinState = digitalRead(CENCER_PIN);
    if(sensorPinState == 0){
      system(command);
    }
  }
}
