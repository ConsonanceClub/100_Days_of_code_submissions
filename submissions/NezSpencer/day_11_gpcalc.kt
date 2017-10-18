/**
 * Created by nezspencer on 10/16/17.
 */

fun main(args: Array<String>){
    print("How many courses do you offer?")
    var size = readLine()!!.toInt()
    var tcp: Int = 0
    var tu: Int =0


    while (size > 0){
        print("\nEnter number of units of course: ")
        var numUnits = readLine()!!.toInt()
        print("\nEnter course score: ")
        var grade = readLine()!!.toInt()
        grade = gradeToUnit(grade)
        tu += numUnits
        tcp += (numUnits * grade)

        size--
    }

    print("Your Gp is: ${((tcp).toDouble()/tu.toDouble())}")
}

fun gradeToUnit(grade: Int) : Int{

    when(grade){

        in 70..100 -> return 5

        in 60..69 -> return 4

        in 50..59 -> return 3

        in 45..49 -> return 2

        in 40..44 -> return 1

        in 0..39 -> return 0

        else -> return 0
    }
}
