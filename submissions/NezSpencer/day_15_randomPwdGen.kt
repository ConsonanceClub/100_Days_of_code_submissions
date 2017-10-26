import java.util.*

/**
 * Created by nezspencer on 10/21/17.
 */
fun main(args: Array<String>){
    println("Password with how many characters? ")
    var input = readLine()!!.toInt()
    val random = Random()
    var passwd = ""
    while (input > 0){
        var chars: Char = (random.nextInt(93) + 33).toChar()
        passwd += chars
        input --
    }
    print(passwd)


}
