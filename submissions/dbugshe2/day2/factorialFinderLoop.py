'''
Day 2 
You are to write a program that finds the factorial of a numbergti .
'''
def factorial_loop(number):
    '''
    this uses a for loop to find the factorial of a number
    '''
    result = 1
    for i in range(1, number+1):
        result *= i
    return result
anynumber = int(input("Enter any nymber to find it's factorial >> ")) 
print(factorial_loop(anynumber))