 <?php
        if(!empty($_GET['breed'])) {
        $breed = urlencode($_GET['breed']);
        $dog_url = "https://dog.ceo/api/breed/" . $breed . "/images";
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
        <meta name="description" content="This program displays random images of dogs based on selected breed.">
        <meta name="author" content="Moses Ajireloja">
        <link rel="stylesheet" href="style.css" type="text/css" media="all">
    </head>  
    <body>
        <div id="container">
        <h2 class="title">DOG IMAGES</h2>
        <p class="welcome">
        Welcome to the Dog Images App. Images are displayed based on selected breed.
        </p>
        <!-- Display the Input Form by default -->
            <form action="" class="form">
                Select A Breed: <select name="breed">
                     <option value="">--Select a Breed--</option>
                     <option value="affenpinscher">affenpinscher</option>
                     <option value="african">african</option>
                     <option value="airedale">airedale</option>
                     <option value="akita">akita</option>
                     <option value="appenzeller">appenzeller</option>
                     <option value="basenji">basenji</option>
                     <option value="beagle">beagle</option>
                     <option value="bluetick">bluetick</option>
                     <option value="borzoi">borzoi</option>
                     <option value="bouvier">bouvier</option>
                </select><br>
                <button type="submit" class="button">Display Dog Images</button>
            </form>
            
            <div id="result">
                <p class="title">DOG IMAGES <?php if (isset($breed)) {echo ": " . urldecode($breed);} ?></p>
           <?php
           if (!empty($dog_image)) {
                   for($i=0; $i<5; $i++) {
            echo "<img width='300px' height='150px' src=" . $dog_image[$i] . ">" . "<br>";
              }
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
