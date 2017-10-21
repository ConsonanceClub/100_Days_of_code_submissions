import java.io.File

/**
 * Created by nezspencer on 10/20/17.
 */
fun main(args: Array<String>){
    println("How many contacts do you wish to add?")
    var count :Int = readLine()!!.toInt()
    var input = ""
    while (count > 0){
        print("\nEnter name: ")
        input += readLine()!!.toString()+":"
        print("\nEnter phone number:")
        input += readLine()!!.toString()+","

        count--
    }
    var file = File("contacts.txt")
    file.writeText(input)

    file.readText().toString().split(",").forEach { println(it) }


}
