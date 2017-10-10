<?php
class Count_letters{
    public function adroit(string $data){
        
        $data = str_replace(' ','', $data);
        $data = preg_replace('/[^A-Za-z0-9\-]/', '', $data);
        $data = strtolower($data);
        echo "The Output : ";
        foreach (count_chars($data, 1) as $i => $val) {
            echo "<p><strong>". chr($i) , " =>". $val. "</strong><p>";
        }
    }
}
if(isset($_POST['user_input']))
{
    //$data = $_POST['user_input'];
    $data = file_get_contents('http://res.cloudinary.com/teenoh/raw/upload/v1507586031/farewell_speech_x6sm49.txt');
    Count_letters::adroit($data);
    
    echo "<p><button onclick="."location.href='index.html'>Back</button>";
}
else{
    
    echo "Error, Pls Upload a file";
    echo "<p><button onclick="."location.href='index.html'>Back</button>";
}