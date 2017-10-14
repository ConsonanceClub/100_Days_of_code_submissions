


def factorial(n):
    fact = 1
    while(n > 1):
        fact = fact * n
        n = n - 1
        factorial(n)
    return fact

try:
    noToCheck = int(input("Enter number to find factorial: "))
    if (noToCheck < 0):
        print("Error: Number must be a positive integer")
        finalFact = "Empty "
    elif (noToCheck == 0):
        noToCheck = 1
    finalFact = factorial(noToCheck)
    print("Hi, your factorial is : ", finalFact)

except(ValueError):
    print("You can only find for a no")


