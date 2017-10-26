<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Password Generator</title>      
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keyword" content="PHP, 'Password Generator', 'Github Project', ConsonanceNg">
        <meta name="description" content="This PHP program generates password that contains upper-case letters, lower-case letters and special characters.">
        <meta name="author" content="Moses Ajireloja">
        <link rel="stylesheet" href="style.css" type="text/css" media="all">
    </head>  
    <body>
        <div id="container">
        <h2 class="title">PASSWORD GENERATOR</h2>
        <p class="welcome">
       Welcome to the Password Generator.<br>
       This program generates password that contains upper-case letters, lower-case letters and special characters.
        </p>
        <!-- Display the Input Form by default -->
        <h2 class="title">GENERATE A PASSWORD</h2>
            <form action="index.php" method="post" class="form">
                        Length of Password: <input type="number" name="plength" min=3 max=30>
                        <input type="submit" name="submit" value="GENERATE PASSWORD" class="button">
                        <input type="reset" name="Reset"  value="Reset" class="button">
               
            </form>
            
            <div id="result">
        <?php                   
        // Generate Password once the button is clicked.
            if (isset($_POST['submit'])) {
                    if (!empty($_POST['plength']) && is_numeric($_POST['plength'])) {
                    // Obtain password length from user.
                    $plength = htmlentities($_POST['plength']);
                    // Set password characters.
                    $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
                    $characters .= "*?^&%$#@+=";
                    // Repeat characters three times.
                    $repeatchars = str_repeat($characters, 3);
                    // Shuffle all the characters.
                    $shuffchars = str_shuffle($repeatchars);
                    // select number of characters to displayed based on user's input.
                    $setchars = substr($shuffchars, 5, $plength);
                    $password = "{$setchars}";
                    //Display the generated password.
                    echo "<h2 class='title'><b>RESULT</b></h2>";
                    echo "Generated Password: " . "<b>{$password}</b>";
                    } else {
                    // Display this notification if password length is not specified.
                    echo "<h2 class='title'><b>NOTIFICATION</b></h2>";
                    echo "Sorry, you need to enter a password length to proceed.<br>Please try again.<br>Thank you.";    
                    }
            }
            ?>
        </div>
        </div>
    </body>
</html>
