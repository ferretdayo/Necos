#include<stdio.h>
#include<stdlib.h>
#include<unistd.h>
#include<wiringPi.h>

#define MOTERPWM  18
int MOTEROUT[] = {23,24};

void init(void);

int main(int argc, char *argv[]) {
	if (argc < 4) {
		printf("Usage: %s MoterNum ON(1)/OFF(0) PWM_POWER\n", argv[0]);
		return -1;
	}
	
	int Mout_num = atoi(argv[1]);
	int on_off = atoi(argv[2]);
	int pwm_pow = atoi(argv[3]); //range: 0~1023

	if(Mout_num > 2) {
		printf("Error:LED_Number must be specified from 0 to 4. \n");
		return -1;
	}

	if(!(on_off == 0 || on_off == 1)) {
		printf("Error:ON/OFF must be specified to 0 or 1. \n");
		return -1;
	}

	if (wiringPiSetupGpio() == -1) {
		printf("setup error");
		return 1;
	}
	
	init();
	digitalWrite(MOTEROUT[Mout_num], on_off);	
	pwmWrite(MOTERPWM, pwm_pow);	

	return 0;
}

void init(void) {
	pinMode(MOTEROUT[0], OUTPUT);
	pinMode(MOTEROUT[1], OUTPUT);
	pinMode(MOTERPWM, OUTPUT);
	pinMode(MOTERPWM, PWM_OUTPUT);
	digitalWrite(MOTEROUT[0], 0);	
	digitalWrite(MOTEROUT[1], 0);	
	digitalWrite(MOTERPWM, 0);	
}
