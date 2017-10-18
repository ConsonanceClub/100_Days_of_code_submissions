<?php
class OrderWords{
    public function order(string $data){
        
        $data = str_replace(' ','', $data);
        $data = preg_replace('/[^A-Za-z0-9\-]/', '', $data);
        $data = strtolower($data);
        $letters = str_split($data);
        sort($letters);
        $result= "";
        foreach($letters as $letter){
            $result .= $letter;
        }
        return $result;
    }
}


if(isset($_POST['user_input']))
{
    $data = $_POST['user_input'];
    //$data = file_get_contents('http://res.cloudinary.com/teenoh/raw/upload/v1507586031/farewell_speech_x6sm49.txt');
    $results = OrderWords::order($data);

    
    echo "Your Input word/senttence<strong>  ".$data."  </strong>ordered form is: <strong style='color:red;'>  ".$results."  </strong><p><button onclick="."location.href='index.html'>Back</button>";
}
else{
    
    echo "Error, Pls Upload a file";
    echo "<p><button onclick="."location.href='index.html'>Back</button>";
}
