/**
 * Created by nezspencer on 10/8/17.
 */
fun main(args: Array<String>){
    println("Enter a string to check if it is a palindrome: ")
    val str = readLine()!!.toString()
    println(isPalindrome(str))
}

fun isPalindrome(input: String): Boolean{

    val length: Int = input.length
    var mid: Int = length /2

    var firstHalf: String
    var otherHalf :String
    if (length%2 ==0){
        //even length

        firstHalf = input.substring(0,mid)
        otherHalf = input.substring(mid,length)

        otherHalf = otherHalf.reversed()

        return firstHalf.equals(otherHalf,true)
    }
    else{
        //odd length
        firstHalf = input.substring(0,mid)
        otherHalf = input.substring(mid+1,length)

        otherHalf = otherHalf.reversed()

        return firstHalf.equals(otherHalf,true)
    }
}
