<?php
/**
 *
 * @package        100 Days of Code
 * @category       Source
 * @author         Michael Akanji <matscode@gmail.com> {@link michaelakanji.com}
 * @date           2017-10-09
 *
 */

function vowelsOccurrence( $phrase )
{
	preg_match_all( '/(a)?(e)?(i)?(o)?(u)?/i', $phrase, $matches );

	return
		count( array_filter( $matches[0], function ( $value ) {
			if ( $value ) return true;
		} ) );
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
<h5>
	<?= ( $vowelsOccurrence ) ? 'There are ' . $vowelsOccurrence . ' Vowels in "' . $userWord . '" </pre > ' : ''; ?>
</h5>
