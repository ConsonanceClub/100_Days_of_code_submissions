import math

class Calculator:

	def add(self, number, *args):
		total = 0
		for i in args:
			total += i
		return total
	
	def sub(self, _from, number):
		return _from - number

	def mul(self, number, *args):
		total = 1
		for i in args:
			total *= i
		return total

	def div(self, number, by):
		return float(number)/by

	def sin(self, number):
		return math.sin(math.radians(number))

	def cos(self, number):
		return math.cos(math.radians(number))

	def tan(self, number):
		return math.tan(math.radians(number))

c = Calculator()

print c.tan(45)