<?php
/**
 *
 * Description
 *
 * @package        100 Days of Code
 * @category       Source
 * @author         Michael Akanji <matscode@gmail.com> {@link http://michaelakanji.com}
 * @date           2017-10-10
 *
 */

// path to valid text file
$filePath = 'farewell_speech_x6sm49.txt';

// verify and read file content
$fileContent =
	( file_exists( $filePath ) && is_file( $filePath ) )
		? file_get_contents( $filePath )
		: exit( 'Invalid file... :-(' );

function charsOccurrence( $passage )
{
	$charCount  = [];
	$charString = 'abcdefghijklmnopqrstuvwxyz';
	$keys       = array_merge( [ 'words' ], str_split( $charString )) ;
	$pattern    = '/(a)?(b)?(c)?(d)?(e)?(f)?(g)?(h)?(i)?(j)?(k)?(l)?(m)?(n)?(o)?(p)?(q)?(r)?(s)?(t)?(u)?(v)?(w)?(x)?(y)?(z)?/i';

	// find occurence
	preg_match_all( $pattern, $passage, $matches );

	// do counting
	foreach ( $keys as $k => $v ) {
		$charCount[ $v ] = count( array_filter( $matches[ $k ], function ( $value ) {
				if ( $value ) return true;
			} ) );
	}
	unset( $charCount['words']);
	$charCount['total'] = array_sum($charCount);

	return $charCount;
}

// do the big deal: :-D
$charsOccurrence = charsOccurrence( $fileContent );
?>

<!--// Passage Test result-->
<div>
	<?= ( $charsOccurrence ) ? 'There are <br> <pre>' . print_r(  $charsOccurrence, true) . '</pre> Characters in the passage' : ''; ?>
</div>
