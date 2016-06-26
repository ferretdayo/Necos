#!/usr/bin/python
# coding: utf-8 

import RPi.GPIO as GPIO
import time
import sys

GPIO.setmode(GPIO.BCM)
GPIO.setup(23, GPIO.OUT)
GPIO.setup(24, GPIO.OUT)

GPIO.output(23, 1)
time.sleep(10)

GPIO.output(23, 0)
GPIO.output(24, 1)
time.sleep(5)
GPIO.output(24, 0)

GPIO.cleanup()
print "stop"
