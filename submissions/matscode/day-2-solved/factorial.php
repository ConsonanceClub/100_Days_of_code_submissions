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
	if ( $number < 1 ) {
		return 1;
	}

	$result = $number * recursiveFactorial( $number - 1 );

	return $result;
}

// get user input
$userNumber = ( @$_GET['number'] | 1 );

// show input
echo '<form><input name="number" placeholder="Number"><input type="submit" value="Guess"></form>';

// calculate factorial
echo
	'<h5> Loopy Factorial of ' . $userNumber . ' =>  ' . loopFactorial( $userNumber ) . ' </h5>',
	'<h5> Recursively Factorial of ' . $userNumber . ' =>  ' . recursiveFactorial( $userNumber ) . ' </h5>';
