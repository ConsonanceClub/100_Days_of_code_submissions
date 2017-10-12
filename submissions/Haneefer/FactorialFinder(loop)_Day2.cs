using System;

namespace Factorial_Finder
{
    class Program
    {
        static void Main(string[] args)
        {
         Start();
        }
        static void Factorial(uint input)
        { // actual method that uses looping to calculate the factorial
         uint factorial = 1;
         for (uint i = input; i > 0; i--)
            { factorial = factorial * i; }
              Console.WriteLine("The factorial of {0} is {1}", input, factorial);
        }
        static void Start()
        {  // method that collects user input and deals with validation 
            Console.WriteLine("Please type the number you want the factorial for");
            uint input;
            bool success = uint.TryParse(Console.ReadLine(), out input);
              if (success == true)
            {   Factorial(input);
            }
            else
            {
                Console.WriteLine("Input is not a valid integer, Please try again");
                Start();
            }
        }
    }
}
