<?php
/**
 *
 * @package        100 Days of Code
 * @category       Source
 * @author         Michael Akanji <matscode@gmail.com> {@link http://michaelakanji.com}
 * @date           2017-10-08
 *
 */

function isWordPalindrome( $word )
{
	if (!$word) return '';

	return
		( $word == strrev( $word ) )
			? 'Yuppie, ' . $word . ' is a Palindrome'
			: ':( .. Yuck, ' . $word . ' sucks, :-p...';
}

// get user input
$userWord = ( @$_GET['testWord'] );
?>

<!--// request user input-->
<form>
	<input name="testWord"
	       placeholder="RacecaR"
	       value="<?= $userWord ?>">
	<input type="submit" value="Test">
</form>

<!--// Word Test result-->
<h5> <?= isWordPalindrome( $userWord ) ?>  </h5>
