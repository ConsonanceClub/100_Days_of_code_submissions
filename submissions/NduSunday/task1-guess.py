#This code works as a guess game
from random import *

#Generate a random no
randNo = randint(1,100)

#get user's input
try:
    userInput = int(input("Enter your guess: "))
except ValueError:
    print("Guess must be a number")

while (userInput != randNo):
    if(userInput > randNo):
        print("Your Guess is too Big ")
        userInput = int(input("Enter your guess: "))

    elif(userInput < randNo):
        print("Your guess is too small ")
        userInput = int(input("Enter your guess: "))

print("Congratulations!!!, Your guess is correct")
