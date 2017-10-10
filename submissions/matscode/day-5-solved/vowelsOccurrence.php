<?php
/**
 *
 * @package        100 Days of Code
 * @category       Source
 * @author         Michael Akanji <matscode@gmail.com> {@link http://michaelakanji.com}
 * @date           2017-10-09
 *
 */

function vowelsOccurrence( $phrase )
{
	preg_match_all( '/(a)?(e)?(i)?(o)?(u)?/i', $phrase, $matches );
	$vowelCount = [];
	$keys       = [ 'total', 'a', 'e', 'i', 'o', 'u' ];
	foreach ( $keys as $k => $v ) {
		$vowelCount[ $v ] = $v . " \t=> ". count( array_filter( $matches[ $k ], function ( $value ) {
			if ( $value ) return true;
		} ) );
	}

	return $vowelCount;
}

// get user input
$userWord         = ( @$_GET['testWord'] );
$vowelsOccurrence = vowelsOccurrence( $userWord );
?>

<!--// request user input-->
<form>
	<input name="testWord"
	       placeholder="Zoom"
	       value="<?= $userWord ?>">
	<input type="submit" value="Count Vowels">
</form>

<!--// Word Test result-->
<div>
	<?= ( $vowelsOccurrence ) ? 'There are <br> <pre>' . join( "\n", $vowelsOccurrence) . '</pre> Vowels in "' . $userWord . '" ' : ''; ?>
</div>
