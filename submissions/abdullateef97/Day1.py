'''
Day 1 Guess My Number!!! 

The computer randomly generates a number. The user inputs a number, 
and the computer will tell you if you are too high, or too low. 
Then you will get to keep guessing until you guess the number.
'''



import random;
random_no = random.randint(1,50);
guess_count = 0



guess = (int)(input("enter a number between 1 and 50: "))
guess_count += 1


while(guess != random_no):
    if(guess <  random_no):
        print("Your Guess is less than the number")
    elif( guess > random_no):
        print("Your Guess is greater than the number");
    
    guess = (int)(input("Try Again : "))
    guess_count += 1
else :
    print("Good Job! You succesfully guessed the number after {} attempt(s)".format(guess_count))

