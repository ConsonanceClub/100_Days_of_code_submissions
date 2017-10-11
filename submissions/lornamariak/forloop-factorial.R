# take input from the user
n <- as.integer(readline(prompt="Enter a number: "))
factorial = 1 #set factorial variable to 1

# check is the number is negative, positive or zero
if(n < 0) {
  print("factorial does not exist for negative numbers")
} else if(n == 0) {
  print("The factorial of 0 is 1")
} else {
  for(i in 1:n) #for loop to expand n up to 1
    {
    factorial = factorial * i 
  }
  print(paste("The factorial of", n ,"is",factorial))
}


  