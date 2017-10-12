/**
 * Created by nezspencer on 10/11/17.
 */
fun main(args: Array<String>){
    print("Enter words to be ordered: ")
    val words = readLine()!!.toString()
    orderWords(words)
}
fun orderWords(words: String){
    words.replace(" ","").toLowerCase().toList().sorted().map { print(it) }
}
