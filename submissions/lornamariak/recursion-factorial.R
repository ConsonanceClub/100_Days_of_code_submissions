x<-as.integer(readline(prompt = "Enter Number: "))

recursive.factorial <- function(x) {
  if (x == 0)   
    return (1)
  else           
    return (x * recursive.factorial(x-1))
}
print(recursive.factorial(x))

