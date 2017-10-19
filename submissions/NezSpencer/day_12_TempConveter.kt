/**
 * Created by nezspencer on 10/18/17.
 */
fun main(args: Array<String>){
    print("For Celcius to F choose 1 \n" +
            "For F to C choose 2")
    try {
        val choice = readLine()!!.toInt()
         println("Enter temperature: ")
        val temp = readLine()!!.toDouble()
        if (choice ==1)
            print("temp in Fahrenheit is: ${cToF(temp)}")
        else
            print("Temp in celcius is: ${fToC(temp)}")
    }catch (e: NumberFormatException){ print("Choose a number bro!!")}

}
fun fToC(deg: Double): Double{
    return (9/5)*deg +32;
}
fun cToF(deg: Double): Double {
    return (deg -32)*5/9;
}
