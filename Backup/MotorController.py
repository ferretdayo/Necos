#!usr/bin/python
# coding: utf-8

import argparse
import Rpi.GPIO as GPIO
import time
import sys

parser = argparse.ArgumentParser(description='this script is motorcontroller')
parser.add_argument("GPIO",type=int)
parser.add_argument("GPIO2",type=int)
parser.add_argument("PMW",type=int)
args = parser.parse_args()

print args.GPIO1
print args.GPIO2
print args.PMW

GPIO.setmode(GPIO.BCM)
GPIO.setup(23, GPIO.OUT)
GPIO.setup(24, GPIO.OUT)
GPIO.setup(18, GPIO.OUT)

GPIO.PWM(args.PWM)
