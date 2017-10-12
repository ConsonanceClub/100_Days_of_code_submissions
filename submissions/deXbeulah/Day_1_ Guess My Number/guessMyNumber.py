#python 3.6.2

import random

to_be_guess = random.randint (1, 30)
guess = 0
count = 0
guesses = []
print ("Hi, What is your name.")
name = input().capitalize()
print (name+", "+"I will be guessing between 1 and 30.")

while to_be_guess > 0:
    print ("Enter a guess")
    guess = int(input())
    count += 1


    if guess < 0 or guess > 30:
        print ("Note: the guess is between 1 and 30.")
    elif guess < to_be_guess:
        print ("Your guess is too small.")
    elif guess > to_be_guess:
        print ("Your guess is too large.")
    
    elif type(guess) != 'int':
        print ("Please, reenter your guess.")

    guesses.append(guess)
    print (guesses)
    if guess == to_be_guess:
        print ("Wow!\n"+name+", you just guessed right.")
