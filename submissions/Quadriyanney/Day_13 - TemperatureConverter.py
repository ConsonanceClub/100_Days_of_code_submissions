class TemperatureConvert:

	def __init__(self, temperature):
		self.temperature = float(temperature)

	def KelvinToFahrenheit(self):
		self.temperature = self.KelvinToCelsius()
		return self.CelsiusToFahrenheit()

	def FahrenheitToKelvin(self):
		self.temperature = self.FahrenheitToCelsius()
		return self.CelsiusToKelvin()

	def CelsiusToKelvin(self):
		return self.temperature + 273

	def KelvinToCelsius(self):
		return self.temperature - 273

	def CelsiusToFahrenheit(self):
		return (self.temperature * (float(9)/5)) + 32

	def FahrenheitToCelsius(self):
		return (self.temperature - 32) * (float(5)/9)


print TemperatureConvert(212).FahrenheitToKelvin()