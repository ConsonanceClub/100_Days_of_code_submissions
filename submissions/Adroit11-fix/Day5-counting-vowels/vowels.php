<?php
class Vowels{
    public function countVowels(string $inputs, $vowels){
        $count = 0;
        $inputs = strtolower($inputs);
        $numb_vow = strlen($inputs);
        for ($i = 0; $i < $numb_vow; $i++){
            if(in_array($inputs[$i], $vowels)){
                $count++;
                $result =$inputs[$i];
                echo "<strong>".$result."</strong><p>";
            }
        }
        echo "Total sum of vowels : ";
        return $count;
    }
    public function vowelsse(string $inputs){

        return Vowels::countVowels($inputs, array('a', 'e', 'i', 'o', 'u'));
    }
}
$data = $_POST['user_input'];
$result = Vowels::vowelsse($data);
echo $result . "<p><button onclick="."location.href='index.html'>Back</button>";