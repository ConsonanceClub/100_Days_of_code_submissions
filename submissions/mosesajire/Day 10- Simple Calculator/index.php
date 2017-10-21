<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Simple Calculator</title>      
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keyword" content="PHP, 'Simple Calculator', 'Github Project', ConsonanceNg">
        <meta name="description" content="This PHP program performs basic arithmetical operations such as addition, subtraction, division and multiplication.">
        <meta name="author" content="Moses Ajireloja">
        <link rel="stylesheet" href="style.css" type="text/css" media="all">
    </head>  
    <body>
        <div id="container">
        <h2 class="title">SIMPLE CALCULATOR</h2>
        <p class="welcome">
        Welcome to the Simple Calculator<br>
        This PHP program performs basic arithmetical operations.<br>
        Simply enter your first and second number to get started.
        </p>
        <!-- Display the Input Form by default -->
            <form action="index.php" method="post" class="form">
            <table>
                <tr>
                    <td>First Number: </td>
                    <td><input type="number" name="firstnum" value=""></td>
                </tr>
                <tr>
                    <td> Second Number: </td>
                    <td><input type="number" name="secondnum" value=""></td>
                </tr>
                <tr>
                    <td> Arithmetic Operation: </td>
                    <td>
                        <select name="operation">
                            <option value="">--Select Operation--</option>
                            <option value="add">Addition</option>
                            <option value="subtract">Subtraction</option>
                            <option value="multiply">Multiplication</option>
                            <option value="divide">Division</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan=2>
                        <input type="submit" name="submit" value="Calculate Now" class="button">
                        <input type="reset" name="Reset"  value="Reset Numbers" class="button">
                    </td>
                </tr>
            </table>            
            </form>
            
            <div id="result">
        <?php                   
        // Validate the user's input.
            if (isset($_POST['submit'])) {
                
                 if (!empty($_POST['firstnum']) && !empty($_POST['secondnum']) && !empty($_POST['operation'])) {
                    // Obtain the values for first number and second number
                        $firstnum = htmlentities($_POST['firstnum']);
                        $secondnum = htmlentities($_POST['secondnum']);
                        $operation = htmlentities($_POST['operation']);
                        // Start performing arithmetic operation.
                        if ($operation == 'add') {
                            $result = $firstnum + $secondnum;
                            $display = "The addition of {$firstnum} and {$secondnum} gives <b>{$result}</b>.";
                        }
                        elseif ($operation == 'subtract') {
                            $result = $firstnum - $secondnum;
                            $display = "The subtraction of {$secondnum} from {$firstnum} gives <b>{$result}</b>.";
                        }
                        elseif ($operation == 'multiply') {
                            $result = $firstnum * $secondnum;
                            $display = "The multiplication of {$firstnum} and {$secondnum} gives <b>" . round($result, 2) . "</b>.";
                        }
                        elseif ($operation == 'divide') {
                            $result = $firstnum / $secondnum;
                            $display = "The division of {$firstnum} by {$secondnum} gives <b>" . round($result, 2) . "</b>.";
                        }
                        else {
                            $result = "nothing";
                            $display = "No result";
                        }
                }
                else {
                    // If the textfields are empty, display this:
                    echo "<h2 class='title'><b>NOTIFICATION</b></h2>";
                    echo "Please type your values in the textfields displayed. Thank you.";
                }
            
            // Display notification after conversion.
            if (isset($display)) {
                echo "<h2 class='title'><b>RESULT</b></h2>";
                echo "{$display}";
                echo "<br>Thank you.";
            }
            }
            ?>
        </div>
        </div>
    </body>
</html>
