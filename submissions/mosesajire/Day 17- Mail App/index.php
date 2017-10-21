<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mail App</title>      
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keyword" content="PHP, 'Mail App', 'Github Project', ConsonanceNg">
        <meta name="description" content="This program enables you to send electronic mail with ease.">
        <meta name="author" content="Moses Ajireloja">
        <link rel="stylesheet" href="style.css" type="text/css" media="all">
    </head>  
    <body>
        <div id="container">
        <h2 class="title">MAIL APP</h2>
        <p class="welcome">
        <marquee>Welcome to the Mail App.</marquee>
        </p>
        <!-- Display the Input Form by default -->
            <form action="index.php" method="post" class="form">
            <table>
                <tr>
                    <td>Sender's Email: </td>
                    <td><input type="email" name="sender" value="" size="50" placeholder="Please enter your email address." required="required"></td>
                </tr>
                <tr>
                    <td>Receiver's Email: </td>
                    <td><input type="email" name="receiver" value="" size="50" placeholder="Please enter the receiver's email address." required="required"></td>
                </tr>
                 <tr>
                    <td>Topic: </td>
                    <td><input type="text" name="topic" value="" size="50" placeholder="Please enter the topic of your message." required="required"></td>
                </tr>
                  <tr>
                    <td>Message: </td>
                    <td>
                        <textarea name="message" cols="40" rows="5" placeholder="Please type your message here." required="required"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan=2>
                        <center>
                        <input type="submit" name="submit" value="Send Mail" class="button">
                        <input type="reset" name="Reset"  value="Reset" class="button">
                        </center>
                    </td>
                </tr>
            </table>            
            </form>
            <div id="result">
        <?php                   
        // Obtain the user's input.
            if (isset($_POST['submit'])) {
                 if (!empty($_POST['sender']) && !empty($_POST['receiver']) && !empty($_POST['topic']) && !empty($_POST['message']) && strchr($_POST['sender'], '@') && strchr($_POST['receiver'], '@') && strchr($_POST['sender'], '.') && strchr($_POST['receiver'], '.')) {
                    $sender = "From: ";
                    $sender .= htmlentities($_POST['sender']);
                    $receiver = htmlentities($_POST['receiver']);
                    $topic = htmlentities($_POST['topic']);
                    $message = htmlentities($_POST['message']);
                    // Send mail now
                    if (mail($receiver, $topic, $message, $sender)) {
                    $display = "Dear User, your mail has been sent successfully.<br>";
                    $display .= "Thank you for using the Mail App.";
                    }
                    else {
                        $display = "Sorry, your mail could not be sent.<br>This Mail App needs to run on a live server in order to send a mail successfully.<br>Thank you.";
                    }
                    echo "<h2 class='title'><b>NOTIFICATION</b></h2>";
                    echo "{$display}";
                }
                else {
                    // If the textfields are empty, display this:
                    echo "<h2 class='title'><b>NOTIFICATION</b></h2>";
                    echo "Dear User, you need to fill out all the fields correctly.<br>Please try again.<br>Thank you.";
                }           
            }
            ?>
        </div>
        </div>
    </body>
</html>
