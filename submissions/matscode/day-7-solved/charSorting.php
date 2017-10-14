<?php
/**
 *
 * Description
 *
 * @package        100 Days of Code
 * @category       Source
 * @author         Michael Akanji <matscode@gmail.com> {@link http://michaelakanji.com}
 * @date           2017-10-11
 *
 */

function charSort( $word )
{
	$chars = str_split( $word );
	sort( $chars, SORT_REGULAR );

	return $chars;
}

// get user input
$userWord = ( @$_GET['testWord'] );
// do the big deal: :-D
$sortedChars = charSort( $userWord );
?>

<!--// request user input-->
<form>
	<input name="testWord"
	       placeholder="edcba"
	       value="<?= $userWord ?>">
	<input type="submit" value="Sort Em">
</form>

<!--// Passage Test result-->
<div>
	<?= ( ! empty( $sortedChars ) ) ? 'Sorted version of "' . $userWord . '" is ' . join( "", $sortedChars ) : ''; ?>
</div>
