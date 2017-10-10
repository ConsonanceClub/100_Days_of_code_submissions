<?php
/**
 *
 * Description
 *
 * @package        100 Days of Code
 * @category       Source
 * @author         Michael Akanji <matscode@gmail.com> {@link http://michaelakanji.com}
 * @date           2017-10-07
 *
 */

// validate number
function numberMatch( $userNumber, $randNumber )
{
	if ( ! is_numeric( $userNumber ) ) return 'Only numbers are allowed';

	if ( $userNumber < $randNumber )return 'Your guess is lower';

	if ( $userNumber > $randNumber ) return 'Your guess is higher';

	return ( $userNumber == $randNumber );
}

function resetGame( )
{
	session_destroy();
	// new game
	header( 'location: ' . $_SERVER["PHP_SELF"] );
}

// persistence
session_start();

// reset game
if (@$_GET['resetGame']) resetGame(); // forReal?

// get user input
$userNumber = @$_GET['number'];

// generate random number
$randNumber = $_SESSION['randNumber']
	= isset( $_SESSION['randNumber'] )
	? $_SESSION['randNumber']
	: rand( 1, 10 );

// validate input (applaude || request input)
echo ( ( $message = numberMatch( $userNumber, $randNumber ) ) !== true )
	? '<form><input name="number" placeholder="Number"><input type="submit" value="Guess"></form><h6>' . $message . '</h6>'
	: '<h4>Now go home, you guess the number ryt :-D... <a href="'. $_SERVER["PHP_SELF"] . '?resetGame=1">New Game</a></h4>';
