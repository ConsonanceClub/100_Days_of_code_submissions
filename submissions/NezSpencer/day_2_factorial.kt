/**
 * Created by nezspencer on 10/6/17.
 */
//Kotlin 1.1

fun main(args: Array<String>) {
    println("Hello, world!")
    try{
        print("Enter a number to get its factorial\n")
        val input = readLine()!!.toInt()
        print("The factorial of $input is ${fact(input)}  ")
    }
    catch(e: NumberFormatException){
        print("Only numbers allowed")
    }
}

fun fact(num: Int): Int{
    if(num ==  0 || num == 1 || num < 0)
        return 1
    return num * fact(num -1)
}
