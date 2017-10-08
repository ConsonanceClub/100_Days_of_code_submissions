using System;


namespace Guesser
{
    class Program
    {
        static void Main(string[] args)
        { 
            Init();

        }

        static void Init()
        {
            Console.WriteLine("Please Enter Your Guess");
            string d = Console.ReadLine();
            CheckInput(d);
           
        }

        static void CheckInput(string input)
        {
            int humanguess;
            bool success = int.TryParse(input, out humanguess);
            if (success == true)
            {

                Play(humanguess);
            }

            else
            {
                Console.WriteLine("Your Guess Was Not Valid");
                Init();

            }
        }

        static void Play(int humanguess)
        {
            Random generator = new Random();
            int computernumber = generator.Next(2, 100);
            Check(humanguess, computernumber);
           

        }
        static void Replay()
        {
            Console.WriteLine("Do You Want To Play Again? Type YES or No");
            string input = Console.ReadLine();
            if (input.ToUpper() == "YES")
            {
                Init();
            }
            else if (input.ToUpper() == "NO" || input == "")
            {
                Console.WriteLine("Thanks for playing! Bye");
            }

        }
        static void Check(int guess, int computer_num)
        {
            
            if (guess > computer_num)
            {
              Console.WriteLine("Too High");
              guess = int.Parse(Console.ReadLine());
              Check(guess, computer_num);

            }

            else if (guess < computer_num)
            {
                Console.WriteLine("Too Low");
                guess = int.Parse(Console.ReadLine());
                Check(guess, computer_num);
            }

            else if( guess == computer_num)
            {
                Console.WriteLine("You got it right");
                Replay();
            }

        }
    }
}
