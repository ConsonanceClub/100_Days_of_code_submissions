# alarm_clock.py
# Alarm Clock - A simple clock where it plays a sound after X number of
# minutes/seconds or at a particular time set.

import time, subprocess

timeLeft = 60
while timeLeft > 0:
    print(timeLeft, end = '')
    time.sleep(1)
    timeLeft = timeLeft - 1

# At the end of the countdown, play a sound file.
subprocess.Popen(['open', 'alarm.wav'], shell = True)
