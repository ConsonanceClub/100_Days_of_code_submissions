 <?php
        if(!empty($_POST['submit']) || !isset($_POST['submit'])) {
        $dog_url = "https://dog.ceo/api/breeds/image/random";
        $dog_json = file_get_contents($dog_url);
        $dog_array = json_decode($dog_json, true);
        $dog_image = $dog_array['message'];
        $status = $dog_array['status'];
        if (empty($status) || !isset($status)) {
            $info = "Sorry, an error occurred while processing your request.<br>Please try again.<br>Thank you.<br>";
        }
        }
        ?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Random Dog Images</title>      
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keyword" content="PHP, 'Random Dog Images', 'Github Project', ConsonanceNg">
        <meta name="description" content="This program displays random images of dogs.">
        <meta name="author" content="Moses Ajireloja">
        <link rel="stylesheet" href="style.css" type="text/css" media="all">
    </head>  
    <body>
        <div id="container">
        <h2 class="title">RANDOM DOG IMAGE</h2>
        <p class="welcome">
        Welcome to the Random Dog Image App.
        </p>
        <!-- Display the Input Form by default -->
            <form action="" class="form">
                <button type="submit" class="button" style="height: 50px; width: 280px; color:green; font-size: 20px;">Display Random Dog Image</button>
            </form>
            
            <div id="result">
                <p class="title">RANDOM IMAGE</p>
           <?php
           if (!empty($dog_image)) {
            echo "<img width='300px' height='200px' src=" . $dog_image . ">";
           }
           if (isset($info)) {
            echo $info;
           }
           echo "<br>";
           ?>

        </div>
        </div>
    </body>
</html>
