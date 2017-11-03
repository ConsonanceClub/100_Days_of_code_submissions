# Calculator - A simple calculator to do basic operators(addition, subtraction, division, multiplication). 
# Make it a scientific calculator(sin, cos, etc) for added complexity.

import math

def get_input(function_mode):
    if function_mode == 0:
        try:
            print('Enter the first number: ')
            first_number = int(input())
            print('Enter the second number: ')
            second_number = int(input())
            return first_number, second_number
        except:
            print('Invalid input, please try agian.')
            return
    elif function_mode == 1:
        try:
            print('Enter the number you want to evluate:')
            number = int(input())
            return number
        except:
            print('Invalid input, please try again.')
            return
            

print('Simple Calculator.\nEnter the operation you would like to perform.\n\n')
print('1.Addition\n2.Subtraction\n3.Multiplication\n4.Division\n5.Sin(x)\n6.Cos(x)\n')

mode = int(input('Enter your opration: '))

if mode == 1:
    result = get_input(function_mode = 0)
    answer = result[0] + result[1]
    print(result[0], ' + ', result[1], '=', answer)
elif mode == 2:
    result = get_input(function_mode = 0)
    answer = result[0] - result[1]
    print(result[0], ' + ', result[1], '=', answer)
elif mode == 3:
    result = get_input(function_mode = 0)
    ansawer = result[0] * result[1]
    print(result[0], ' + ', result[1], '=', answer)
elif mode == 4:
    try:
        result = get_input(function_mode = 0)
        answer = result[0] / result[1]
        print(result[0], ' / ', result[1], '=', answer)
    except:
        print('An error occured. Please try again.')
elif mode == 5:
    result = get_input(function_mode = 1)
    answer = math.sin(result)
    print('sin(', result, ') = ', round(answer,4))
elif mode == 6:
    result = get_input(function_mode = 1)
    answer = math.cos(result)
    print('sin(', result, ') = ', round(answer, 4))
else:
    print('Invalid selection.')