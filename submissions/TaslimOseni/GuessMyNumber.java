import java.util.Random;
import java.util.Scanner;

public class GuessMyNumber {

	static Scanner kb = new Scanner(System.in);
	
	



	public static boolean checkIfNumber(int actualNumber){
		int guess = kb.nextInt();
		
		if(guess == actualNumber){
			System.out.println("Correct!");
			return true;
		}
		else if(guess > actualNumber){
			System.out.println("Too high!");
		}
		else if(guess < actualNumber){
			System.out.println("Too low!");
		}
		
		return false;
		
	}







	public static void main(String[] args) {

		Random rand = new Random();
		int randomNumber = rand.nextInt(10);	//I set the limit to 10 for convenience.. 
		for(;;){
			if(checkIfNumber(randomNumber) == true){
				break;
			}
		}
		
	}


}

