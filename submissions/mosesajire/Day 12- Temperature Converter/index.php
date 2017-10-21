<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Temperature Converter</title>      
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keyword" content="PHP, 'Temperature Converter', 'Github Project', ConsonanceNg">
        <meta name="description" content="This PHP program converts temperature from celcius to fahrenheit, and vice versa.">
        <meta name="author" content="Moses Ajireloja">
        <link rel="stylesheet" href="style.css" type="text/css" media="all">
    </head>  
    <body>
        <div id="container">
        <h2 class="title">TEMPERATURE CONVERTER</h2>
        <p class="welcome">
        Welcome to the Temperature Converter.<br>
        This program converts temperature from degree Celsius to degree Fahrenheit, and vice versa.
        Simply enter a value in either of the textfields, and get the conversion displayed on the screen.
        </p>
        <!-- Display the Input Form by default -->
            <form action="index.php" method="post" class="form">
            <table>
                <tr>
                    <td>Celsius: </td>
                    <td><input type="number" name="celsius" value=""></td>
                </tr>
                <tr>
                    <td> Fahrenheit: </td>
                    <td><input type="number" name="fahrenheit" value=""></td>
                </tr>
                <tr>
                    <td colspan=2>
                        <input type="submit" name="submit" value="Convert Now" class="button">
                        <input type="reset" name="Reset"  value="Reset Values" class="button">
                    </td>
                </tr>
            </table>            
            </form>
            
            <div id="result">
        <?php                   
        // Validate the user's input.
            if (isset($_POST['submit'])) {
                
                // if ((!isset($_POST['celsius']) || empty($_POST['celsius'])) && (!isset($_POST['fahrenheit']) || empty($_POST['fahrenheit']))) {
                 if (!empty($_POST['celsius']) || !empty($_POST['fahrenheit'])) {
                    
                // Ensure that one of the textfields is not empty
                if ((!empty($_POST['celsius'])) && empty($_POST['fahrenheit']) || (!empty($_POST['celsius']) || !empty($_POST['fahrenheit']))) {
                    // Obtain celsius and calculate fahrenheit
                    $celsius = htmlentities($_POST['celsius']);
                    $fahrenheit = round((((9*$celsius)/5)+32), 2);
                    $display = "<b>{$celsius}</b> degree Celsius equals <b>{$fahrenheit}</b> degree Fahrenheit.";
                }
                if ((!empty($_POST['fahrenheit'])) && empty($_POST['celsius'])) {
                    // Obtain celsius and calculate fahrenheit
                    $fahrenheit = htmlentities($_POST['fahrenheit']);
                    $celsius = round(((5*($fahrenheit-32))/9), 2);
                    $display = "<b>{$fahrenheit}</b> degree Fahrenheit equals <b>{$celsius}</b> degree Celsius.";
                } 
                }
                else {
                    // If the textfields are empty, display this:
                    echo "<h2 class='title'><b>NOTIFICATION</b></h2>";
                    echo "Please enter a value for either Celsius or Fahrenheit. Thank you.";
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
