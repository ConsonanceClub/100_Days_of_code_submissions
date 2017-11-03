# alarm_clock.py
# Alarm Clock - A simple clock where it plays a sound after X number of
# minutes/seconds or at a particular time set.

import time, subprocess

countDownTime = input("Enter the count down time in seconds.")
timeLeft = int(countDownTime)
while timeLeft > 0:
    print(timeLeft, '\n')
    time.sleep(1)
    timeLeft = timeLeft - 1

# At the end of the countdown, play a sound file.
subprocess.Popen(['open', 'alarm.wav'], shell = True)
