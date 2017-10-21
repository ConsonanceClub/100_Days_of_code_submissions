/**
 * Created by nezspencer on 10/21/17.
 */
import org.apache.commons.mail.DefaultAuthenticator
import org.apache.commons.mail.HtmlEmail
import java.net.URL
fun main(args: Array<String>){
    print("This is an email client. Enter details to send email\n")
    println("Sender email: ")
    val sender = readLine()!!.toString()
    println("Recipient email: ")
    val recipient = readLine()!!.toString()
    println("Subject: ")
    val subject = readLine()!!.toString()
    println("Message to send: ")
    val message = readLine()!!.toString()
    println("Email password: ")
    val pwd = readLine()!!.toString()

    sendEmail(sender, recipient, subject, message,pwd)
}

fun sendEmail(sender:String,recipient: String, subject: String, msg: String,
              pwd: String){

    val email = HtmlEmail()
    email.hostName = "smtp.gmail.com"
    email.setSmtpPort(465)
    email.setAuthenticator(DefaultAuthenticator(sender,pwd))
    email.isSSLOnConnect = true
    email.setFrom(sender)
    email.addTo(recipient)
    email.setSubject(subject)
    email.setMsg(msg)
    email.send()
}
