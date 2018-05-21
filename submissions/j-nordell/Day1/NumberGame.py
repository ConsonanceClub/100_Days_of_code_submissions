import random

def main():
    answer = random.randint(1, 100)
    human_guess = -1

    while(human_guess != answer):
        human_guess = int(get_guess())
        #check to make sure the number is in the range
        if(human_guess < 1 or human_guess > 100):
            continue
        elif(human_guess > answer):
            print("The number {} is too high".format(human_guess))
        elif(human_guess < answer):
            print("The number {} is too low".format(human_guess))
        else:
            print("Well done! The number was {}".format(answer))

def get_guess():
    #check to make sure the number can be converted to an integer
    try:
        number = input("Please guess a number between 1 and 100: ")
        number = int(number)
        return number
    except ValueError:
        print("That was not a valid guess.")
        return -100
main()