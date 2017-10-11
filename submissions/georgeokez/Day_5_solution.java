
/**
 *Day 5: Count Vowels
 *Enter a string and the program counts the number of vowels in the text. 
 *For added complexity have it report a sum of each vowel found in a long text.
 * 
 * @author GeorgeOkez
 */

import java.util.Scanner;

public class Day_5_solution {
    
    public static void main(String [] args){
        Scanner input = new Scanner(System.in);
        System.out.println( "Enter a sentence and press Enter" );
        String str = input.nextLine();
        System.out.println("Total number of vowels in "+"("+ str +") = "+ countVowel(str));
        System.out.println("");
        
        String[] tokens = str.split(" ");
        
        for(String token: tokens){
          System.out.println("Total number of vowels in "+"("+ token +")"+ " = " + countIndVowel(token));
        }
             
    } // end of main
    
    public static int countVowel(String str){
        int vowelCounter = 0;
         for(int i=0;i <str.length();i++){
            if((str.charAt(i) == 'a') || (str.charAt(i) == 'e')  || (str.charAt(i) == 'i') || (str.charAt(i) == 'o') ||(str.charAt(i) == 'u')) {
                vowelCounter++;
            }
        }
         return vowelCounter;
    }
    
    public static int countIndVowel(String str){
       int aCount = 0, eCount = 0, iCount = 0, oCount = 0, uCount = 0;
       for(int i=0;i <str.length();i++){ 
            switch (str.charAt(i)){
                case 'a':
                    aCount++;
                    break;
                case 'e':
                    eCount++;
                    break;
                case 'i':
                    iCount++;
                    break;
                case 'o':
                    oCount++;
                    break;
                case 'u':
                    uCount++;
                    break;
            }
        }
       int total = aCount + eCount + iCount + oCount + uCount;
       
       return total;
    }
    
}
