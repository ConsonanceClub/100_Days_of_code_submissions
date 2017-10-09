<?php

class FactorialFinder
{
    public function factorial(int $num)
    {
        $factorial = 1;
        for ($x=$num; $x >= 1; $x --) 
        {
          $factorial = $factorial * $x;
        }
        //echo "Factorial of $num is $factorial";
        return $factorial;
    }
}

$input_numb = $_POST['user_input'];
$result = FactorialFinder::factorial($input_numb);
echo "Factorial of ". $input_numb." is: " .$result. "<p><button onclick="."location.href='index.html'>Back</button>" ;
