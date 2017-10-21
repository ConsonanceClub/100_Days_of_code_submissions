#Day 2: Factorial Finder
#
#The Factorial of a positive integer, n, is defined as the product of the sequence
#n, n-1, n-2, ...1 and the factorial of zero, 0, is defined as being 1.
#This program finds the factorial of a number using both loops and recursion

inputNumber = raw_input("Enter a number:\n")
inputNumber = int(inputNumber)

factorial = 1

#check if the number is negative, positive or zero

if inputNumber < 0:
    print("Sorry, factorials do not exist for negative numbers.")

elif inputNumber == 0:
    print("Factorial = 1")

else:
    for i in range(1, inputNumber + 1):
        factorial = factorial * i
    print "Factorial of", inputNumber,"=", factorial
