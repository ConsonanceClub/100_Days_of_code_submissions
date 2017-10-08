def get_input():
	user_input = input("Please enter a value")
	check_input()

def check_input(user_input):
	if user_input>1 && type(user_input)==int:
		factorial = task2(user_input)
		factorialRecursive = recursiveTask2(user_input)
	elif user_input==1 || user_input==0:
		factorial = 1
		factorialRecursive = 1
	else:
		print("Invalid input.")
		get_input()
	print("The factorial of {} is {} using loops, and {} using recursives!").format(user_input, factorial, factorialRecursive)

def task2(number):
	while number>=1:
		prod *= number
		number -= 1
	return prod

def recursiveTask2(number):
	if number=1:
		return 1
	else:
		return number * recursiveTask2(number-1)

get_input()