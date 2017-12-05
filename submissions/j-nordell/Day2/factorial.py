#Day 2 code challenge
#Factorial challenge
#Jennifer Nordell

def main():
  result = 1
  user_input = -1
  
  #get input from the user
  while(user_input < 0): #keep prompting until the user inputs a positive number
    user_input = input("Please input a positive number:  ")
    try:  #if can be converted to a number
      user_input = int(user_input)
    except ValueError: #otherwise reset the user_input to be negative and repeat getting input
      user_input = -1
  
  if(user_input != 0 and user_input != 1): #if the number was not 0 or 1
    result = factorial(user_input)
    
  printResult(result, user_input)

#function to calculate the factorial of a number
def factorial(user_input):
  factorial_result = 1
  while(user_input > 1): #w
    factorial_result *= user_input 
    user_input -= 1 
  return factorial_result  

#simple function to print the final results
def printResult(result_to_print, user_input):
  print("The factorial of {} is {}".format(user_input, result_to_print))

#call the start point of the program  
main()  