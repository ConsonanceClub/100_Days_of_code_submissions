using System;


namespace FactorialFinderRecursion
{
    class Program
    {
        static void Main(string[] args)
        {
            Start();
        }

        static uint FactorialRecursion(uint input)
        {// this is the recursive factorial function 

            if (input == 0)
            {
                return 1;

            }
            else
            {
                return input * FactorialRecursion(input - 1);
            }
        }
        static void Start()
        {  // method that collects user input and deals with validation 
            Console.WriteLine("Please type the number you want the factorial for");
            uint input;
            bool success = uint.TryParse(Console.ReadLine(), out input);
            if (success == true)
            {
                Console.WriteLine("The factorial of {0} is {1}", input, FactorialRecursion(input));
            }
            else
            {
                Console.WriteLine("Input is not a valid integer, Please try again");
                Start();
            }
        }
    }
}

