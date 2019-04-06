<?php

echo '<pre>';
function br($lines){
	for($i=0; $i<$lines; $i++ ){
		echo "<br>";
	}
}
function title($content){
	echo '<h2>'.$content.'</h2>';
}

title('strtolower(str)');
	echo 'It is a string function which turns the character of a string to lowercase.';
	br(1);
	$high = 'SOmEBodY';
	$low = strtolower($high);
	echo $high.' turns to '.$low.'.';
	br(3);
title('strtoupper(string)');
	echo 'It is a string function which turns the characters of a string to uppercase.';
	br(1);
	$lowercase = 'Hello, it\'s me.'.
	$uppercase = strtoupper($lowercase);
	echo $lowercase.' changes to '.$uppercase.'.';
	br(3);
title('strlen(string)');
	echo 'String function which returns the length of the string.';
	br(1);
	$newString = 'hello, it\'s me';
	echo strlen($newString);
	br(3);
title('substr(string, start)');
	echo 'string function that returns a substring, it has two parameters string, starting position a';
	br(1);
	$miniString = substr($newString,7);
	echo ' Substring of <br><b> '.$newString.'</b><br> is <br> <b>'.$miniString.'</b> from 7th index position.';	
	br(3);
title('str_replace(search, replace, subject)');
	echo 'It is a string function which replaces the search string(character) from the initial string.<br> It has three parameter, first stringTObeReplaced, second replacingString and third string where replacement is to happen.';
	br(2);
	$largeString = 'something about this feels right.';
	$replacedString = str_replace('something', 'nothing', $largeString);
	echo 'before replace function: ';
	br(1);
	echo '<b>'.$largeString.'</b>';
	br(2);
	echo 'after replace function: ';
	br(1);
	echo '<b>'.$replacedString.'</b>';
	br(3);
title('strpos(haystack, needle)');
	echo 'It is a string function used to find the position of a character(smallerstring) in a string.';
	$postionOfA= strpos($replacedString,'a');
	br(2);
	echo 'Position of \'a\' in <br>';
	echo '<b>'.$replacedString.'</b> is ';
	echo $postionOfA;


?>
