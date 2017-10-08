<?php
class Palindrome{
    public function __construct($input){
        
        //Would get back to refactor this
    }
    public static function palindrome($input){
        $input = str_replace(' ','', $input);
        $input = preg_replace('/[^A-Za-z0-9\-]/', '', $input);
        $reverse = strrev($input);
        if($input == $reverse){
            return "Your Input <strong>".$input."</strong> It's a palindrome <strong>HURRAY</strong>";
        }
        else{
            return "Your Input <strong>".$input."</strong> It's not a palindrome";
        }
    }
}
$input_data = $_POST['user_input'];
$result = Palindrome::palindrome("civ ic");
echo $result . "<p><button onclick="."location.href='index.html'>Back</button>";