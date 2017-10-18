#Guess My Number Game
#
#The computer randomly generates a number.
#The user inputs a number, and the computer will tell you if you are too high, or too low.
#Then you will get to keep guessing until you guess the number.
#

import random

guessesTaken = 0 #variable keeps track of the number of guesses that have been made

print ("Hello, What's your name?")
myName = raw_input()

number = random.randint(1,20)
print("Well, "+ myName + ", I am thinking of a number between 1 and 20.")

while guessesTaken < 6:
    print ("Take a guess.")
    guess = input()
    guess = int(guess)

    guessesTaken = guessesTaken + 1

    if guess < number:
        print ("Your guess is too low")
    if guess > number:
        print ("Your guess is too high")
    if guess == number:
        break

if guess == number:
    guessesTaken = str(guessesTaken)
    print ("Good Job, " + myName + "! You guessed the number in " + guessesTaken + " guesses!")

if guess != number:
    number = str(number)
    print ("Nope. The number I was thinking of was" + number)
