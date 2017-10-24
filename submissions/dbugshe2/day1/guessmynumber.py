''' 
Day 1 - Guess My Number
The computer randomly generatesa number. The user inputs a number,
and the computer will tell you if you are to high, or too low. Then you will get to keep
guessing until you guess the number
'''
import random

def guessmynumber():
    '''
    '''
    sent = ''
    ans = random.randint(0, 100)
    while sent != 'q': #main loop
        guess = input("Guess a number between 0 and 100 or enter 'q' to quit \n >> ")
        if guess == 'q':
            return
        else:
            guess = int(guess)
            if ans == guess:
                print("you got it")
                return
            elif ans > guess:
                print("======== too low =========")
            elif ans < guess:
                print("======== too high ========")
guessmynumber()
