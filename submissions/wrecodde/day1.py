# Guess My Number
# play a guessing game with the user


import random


number = random.choice(range(1, 100))
print("let's play a game. guess the number on ma mind")

while True:
    try:
        guess = int(input("your guess: "))
    except ValueError:
        print("enter a number")
        continue
    if guess < number:
        print("too low")
        continue
    elif guess > number:
        print("too high")
        continue
    elif guess == number:
        print("you had that one")
        print(f"my guess was {number}")
        break
