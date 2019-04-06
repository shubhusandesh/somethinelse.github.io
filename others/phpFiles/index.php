<?php
echo "hello php";


$poseString = "Ram walks to the market. Buys 2 kilos tomato. Ram returns home. Ram cooks meal.";

$position = strpos($poseString,'market');
echo " <br>";
echo "String position is :  $position";

echo "<br>";
echo "substr(string, start, length)";
echo "<br>";

// $trimmed_string = substr($poseString, strpos($poseString,'Buys'));
// $trimmed_string = substr($trimmed_string, 0, (strpos($trimmed_string,'.')+1));
// echo $trimmed_string;
// echo '<br>';

$word = strpos($poseString,'Buys');
$trimmed_string= substr($poseString,$word);
$periodPosition = strpos($trimmed_string,'.');
$finalSentence = substr($trimmed_string,0,$periodPosition+1);
echo $finalSentence;

$newStringSentence= "  Hello,it's me. I was wondering if after all these years you could hear me.  ";
$newStringSentence= trim($newStringSentence);
echo '<br>';
echo $newStringSentence;

$newStringToTest ='http://www1.helpchildren.gov';
echo '<br> <h2>normal URL: </h2>';
echo $newStringToTest;

$removeHTTP = trim($newStringToTest,'http://');
echo '<br> <h2> remove HTTP </h2>';
echo $removeHTTP;

$removeDomain = trim($removeHTTP,'.gov');
echo '<br> <h2> remove domain </h2>';
echo $removeDomain;
 
//bonus: rtrim() right most, ltrim() left most
// trim(), ucfirst(), ucwords(), strtoupper(), strtolower()

?>

<!--
	String function 
	1.Find the position of "Buys" & store in variable position.
	2.Trim the string from the position of 'Buys' and store in variable. trimmed_string.
	3.Find the position of period & store in vairble  period.
	4.Use the position of period length of string.



	trim
	1.Repalce 'php' with 'Python'.
	2.Replace 'html' with 'css'.
	3.Trim white spaces of at least 10 sentences.
	4.Find the every word 'programming' and store positions in array.
	5.Count how many  sentences are in the paragraph.
	6.Trim 'ed' and 'er' of at least 10 words each i.e. past verbs and nouns.
	7.substring 10 sentences from 'for', 'of', 'in' to its end i.e.
	period '.'.each.
-->