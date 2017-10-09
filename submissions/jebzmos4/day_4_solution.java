import java.util.Scanner;

public class Palindrome {
    public static String palindrome(String input){
        StringBuilder inputBuilder = new StringBuilder();
        inputBuilder.append(input);
        inputBuilder = inputBuilder.reverse();
        return inputBuilder.toString();
    }

    public static void main(String []args){
        Scanner in = new Scanner(System.in);
        String input = in.next();
        String reverse = palindrome(input);
        if (input.equalsIgnoreCase(reverse)){
            System.out.println("This string is a palindrome");
        }else{
            System.out.println("This string is not a palindrome");
        }
    }
}