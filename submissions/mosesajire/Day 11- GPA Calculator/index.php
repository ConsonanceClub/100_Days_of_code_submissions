<!DOCTYPE html>
<html lang="en">
    <head>
        <title>GPA Calculator</title>      
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keyword" content="PHP, 'GPA Calculator', 'Day 11', 'Github Project', ConsonanceNg">
        <meta name="description" content="This PHP program calculates GPA based on 5-point grade system">
        <meta name="author" content="Moses Ajireloja">
        <link rel="stylesheet" href="style.css" type="text/css" media="all">
    </head>  
    <body>
        <div id="container">
        <h2 class="title">GPA CALCULATOR</h2>
        <?php
        if (!isset($_POST['submit'])) {
            // Display the input form
        ?>
        <p class="welcome">
        Welcome to the GPA Calculator.<br>
        This program calculates your GPA based on 5-point grade system. Simply enter your courses, units and scores.
        <br>Your GPA will be displayed immediately.<br>
        
        <table border='1' align='center'>
            <tr>
                <th>S/N</td>
                <th>Course</td>
                <th>Score</td>
                <th>Unit</td>
            </tr>
              <form action="index.php" method="post" class="form">
            <tr>
                <td>1</td>
                <td><input type="text" name="c1" size="10" required="required" maxlength="7"></td>
                <td><input type="number" name="s1" size="10" min="0" max="100" required="required"></td>
                <td><input type="number" name="u1" size="10" min="0" max="10" required="required"></td>
            </tr>
            <tr>
                <td>2</td>
                <td><input type="text" name="c2" size="10" required="required" maxlength="7"></td>
                <td><input type="number" name="s2" size="10" min="0" max="100" required="required"></td>
                <td><input type="number" name="u2" size="10" min="0" max="10" required="required"></td>
            </tr>
            <tr>
                <td>3</td>
                <td><input type="text" name="c3" size="10" maxlength="7"></td>
                <td><input type="number" name="s3" size="10" min="0" max="100"></td>
                <td><input type="number" name="u3" size="10" min="0" max="10"></td>
            </tr>
            <tr>
                <td>4</td>
                <td><input type="text" name="c4" size="10" maxlength="7"></td>
                <td><input type="number" name="s4" size="10" min="0" max="100"></td>
                <td><input type="number" name="u4" size="10" min="0" max="10"></td>
            </tr>
            <tr>
                <td>5</td>
                <td><input type="text" name="c5" size="10" maxlength="7"></td>
                <td><input type="number" name="s5" size="10" min="0" max="100"></td>
                <td><input type="number" name="u5" size="10" min="0" max="10"></td>
            </tr>
             <tr>
                <td>6</td>
                <td><input type="text" name="c6" size="10" maxlength="7"></td>
                <td><input type="number" name="s6" size="10" min="0" max="100"></td>
                <td><input type="number" name="u6" size="10" min="0" max="10"></td>
            </tr>
             <tr>
                <td>7</td>
                <td><input type="text" name="c7" size="10"></td>
                <td><input type="number" name="s7" size="10" min="0" max="100"></td>
                <td><input type="number" name="u7" size="10" min="0" max="10"></td>
            </tr>
             <tr>
                <td>8</td>
                <td><input type="text" name="c8" size="10" maxlength="7"></td>
                <td><input type="number" name="s8" size="10" min="0" max="100"></td>
                <td><input type="number" name="u8" size="10" min="0" max="10"></td>
            </tr>
            
            <tr>
                <td colspan=4>
                 <center>
                <input type="submit" name="submit" value="Calculate GPA" class="button">
                <input type="reset" name="Reset"  value="Reset" class="button">
                </center>
                </td>
            </tr>
           
            </form>
           
        </table>
          
          <?php
          }
          ?>
            
            <div id="result">
       
       <?php
       if (isset($_POST['submit'])) {
            // Get score and unit of course 1
            if (!isset($_POST['s1']) || empty($_POST['s1']) || !isset($_POST['u1']) || empty($_POST['u1']) || !is_numeric($_POST['s1']) || !is_numeric($_POST['u1'])) {
                // Set the default value to zero.
                $s1 = 0;
                $u1 = 0;
            } else {
                // obtain the values entered by the user.
                $s1 = htmlentities($_POST['s1']);
                $u1 = htmlentities($_POST['u1']);
            }
            
            // Get score and unit of course 2
            if (!isset($_POST['s2']) || empty($_POST['s2']) || !isset($_POST['u2']) || empty($_POST['u2']) || !is_numeric($_POST['s2']) || !is_numeric($_POST['u2'])) {
                // Set the default value to zero.
                $s2 = 0;
                $u2 = 0;
            } else {
                // obtain the values entered by the user.
                $s2 = htmlentities($_POST['s2']);
                $u2 = htmlentities($_POST['u2']);
            }

            // Get score and unit of course 3
            if (!isset($_POST['s3']) || empty($_POST['s3']) || !isset($_POST['u3']) || empty($_POST['u3']) || !is_numeric($_POST['s3']) || !is_numeric($_POST['u3'])) {
                // Set the default value to zero.
                $s3 = 0;
                $s3 = 0;
            } else {
                // obtain the values entered by the user.
                $s3 = htmlentities($_POST['s3']);
                $u3 = htmlentities($_POST['u3']);
            }
            
            // Get score and unit of course 4
            if (!isset($_POST['s4']) || empty($_POST['s4']) || !isset($_POST['u4']) || empty($_POST['u4']) || !is_numeric($_POST['s4']) || !is_numeric($_POST['u4'])) {
                // Set the default value to zero.
                $s2 = 0;
                $u2 = 0;
            } else {
                // obtain the values entered by the user.
                $s4 = htmlentities($_POST['s4']);
                $u4 = htmlentities($_POST['u4']);
            }
            
            // Get score and unit of course 5
            if (!isset($_POST['s5']) || empty($_POST['s5']) || !isset($_POST['u5']) || empty($_POST['u5']) || !is_numeric($_POST['s5']) || !is_numeric($_POST['u5'])) {
                // Set the default value to zero.
                $s5 = 0;
                $u5 = 0;
            } else {
                // obtain the values entered by the user.
                $s5 = htmlentities($_POST['s5']);
                $u5 = htmlentities($_POST['u5']);
            }
            
            // Get score and unit of course 6
            if (!isset($_POST['s6']) || empty($_POST['s6']) || !isset($_POST['u6']) || empty($_POST['u6']) || !is_numeric($_POST['s6']) || !is_numeric($_POST['u6'])) {
                // Set the default value to zero.
                $s6 = 0;
                $u6 = 0;
            } else {
                // obtain the values entered by the user.
                $s6 = htmlentities($_POST['s6']);
                $u6 = htmlentities($_POST['u6']);
            }
            
            // Get score and unit of course 7
            if (!isset($_POST['s7']) || empty($_POST['s7']) || !isset($_POST['u7']) || empty($_POST['u7']) || !is_numeric($_POST['s7']) || !is_numeric($_POST['u7'])) {
                // Set the default value to zero.
                $s7 = 0;
                $u7 = 0;
            } else {
                // obtain the values entered by the user.
                $s7 = htmlentities($_POST['s7']);
                $u7 = htmlentities($_POST['u7']);
            }
            
            // Get score and unit of course 8
            if (!isset($_POST['s8']) || empty($_POST['s8']) || !isset($_POST['u8']) || empty($_POST['u8']) || !is_numeric($_POST['s8']) || !is_numeric($_POST['u8'])) {
                // Set the default value to zero.
                $s8 = 0;
                $u8 = 0;
            } else {
                // obtain the values entered by the user.
                $s8 = htmlentities($_POST['s8']);
                $u8 = htmlentities($_POST['u8']);
            }
            
            // Create an array of both scores and units.
            $scores = array($s1 => $u1, $s2 => $u2, $s3 => $u3, $s4 => $u4, $s5 => $u5, $s6 => $u6, $s7 => $u7, $s8 => $u8);
            
            // Create an array of the units alone.
            $units = array($u1, $u2, $u3, $u4, $u5, $u6, $u7, $u8);
            
            // find the total sum of the units
            $totalunits = array_sum($units);
            
            // Convert the scores to a 5-point grade system                        
            foreach($scores as $point => $unit) {
                if ($point > 69) {
                    $point = 5;
                }
                else if ($point > 59 && $point < 70) {
                    $point = 4;
                }
                else if ($point > 49 && $point < 60) {
                    $point = 3;
                }
                else if ($point > 44 && $point < 50) {
                    $point = 2;
                }
                else if ($point > 39 && $point < 45) {
                    $point = 1;
                }
                else {
                    $point = 0;
                }
            
            // Add the product of the unit and point of each course to a new array
              $product [] = $point*$unit;
            }
            // Find the total of the product.
            $totalcredit = array_sum($product);
            // Then calculate the GPA.
            $gpa = $totalcredit/$totalunits;
            
            // Round up the value of GPA to 2 decimal places and display the result.
            echo "<p class=\"title\">Result:  " . "<b>GPA =" .  round($gpa, 2) . "</b></p>";
            echo "<p><b>Your Total Credit Points (TCP):</b> " . $totalcredit . "</p>";
            echo "<p><b>Your Total Load Units (TLU): </b>" . $totalunits . "</p>";
            echo "<p><b>Your Grade Point Average (GPA): </b>" . round($gpa, 2) . "</p>";
            echo "<p>Thank you for using the GPA Calculator.</p>";
            
            echo "<p><center><a href=\"index.php\" class=\"refresh\">CALCULATE ANOTHER GPA</a></center></p>";

       }
       ?>
        </div>
        </div>
    </body>
</html>
