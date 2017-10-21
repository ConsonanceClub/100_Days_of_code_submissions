class GPA_Calculator:

	@classmethod
	def getPointFromScore(self, score):
		
		self.score = score

		if self.score > 69:
			__point = 5
		elif self.score > 59:
			__point = 4
		elif self.score > 49:
			__point = 3
		elif self.score > 44:
			__point = 2
		elif self.score > 39:
			__point = 1
		else:
			__point = 0
		
		return __point

	@classmethod
	def calculate_GPA(self):
		
		counter = total_points = total_units = 0
		try:
			number_of_courses = int(raw_input("Number of courses : "))
			print ""
		except:
			print "Enter a valid integer as number of courses (e.g. 4)\n"
			self.calculate_GPA() 	
		
		while number_of_courses > counter:

			try:
				score, unit = input("Enter score, unit for course {}. (e.g. 78, 3) : ".format(counter + 1))
			except:
				print "Please enter the score and unit in the format -> score, unit\n"
				self.calculate_GPA()
			
			total_points += self.getPointFromScore(score) * unit
			total_units += unit

			counter += 1

		print '\n{0:.2f}'.format(float(total_points) / total_units)

GPA_Calculator.calculate_GPA()