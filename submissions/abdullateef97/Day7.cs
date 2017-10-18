using System;

namespace test
{
	public class Day7
	{
		static void Main(){
			Console.WriteLine("please enter a string : ");
			var word = Console.ReadLine ();

			var wordChar = word.ToLower().ToCharArray ();
			Array.Sort (wordChar);
			var sep = "";
			Console.WriteLine ("please note your word would be converted to lower case before been sorted");
			Console.WriteLine("your sorted string is {0}",string.Join(sep,wordChar));
		}
	}
}

