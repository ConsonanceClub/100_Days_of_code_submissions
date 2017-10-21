
#NB: espeak has to be intalled before this script can work

import os
from datetime import timedelta
import time

class AlarmClock:

	def alertAt(self, _time):
		'''Enter time in the format "Hour:Minute" or "Hour.Minute" e.g. "07:30" or "07.30" using 24-hour format'''

		now = time.strftime("%H:%M:%S")
		_time_in_seconds = timedelta(hours = int(_time[:2]), minutes =  int(_time[3:])).total_seconds()
		now_in_seconds = timedelta(hours = int(now[:2]), minutes = int(now[3:5]), seconds = int(now[6:]) ).total_seconds()

		if now_in_seconds > _time_in_seconds:
			print "You can't choose a time in the past"
		else:
			self.alertAfter(_time_in_seconds - now_in_seconds)

	def alertAfter(self, _time):
		'''Enter _time in seconds'''
		
		time.sleep(_time)
		self.alert()

	def alert(self):
		repeat = 5

		while repeat > 0:
			os.system("espeak 'Hey, Its time' ")
			repeat -= 1
			time.sleep(2)

alarm = AlarmClock()

alarm.alertAfter(2)