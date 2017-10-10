<?php include("header.php"); ?>
    <body>
        <div id="container">
        <h2 class="title">VOWEL COUNTER</h2>
        <p class="welcome">
        Welcome to the Vowel Counter.<br>
        This program counts the number of vowel present in a string and displays it on the screen.<br>
        <!-- Display the Input Form by default -->
            <form action="index.php" method="post" class="form">
                Type Something Here:
                <input type="text" name="string" placeholder="Enter your word(s)" required="required"><br>
                <input type="submit" name="submit" value="Count Vowel" class="button">
                <input type="reset" name="Reset"  value="Reset Number" class="button">
            </form>
            
            <div id="result">
        <?php                   
        // Validate the user's input.
            if (isset($_POST['submit'])) {
                // Ensure that the textfield is not empty
                if (isset($_POST['string']) && !empty($_POST['string']) && !is_numeric($_POST['string'])) {
                    
                    echo "<p class='title'><b>NOTIFICATION</b></p>";
                    
                    // Obtain user's entry
                    $entry = htmlentities($_POST['string']);
                    
                    // Count the number of vowel using regular expression
                    $countvowel = preg_match_all("/[aeiou]/i", $entry, $result);
                    
                    // Count the number of each vowel.
                    $a = preg_match_all("/[a]/i", $entry, $result);
                    $e = preg_match_all("/[e]/i", $entry, $result);
                    $i = preg_match_all("/[i]/i", $entry, $result);
                    $o = preg_match_all("/[o]/i", $entry, $result);
                    $u = preg_match_all("/[u]/i", $entry, $result);
           
                    $vowel = array('a' => $a, 'e' => $e, 'i' => $i, 'o' => $o, 'u' => $u);

                    // Display result
                    // If no vowel is present, display this:
                    if ($countvowel == 0) {
                        echo "<p>There is no vowel in <i><b>{$entry}</b></i>.</p>";
                        echo "Try another word(s).";
                        echo "<p>Thank you.</p>";
                    }
                    // If one vowel is present, display this:
                    if ($countvowel == 1) {
                        echo "<p>There is <b>1</b> vowel in <i><b>{$entry}</b></i>.</p>";
                        echo "<p>Thank you.</p>";
                    }
                    // If there are two or more vowels, display this:
                     if ($countvowel > 1) {
                        echo "<p>There are <b>{$countvowel}</b> vowels in <i><b>{$entry}</b></i>.</p>";
                        // Display the number of each vowel
                        foreach($vowel as $eachvowel => $count) {
                        echo "{$eachvowel}= " . $count . "<b>;</b> ";
                    }
                        echo "<p>Thank you.</p>";
                    }
                } else {
                    // If the textfield is empty, display this:
                    echo "<p class='title'><b>NOTIFICATION</b></p>";
                    echo "<p>Please enter your word(s) to proceed.</p>";
                    echo "<p>Thank you.</p>";
                }
                }
            ?>
        </div>
        </div>
    </body>
</html>
