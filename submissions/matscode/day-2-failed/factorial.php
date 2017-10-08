<?php
/**
 *
 * @package        100 Days of Code
 * @category       Source
 * @author         Michael Akanji <matscode@gmail.com> {@link michaelakanji.com}
 * @date           2017-10-07
 *
 */

function loopFactorial( $number )
{

}

function recursiveFactorial( $number )
{
	if ( ! is_numeric( $number ) || $number < 1 ) {
		return 1;
	}

	$result = $number * recursiveFactorial( $number - 1 );

	return $result;
}

// get user input
$userNumber = (int) ( @$_GET['number'] | '1' );

echo
	// request input
	'<form><input name="number" placeholder="Number" value="' . $userNumber . '"><input type="submit" value="Guess"></form>',
	// calculate factorial
	'<h5> Loopy Factorial of ' . $userNumber . ' =>  ' . loopFactorial( $userNumber ) . ' </h5>',
	'<h5> Recursively Factorial of ' . $userNumber . ' =>  ' . recursiveFactorial( $userNumber ) . ' </h5>';
