/**
 * Day 1: Guess My Number!!!
 * The computer randomly generates a number. The user inputs a number, and the computer will tell 
 * you if you are too high, or too low. Then you will get to keep guessing until you guess the number.
 * 
 * @author GeorgeOkez
 */

import java.util.Random;
import java.util.Scanner;

public class Day_1_Solution {
    public static void main(String args[]){
        
        Scanner input = new Scanner(System.in);
        Random randNub = new Random();
        int randN = 1 + randNub.nextInt(100); // generates a random number, eg 47
        
        System.out.print("Guess a number between 1 and 100: ");
        int numb = input.nextInt();     // inputs a guessed number, eg 78
        
        if( numb == randN){ // Checks the very first guess
           System.out.println("Congratulation, you guessed right!");
        }else{
          while(true){
            if(numb > randN){
                System.out.println("Guess again! your guess is too high");
                numb = input.nextInt();
             }else{
                System.out.println("Guess again! your guess is too low");
                numb = input.nextInt();
             }
            if(numb == randN){
               break;
            }
          }// end of while(true)
           System.out.println("Congratulation, you guessed right!");
        } //end of else
            
    }// end of public static void main(String args[])
}
