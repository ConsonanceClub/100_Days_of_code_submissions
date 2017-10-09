import random

rand_number = random.randint(1, 10) * 10
num_generated = random.randint(1, rand_number)
counter = 0


def get_input():
    global counter
    if counter == 0:
        counter += 1
        try:
            user_input = int(input("Please enter your guess: "))
        except ValueError:
            print("That's an invalid input.\n")
            get_input()
        else:
            check_guess(user_input)
    else:
        counter += 1
        try:
            user_input = int(input("Enter another guess: "))
        except ValueError:
            print("That's an invalid input.\n")
            get_input()
        else:
            check_guess(user_input)


def check_guess(user_input):
    global num_generated
    if user_input == num_generated:
        print("Bravo!!! Your guess is correct.")
        print("Got the answer after {} trials.".format(counter))
    elif user_input > num_generated:
        print("That's high man!!! I'll give you another chance.\n")
        get_input()
    else:
        print("Too low! Something else?\n")
        get_input()


print("Guess My Number game.\nThe number is between 1 and {}\n".format(rand_number))
get_input()
