<?php include("header.php"); ?>
    <body>
        <div id="container">
        <h2 class="title">PALINDROME CHECKER</h2>
        <p class="welcome">
        A Palindrome is a string that remains the same when spelt either forward or backward.<br>
        For example, <b>radar</b> is a palindrome. Also, <b>5489845</b> is a palindrome.<br>
        This program checks if an entered string is a Palindrome. </p>
        <!-- Display the Input Form by default -->
            <form action="index.php" method="post" class="form">
                Enter Something Here:
                <input type="text" name="string" placeholder="Enter a string to check" required="required"><br>
                <input type="submit" name="submit" value="Check Now" class="button">
                <input type="reset" name="Reset"  value="Reset Number" class="button">
            </form>
            
            <div id="result">
        <?php                   
        // Validate the user's input.
            if (isset($_POST['submit'])) {
                // Ensure that the textfield is not empty
                if (isset($_POST['string']) && !empty($_POST['string'])) {
                    // Obtain the string
                    // Make the first letter a capital letter for proper display of result
                    $string1 = htmlentities(ucfirst($_POST['string']));
                    
                    // convert the string to small letters.
                    $string = htmlentities(trim(strtolower($_POST['string'])));
                    
                    // spell the string backward
                    $backward = strrev($string);
                    
                    // Check if the string is a palindrome
                    if ($string == $backward) {
                    // If it is a palindrome, notify user.                
                       echo "<p class='title'><b>RESULT</b></p>";
                       echo "<p><b>{$string1}</b> is a Palindrome.</b></p>";
                       echo "<p>Thank you for using Palindrome Checker.</p>";
                       }
                       
                       else {
                    // If the string is not a palindrome, display this:
                    echo "<p class='title'><b>NOTIFICATION</b></p>";
                    echo "<p><b>{$string1}</b> is <b>not</b> a palindrome.</p>";
                    echo "<p>Enter another string to check.</p>";
                    echo "<p>Thank you.</p>";
                }
                
                } else {
                    // If the textfield is empty, display this:
                    echo "<p class='title'><b>NOTIFICATION</b></p>";
                    echo "<p>Please enter a string to check if it is a palidrome or not.</p>";
                    echo "<p>Thank you.</p>";
                }
                }
            ?>
        </div>
        </div>
    </body>
</html>
