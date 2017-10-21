<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Random Quote Machine</title>      
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keyword" content="PHP, 'Random Quote Machine', 'Github Project', ConsonanceNg">
        <meta name="description" content="This PHP Program displays a quote randomly from a list of predefined quotes.">
        <meta name="author" content="Moses Ajireloja">
        <link rel="stylesheet" href="style.css" type="text/css" media="all">
    </head>  
    <body>
        <div id="container">
        <h2 class="title">RANDOM QUOTE MACHINE</h2>
        <p class="welcome">
        Welcome to the Random Quote Machine.<br>
        This PHP Program displays a quote randomly from a list of predefined quotes.<br>
        Simply click on 'REFRESH QUOTE' to display another quote at random.
        </p>
        <?php
        // Add the quotes
        $setquote[] = "It is not the events of our lives that shape us, but our beliefs as to what those events mean. <br> -- Anthony Robbins.";
        $setquote[] = "It doesn't matter where you are coming from. All that matters is where you are going. <br> -- Brian Tracy.";
        $setquote[] = "You see, in life, lots of people know what to do, but few people actually do what they know. Knowing is not enough! You must take action. <br> -- Anthony Robbins.";
        $setquote[] = "Imagination is more important than knowledge. <br> -- Albert Einstein.";
        $setquote[] = "Creativity is a natural extension of our enthusiasm. <br> --Earl Nightingale.";
        $setquote[] = "It is not what you are that holds you back, it is what you think you are not. <br> -- Dennis Waitley.";
        $setquote[] = "Success is getting what you want. Happiness is wanting what you get. <br> -- Dale Carnegie.";
        $setquote[] = "There is no such thing as failure; there are only results. You always succeed in producing a result. <br> -- Anthony Robbins.";
        $setquote[] = "The successful man will profit from his mistakes and try again in a different way. <br> -- Dale Carnegie.";
        $setquote[] = "Don't dwell on what went wrong. Instead, focus on what to do next. Spend your energies on moving forward toward finding the answer. <br> -- Dennis Waitley.";
        $setquote[] = "Believe that you are bigger than your difficulties, for you are, indeed. <br> -- Norman Vincent.";
        $setquote[] = "People with goals succeed because they know where they are going. <br> -- Earl Nightingale.";
        // Set a random number
        $random = rand(0, 11);
        // select a quote based on the random number generated.
        $display = $setquote[$random];        
        ?>
        <div id="result">
        <h2 class="title">HERE IS A QUOTE:</h2>
        <?php
        echo "{$display}";        // Display the quote.
        ?>
        <hr>
        <center><a href="index.php" class="refresh">REFRESH QUOTE</a></center>
        <hr>
        </div>
        </div>
    </body>
</html>
