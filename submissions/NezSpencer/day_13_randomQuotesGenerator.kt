/**
 * Created by nezspencer on 10/18/17.
 */
import java.util.*

fun main(args: Array<String>){generateRandomQuote()}
fun generateRandomQuote(){

    val quotes :Array<String> = arrayOf(
            "Fine feathers make a fine bird",
            "Second quote",
            "Work hard play harder",
            "Jesus is all that matters",
            "Come all ye that are tired and heavy burdened, God will give you rest")

    print(quotes[(Math.random() * quotes.size).toInt()])
}

