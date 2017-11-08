# alarm_clock.py
# Alarm Clock - A simple clock where it plays a sound after X number of
# minutes/seconds or at a particular time set.

import time
import subprocess

time_left = int(input("Enter the count down time in seconds."))
while time_left > 0:
    print(time_left, '\n')
    time.sleep(1)
    time_left = time_left - 1

# At the end of the countdown, play a sound file.
subprocess.Popen(['open', 'alarm.wav'], shell = True)
