/**
 * Created by nezspencer on 10/10/17.
 */
import java.io.File
import java.io.InputStream
fun main(args: Array<String>){
    val path = System.getProperty("user.dir")
    countAlphabets(readFileContents("${path}/obama.txt"))
}
fun readFileContents(path: String) :String{
    val inputStream: InputStream = File(path).inputStream()

    val wholeText = inputStream.bufferedReader().use { it.readText() }
    return wholeText.toLowerCase()
}

fun countAlphabets(text: String) {
    val hashMap: HashMap<Char,Int> = hashMapOf(
            'a' to 0, 'b' to 0, 'c' to 0, 'd' to 0, 'e' to 0, 'f' to 0, 'g' to 0,
            'h' to 0, 'i' to 0, 'j' to 0, 'k' to 0, 'l' to 0, 'm' to 0, 'n' to 0,
            'o' to 0, 'p' to 0, 'q' to 0, 'r' to 0, 's' to 0, 't' to 0, 'u' to 0,
            'v' to 0, 'w' to 0, 'x' to 0, 'y' to 0, 'z' to 0
    )

    for (letter in text){
        if (hashMap.containsKey(letter))
            hashMap.put(letter,(hashMap.getValue(letter)+1))
    }
    print(hashMap.toSortedMap())
}

