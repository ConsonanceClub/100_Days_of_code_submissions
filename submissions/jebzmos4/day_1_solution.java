import java.util.Random;
import java.util.Scanner;

public class Guess {

    public static void main (String[] args){
        Scanner in = new Scanner(System.in);
        int guess = 0;
        Random random = new Random();
        int answer = random.nextInt( 50 );
        while( guess != answer){
            System.out.println("Guess a number between 1 and 50");
            guess = in.nextInt();

            if (guess > answer){
                System.out.println(" your guess is too high");
            }else if( guess < answer){
                System.out.println("your guess is too low");
            }else if(guess == answer){
                System.out.println("you guessed right");
            }else {
                System.out.println("invalid input");
            }
        }
    }
}