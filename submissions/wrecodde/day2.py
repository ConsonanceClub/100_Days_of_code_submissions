# Factorial Finder
# find the factorial of a given number


def factorial_forloop(number):
    try:
        int(number)
    except ValueError:
        print("enter a positive integer")
        return

    val = range(number, 0, -1)
    result = 1

    for n in val:
        result *= n

    return result


def factorial_whileloop(number):
    try:
        int(number)
    except ValueError:
        print("enter a positive integer")

    result = 1
    while number > 1:
        result *= number

    return result

# the for loop came through first
