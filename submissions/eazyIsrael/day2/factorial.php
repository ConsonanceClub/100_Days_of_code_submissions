<!DOCTYPE html>
<html>
<head>
    <title>factorial</title>
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
    //checks if the user has submitted a value
    if (isset($_POST['submit'])) {
        // value submitted by user
        $num = $_POST['num'];
        //checks if the value is a numeric digit
        if (!empty($num) && is_numeric($num)) {
            $factorial = array();
            while ($num>=1) {
                //decrements each number of the value submitted by the user and stores them in an array
                $factorial[] = $num;
                $num = $num -1;
            }

             $value = 1;
             // computes the factorial of the value entered by user
            for ($i = 0; $i < count($factorial); $i++) {
                    if($value > 1){
                        $value =$value * $factorial[$i];
                    }else{
                        $value = $value * $factorial[$i];
                    }
                    //echo $factorial[$i].','; displays all individual number that forms the factorial value
            }
            //displays the factorial of the value entered by user
            $msg = "<p>The factorial value is: ".$value."</p>";

        }else{
            //tells user to enter a valid digit from 1 and above
            $msg ="<p class=\"error\">Please Enter a valid number</p>";
        }
    }
    ?>

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <h2>Factorial Calculator</h2>
        <?php
            if (isset($msg)) {
               echo "<strong><p>".$msg."</p></strong>";
            }
           ?>
        <ul>
            <li>
                <label>Enter Number</label>
                <input type="number" name="num">
            </li>
            <li><input type="submit" name="submit" value="compute"></li>
        </ul>

    </form>


</body>
</html>