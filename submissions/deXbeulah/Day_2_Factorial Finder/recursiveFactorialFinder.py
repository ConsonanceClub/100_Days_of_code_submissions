#Python 3.6.2
#This finds the factorial of a number.

def recursive_factorial (num):
    if num<=1:
        return 1
    else:
        return num*recursive_factorial(num-1)

def main():
    n = int(input("Enter a number:"))
    print("Finding the factorial of "+str(n)+"!")
    rec_fac = recursive_factorial(n)
    print("the factorial "+str(n)+"! is:",rec_fac)

main ()
