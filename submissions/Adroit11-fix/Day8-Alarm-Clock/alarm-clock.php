
<?php
// Refactoring Needed
class Alarm{
    public static function notify(){
        $alarm = "<EMBED src="."droit.wav"." autostart=true loop=false volume=100 hidden=true><NOEMBED><BGSOUND src="."droit.wav"."></NOEMBED>";
        return $alarm;
    }
}
session_start();
date_default_timezone_set('Africa/Lagos'); // Set the Default Time Zone:
$date1=date_create("2017-10-12 23:47:05");
$date2=date_create();
if($date1 == $date2){
    $notification = Alarm::notify();
    echo $notification;
    session_destroy();
}
$diff=date_diff($date2,$date1);

echo 'The difference is ';
echo  $diff->h . ' hours, ';
echo  $diff->i . ' minutes, ';
echo  $diff->s . ' seconds';

?>
<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="refresh" content="1; url=<?php echo $_SERVER['PHP_SELF']; ?>">
        <style>
            .body{
                font-family: monospace;
            }
            span{
                font-family: monospace;
            }
            .container{
                margin: 100px auto 0 auto;
                width: 600px;
                height: 200px;
                text-align: center;
                border: 1px solid #000000;
                padding: 30px;
                border-radius: 10px;
            }
            input{
                padding: 10px;
                border-radius: 4px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>
                Consonance's 100DaysOfCode 
            </h1>
            <h4>
                Day 8
            </h4>
            <span>
                Alarm Clock
            </span>
            <form method="POST">
                <input type="text" name="user_input" placeholder="Time: YYYY:MM:HH:MM:SS" required>
                <input type="submit">
            </form>
        </div>
    </body>
</html>