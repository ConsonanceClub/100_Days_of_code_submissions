import random

number = random.randint(1, 100)
guess = 0

print("I've picked an integer between 1 and 100. Try to guess what it is!")

while guess != number:
    try:
        guess = int(input(">>> "))
    except ValueError:
        print("That's not an integer")
        continue
    
    if guess < number:
        print("Nope, that's too low")
    elif guess > number:
        print("Nope, that's too high")

print(f"Congratulations! You guessed the number! It was {number}")