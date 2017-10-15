/**
 * Created by nezspencer on 10/14/17.
 */
class Calculator{

    fun add(num1: Double, num2: Double):Double{return num1 + num2}
    fun minus(num1: Double,num2: Double):Double{return num1 - num2}
    fun times(num1: Double, num2: Double):Double{return  num1 * num2}
    fun divide(num1:Double, num2: Double):Double{return num1/num2}
    fun sin(num1: Double):Double{ return Math.sin(num1)}
    fun cos(num1: Double):Double{ return Math.cos(num1)}
    fun tan(num1: Double):Double{ return Math.tan(num1)}
}
fun main(args: Array<String>){

    var total: Double = 0.0
    print("This is a simple calculator!\n do your calculations here and press C to end" +
            " a session.\n ")
    var input =""
    val calc = Calculator()
    input = readLine()!!.toString()
    var arrayInput = input.toCharArray()


    try {
        var first = arrayInput[0].toString().toDouble()
        var second = arrayInput[2].toString().toDouble()

        if (arrayInput[1] == '+'){
            print(calc.add(first,second))
        }
        else if (arrayInput[1] == '-'){
            print(calc.minus(first,second))
        }
        else if (arrayInput[1] == '/'){
            print(calc.divide(first,second))
        }
        else if (arrayInput[1] == '*'){
            print(calc.times(first,second))
        }
    }
    catch (e: NumberFormatException){
        print("Number arithmetic only")
    }
    finally {
        System.exit(0)
    }


}
