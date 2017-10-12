def get_input():
    try:
        user_input = int(input("Please enter a value: "))
    except ValueError:
        print("Invalid input.\n")
        get_input()
    else:
        check_input(user_input)


def check_input(user_input):
    if user_input > 1:
        factorial = task2(user_input)
        factorial_recursive = recursive_task2(user_input)
    elif user_input == 1 or user_input == 0:
        factorial = 1
        factorial_recursive = 1
    else:
        print("Invalid input.\n")
        get_input()
    output(user_input, factorial, factorial_recursive)


def output(text, fact_loop, fact_recursion):
    answer = "The factorial of {} is {} using loops, and {} using recursion!".format(text, fact_loop, fact_recursion)
    print(answer)


def task2(number):
    prod = 1
    while number >= 1:
        prod *= number
        number -= 1
    return prod


def recursive_task2(number):
    if number == 1:
        return 1
    else:
        return number * recursive_task2(number-1)


print("Factorial finder using loops and recursion.\n")
get_input()
