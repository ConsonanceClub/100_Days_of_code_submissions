import java.util.*

/**
 * Created by nezspencer on 10/5/17.
 */

fun main(args: Array<String>){
    guessIt()
}

fun ClosedRange<Int>.random() = Random().nextInt(endInclusive - start) + start
fun guessIt(){
    //generate random number
    val computerNum :Int = (1 ..101).random()
    var userInput : Int = -1
    var numOfGuesses :Int = 0

    while (userInput != computerNum){

        print("I have a number in mind. It is between 1 and 100\nGuess the number!")
        //accept input
        try {
            userInput = readLine()!!.toInt()
        }
        catch (e: NumberFormatException){
            print("Only numbers are allowed")
            continue
        }

        if (userInput < 1 || userInput >100){
            print("Number in mind is between 1 and 100.\n Try again\n")
            continue
        }
        if (userInput < computerNum){
            print("$userInput is lower than number in mind\n")
            numOfGuesses++
        }
        else if (userInput > computerNum){
            print("$userInput is higher than number in mind\n")
            numOfGuesses++
        }
        else{
            print("Congrats you guessed right $computerNum is the number in mind. \n You got it" +
                    " after $numOfGuesses tries")
        }


    }


}

