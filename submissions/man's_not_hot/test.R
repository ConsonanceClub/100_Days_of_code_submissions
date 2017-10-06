#R script that compares user input x and a random number comp 
#prompt to capture user input using the readline() function

repeat{ 
  x <- readline(prompt="Enter x: ")
x<-as.integer(x) #take in x only as an interger,gives error message for other data types and blanks
comp<-runif(1, 0, 10^2)#runif() function to compute ramdom numbers
y<-round(comp,digits=0);#round() function  to round off the random numbers
print(y) #print the number just to check

if (y < x) {
  print("high")
} else 
{
  if (y > x) {
    print("low")
  }
}
if (y==x)
{
  print("u got it")
  
 {break
 }

}

}


