import java.util.Scanner;

public class factorial {
    public static int fact(int x){
        int result = 1;
        if (x == 0){
            result = 1;
        }else if( x == 1){
            result = 1;
        }else{
            result = x *  fact(x - 1);
        }
        return result;
    }
    public static void main (String[] args){
        Scanner in = new Scanner(System.in);
        System.out.println("Enter a number: ");
        int x = in.nextInt();
        System.out.println("the factorial of this number is: " + fact(x));
    }
}