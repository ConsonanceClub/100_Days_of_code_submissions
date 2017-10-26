'''
Day 2 - Factorail Finder
You are to write a program that finds the factorial of a number.
'''
def factorial_recurse(number):
    '''
    this uses recurssion to find the factorial of a number
    '''
    if number > 1:
        number = number * factorial_recurse(number - 1)
    return number
        
anynumber = int(input("Input a number to get its factorial >> "))
print(factorial_recurse(anynumber))
