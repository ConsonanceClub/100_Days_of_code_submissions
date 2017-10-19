import random

random_number = random.randint(0, 30) #Generates a random number between 0 and 30

while True:
	
	try:
		guess = int(raw_input("Enter a guess(integer) between 0 and 30 : "))
	except:
		print "Please enter a valid integer\n"
		continue

	if random_number == guess:
		print "You guessed right"
		break
	elif random_number < guess:
		print "That's high, try a lesser number\n"
	else:
		print "That's low, try a bigger number\n"