<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Address Book</title>      
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keyword" content="PHP, 'Address Book', 'Github Project', ConsonanceNg">
        <meta name="description" content="This PHP program stores contact information in a text file. It also displays stored contacts.">
        <meta name="author" content="Moses Ajireloja">
        <link rel="stylesheet" href="style.css" type="text/css" media="all">
    </head>  
    <body>
        <div id="container">
        <h2 class="title">ADDRESS BOOK</h2>
        <p class="welcome">
       <marquee> Welcome to the Address Book. </marquee>
        </p>
        <!-- Display the Input Form by default -->
        <h2 class="title">ADD CONTACT INFORMATION</h2>
            <form action="index.php" method="post" class="form">
            <table>
                <tr>
                    <td>Contact Name: </td>
                    <td><input type="text" name="cname" value="" size=20></td>
                </tr>
                <tr>
                    <td> Phone Number: </td>
                    <td><input type="number" name="pnumber" value="" size=20></td>
                </tr>
                <tr>
                    <td colspan=2>
                        <input type="submit" name="submit" value="Save Contact" class="button">
                        <input type="reset" name="Reset"  value="Reset" class="button">
                    </td>
                </tr>
            </table>            

            </form>
            
            <div id="result">
        <?php                   
        // Validate the user's input.
            if (isset($_POST['submit'])) {
                 if (!empty($_POST['cname']) || !empty($_POST['pnumber'])) {
                    // Obtain the contact name and phone number
                    $contactname = htmlentities($_POST['cname']);
                    $phonenumber = htmlentities($_POST['pnumber']);
                    // Open the address book or create it if it does not exist.
                    $addressbook = fopen('addressbook.txt', 'a') or die("The address book could not be opened.");
                    // Contact Information
$contactinfo =
<<<_CONTACT
<hr>
Contact Name: $contactname
Phone Number: $phonenumber
_CONTACT;
                    // Lock the address book before writing to it.
                    if(flock($addressbook, LOCK_EX)) {
                        // write to the address book
                        fwrite($addressbook, $contactinfo) or die("There was a problem writing to the file.");
                        flock($addressbook, LOCK_UN);
                    }
                    // close the address book
                    fclose($addressbook);
                    $display = "The address book has been updated successfully.";
                }
                else {
                    // If the textfields are empty, display this:
                    echo "<h2 class='title'><b>NOTIFICATION</b></h2>";
                    echo "Please type the contact name and phone number. Thank you.";
                }
            // Display notification after saving the contact.
            if (isset($display)) {
                echo "<h2 class='title'><b>NOTIFICATION</b></h2>";
                echo "{$display}";
            }
            }
            ?>
            <?php
            // Display stored contacts
            if (file_exists('addressbook.txt')) {
                $contacts = file_get_contents('addressbook.txt');
                echo "<h2 class='title'><b>SAVED CONTACTS</b></h2>";
                echo nl2br($contacts);
            }
            ?>
        </div>
        </div>
    </body>
</html>
