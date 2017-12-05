/**
 *
 * Day 2: Factorial Finder
 * The Factorial of a positive integer, n, is defined as the product of the sequence n, n-1, n-2, ...1 
 * and the factorial of zero, 0, is defined as being 1. You are to write a program that finds the factorial
 * of a number. 
 * Solve this using both loops and recursion.
 * 
 * @author GeorgeOkez
 * 
 * My solution using Recursion
 * 
 */

import java.util.Scanner;

public class Day_2_solution {
    
    public static void main(String [] args){
       
        Scanner input = new Scanner(System.in);
        System.out.print("Enter Number: ");
        long n = input.nextLong();
        
        System.out.println("Solution using loops:");
        System.out.println(n + "! = " + factorialLoop(n));
        
        System.out.println("Solution using Recursion:");
        System.out.println(n + "! = " + factorialRecursion(n));
        
    }
    
    public static long factorialRecursion(long numb){
       if(numb <= 1){
         return 1;
       } else {
         return numb * factorialRecursion(numb - 1);
       }
    }
    
    public static long factorialLoop(long numb){
        
        long number = 1;
        
        if(numb <= 1){
          return 1;
        }else{
           for(int i = 1; i <= numb; i++){
             number *= i;
           } 
           return number;
        }
       
    }
}
