<?php include("header.php"); ?>
    <body>
        <div id="container">
        <h2 class="title">Speech Analyzer</h2>
        <p class="welcome">
        Welcome to the Speech Analyzer.<br>
        This program analyzes the content of the farewell speech of the former President of USA, Barack Obama. <br>
        The program reads the content from the speech file, counts and displays the number of all letters of the alphabeth present.
        </p>
        <!-- Display the Input Form by default -->
            <p class="welcome">Speech File: <a href="speech.txt" target="_blank">Farewell Speech of President Barack Obama.</a></p>
            <form action="index.php" method="post" class="form">
            <p class="welcome">
            Perform Task Here: <input type="submit" name="submit" value="Analyze Speech" class="button">
            </p>
            </form>
            <div id="result">
        <?php                   
            if (isset($_POST['submit'])) {                  
                    echo "<p class='title'><b>NOTIFICATION</b></p>";
                    
                    // Obtain the file 
                    $speechfile = "speech.txt";
                    // read content of the file
                    $entry = file_get_contents($speechfile);                    
                    // Count all the letters of the alphabeth.
                    $counter = preg_match_all("/[abcdefghijklmnopqrstuvwxyz]/i", $entry, $result);
                    // Count the number of each letter of the alphabeth.
                    $a = preg_match_all("/[a]/i", $entry, $result);
                    $b = preg_match_all("/[b]/i", $entry, $result);
                    $c = preg_match_all("/[c]/i", $entry, $result);
                    $d = preg_match_all("/[d]/i", $entry, $result);
                    $e = preg_match_all("/[e]/i", $entry, $result);
                    $f = preg_match_all("/[f]/i", $entry, $result);
                    $g = preg_match_all("/[g]/i", $entry, $result);
                    $h = preg_match_all("/[h]/i", $entry, $result);
                    $i = preg_match_all("/[i]/i", $entry, $result);
                    $j = preg_match_all("/[j]/i", $entry, $result);
                    $k = preg_match_all("/[k]/i", $entry, $result);
                    $l = preg_match_all("/[l]/i", $entry, $result);
                    $m = preg_match_all("/[m]/i", $entry, $result);
                    $n = preg_match_all("/[n]/i", $entry, $result);
                    $o = preg_match_all("/[o]/i", $entry, $result);
                    $p = preg_match_all("/[p]/i", $entry, $result);
                    $q = preg_match_all("/[q]/i", $entry, $result);
                    $r = preg_match_all("/[r]/i", $entry, $result);
                    $s = preg_match_all("/[s]/i", $entry, $result);
                    $t = preg_match_all("/[t]/i", $entry, $result);
                    $u = preg_match_all("/[u]/i", $entry, $result);
                    $v = preg_match_all("/[v]/i", $entry, $result);
                    $w = preg_match_all("/[w]/i", $entry, $result);
                    $x = preg_match_all("/[x]/i", $entry, $result);
                    $y = preg_match_all("/[y]/i", $entry, $result);
                    $z = preg_match_all("/[z]/i", $entry, $result);
           
                    $letters = array('a' => $a, 'b' => $b, 'c' => $c, 'd' => $d, 'e' => $e, 'f' => $f, 'g' => $g, 'h' => $h, 'i' => $i,
                                   'j' => $j, 'k' => $k, 'l' => $l, 'm' => $m, 'n' => $n, 'o' => $o, 'p' => $p, 'q' => $q, 'r' => $r,
                                   's' => $s, 't' => $t, 'u' => $u, 'v' => $v, 'w' => $w, 'x' => $x, 'y' => $y, 'z' => $z,);

                    // Display result
                    // If no letter is present, display notification
                    if ($counter == 0) {
                        echo "<p>There is no letter in <i><b>{$entry}</b></i>.</p>";
                        echo "Try another word(s).";
                        echo "<p>Thank you.</p>";
                    }
                    // If one letter is present, display this notification
                    if ($counter == 1) {
                        echo "<p>There is <b>1</b> letter in <i><b>{$entry}</b></i>.</p>";
                        echo "<p>Thank you.</p>";
                    }
                    // If there are two or more letters present, display this notification
                     if ($counter > 1) {
                        echo "<p>There are <b>{$counter}</b> letters in <i><b><a href=\"speech.txt\" target = \"_blank\" title=\"View the content of this file\">{$speechfile}</a></b></i> file.</p>";
                        // Display the number of each letter of the alphabeth
                        foreach($letters as $eachletter => $count) {
                        echo "<b>{$eachletter}:</b> " . $count . "<b>,</b> ";
                    }
                        echo "<p>Thank you.</p>";
                    }
                }
            ?>
            <br>
            <center><a href="index.php" class="refresh">REFRESH</a></center>
        </div>
        </div>
    </body>
</html>
