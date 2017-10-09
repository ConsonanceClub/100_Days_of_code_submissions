<!DOCTYPE html>
<html>
<head>
    <title>Palindrome</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
if (isset($_POST['submit'])) {

$original = trim($_POST['word']);
if (isset($original) && !empty($original)) {

$palindrome = strrev($original);
    if ($palindrome == $original) {
        $msg = "<p class=\"success\">{$original} is a palindrome</p>";
    }else{
        $msg = "<p class=\"warning\">{$original} is not a palindrome</p>";
    }
}else{
    $msg = "<p class=\"warning\">please enter a valid string</p>";
}

}

?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <h2>Palindrome Checker</h2>
         <?php
            if (isset($msg)) {
               echo "<strong><p>".$msg."</p></strong>";
            }
           ?>
        <ul>
            <li>
                <label>Enter Word</label>
                <input type="text" name="word">
            </li>
            <li><input type="submit" name="submit" value="check"></li>
        </ul>

    </form>
</body>
</html>