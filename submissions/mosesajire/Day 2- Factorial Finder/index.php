<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Factorial Finder</title>      
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keyword" content="PHP, 'Factorial Finder', 'Github Project', ConsonanceNg">
        <meta name="description" content="This PHP program finds the factorial of a number">
        <meta name="author" content="Moses Ajireloja">
        <link rel="stylesheet" href="style.css" type="text/css" media="all">
    </head>  
    <body>
        <div id="container">
        <h2 class="title">FACTORIAL FINDER</h2>
        <p class="welcome"> Welcome to the Factorial Finder.<br> This program calculates the factorial of a number in few seconds.
        Simply enter a number between 1 and 30, and get the factorial of the number displayed on your screen! </p>
        <!-- Display the Input Form by default -->
            <form action="index.php" method="post" class="form">
                Enter Your Number Here:
                <input type="number" name="number" min="1" max="30" required="required" title="Enter a number between 1 and 30"><br>
                <input type="submit" name="submit" value="Find Factorial" class="button">
                <input type="reset" name="Reset"  value="Reset Number" class="button">
            </form>
            
            <div id="result">
        <?php                   
        // Validate the user's input.
            if (isset($_POST['submit'])) {
                // Ensure that a number has been entered.
                if (isset($_POST['number']) && !empty($_POST['number']) && is_numeric($_POST['number'])) {
                    // Then obtain the user's number.
                    $number = strip_tags(trim($_POST['number']));
                    
                    if ($number == 0) {
                        echo "The factorial of 0 is 1.";
                    }
                    if ($number < 0) {
                        echo "Please enter a positive whole number. <br>Try again.";
                    }
                    if ($number > 30) {
                        echo "Please enter a number that is not more than 30.<br>Try again.";
                    }
                    if ($number > 0 && $number < 31) {
                    // Initialize result  
                       $result = 1;
                    // Perform the loop here   
                    for($value=$number; $value>0; $value--) {
                        $result = $result * $value;
                       }
                    // display the result
                       echo "<p class='title'><b>RESULT</b></p>";
                       echo "The factorial of <b>$number</b> is <b>$result</b>" . ".<br>";
                       echo "<p>(That is, <i><b> $number! = $result.</b></i>)</p>";
                       echo "<p>Thank you for using Factorial Finder.</p>";
                       }
                } else {
                    // The number must be between 1 and 30.
                    echo "<p>Please enter a number that is a minimum of 1 and maximum of 30.</p>";
                    echo "<p>Thank you.</p>";
                }
                }
            ?>
        </div>
        </div>
    </body>
</html>
