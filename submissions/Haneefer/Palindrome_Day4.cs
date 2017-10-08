using System;
using System.Linq;


namespace palindromechecker
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine(Please type in a word to check if its a palindrome);
            if (PalindromeChecker(Console.ReadLine()) == true)
            {
                Console.WriteLine(Yes!! This is a palindrome);
            }
            else
            {
                Console.WriteLine(No, This is not a palindome!);
            }
        }

        static  bool  PalindromeChecker(string input)
        {
           //check word length- this is the outclause as any world with less than 2 characters is a palindrome
            if (input.Length  2)
            {
                return true;

            }

          
            char first_character = input.First();
            char last_character = input.Last();

            if (first_character != last_character)
            {
                // once a char is not equal to its mirror its not a palindrome
                return false;
            }


            else
            {
               // call function till the outclause is triggered
             return   PalindromeChecker(input.Substring(1, input.Length - 2));
            }

        }
    }
}