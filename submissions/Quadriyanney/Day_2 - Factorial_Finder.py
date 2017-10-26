def check_if_valid_number(number):
	if number > int(number) or number < 0:
		return "Use a *Positive Integer* Only", False
	return True

def factorial_recursion(number):
	'''A function that returns the factorial of a number using recursion'''

	try:
		msg, ret = check_if_valid_number(number)
	except:
		ret = check_if_valid_number(number)

	if ret == True:
		if number == 1:
			return 1
		elif number == 0:
			return 1
		else:
			return number * factorial_recursion(number - 1)
	return msg

print factorial_recursion(3)


def factorial_loop(number):
	'''A function that returns the factorial of a number using a loop'''

	try:
		msg, ret = check_if_valid_number(number)
	except:
		ret = check_if_valid_number(number)
	
	if ret == True:
		if number == 0:
			return 1
		else:
			factorial = 1
			while number > 0:
				factorial *= number
				number -= 1

		return factorial
	return msg

print factorial_loop(10.5)