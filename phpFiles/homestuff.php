<?php
$large_document="PHP: Hypertext Preprocessor (or simply PHP) is a general-purpose programming language originally designed for web development. It was originally created by Rasmus Lerdorf in 1994; the PHP reference implementation is now produced by The PHP Group. PHP originally stood for Personal Home Page, but it now stands for the recursive initialism PHP: Hypertext Preprocessor.

PHP code may be executed with a command line interface (CLI), embedded into HTML code, or it can be used in combination with various web template systems, web content management systems, and web frameworks. PHP code is usually processed by a PHP interpreter implemented as a module in a web server or as a Common Gateway Interface (CGI) executable. The web server combines the results of the interpreted and executed PHP code, which may be any type of data, including images, with the generated web page. PHP can be used for many programming tasks outside of the web context, such as standalone graphical applications and robotic drone control.

The standard PHP interpreter, powered by the Zend Engine, is free software released under the PHP License. PHP has been widely ported and can be deployed on most web servers on almost every operating system and platform, free of charge.

The PHP language evolved without a written formal specification or standard until 2014, with the original implementation acting as the de facto standard which other implementations aimed to follow. Since 2014 work has gone on to create a formal PHP specification.";

//1.Replace 'php' with 'Python'.
 $large_document = str_replace('PHP','PYTHON', $large_document);
 // echo $large_document;

 //2.Replace 'html' with 'css'.
 $large_document= str_replace('HTML','CSS',$large_document);
 //	3.Trim white spaces of at least 10 sentences.
 $sentences = array('0' => 'Sentences are stored in this array');
 $copyDocument = $large_document;

 for($i=0; $i<10; $i++){
	$periodPosition = strpos($copyDocument,'.');
	$tempSentence = substr($copyDocument,0,$periodPosition+1);
	$copyDocument= trim($copyDocument,$tempSentence);
	$tempSentence= trim($tempSentence);
	// echo $tempSentence;
	array_push($sentences, $tempSentence);
 }
 var_dump($sentences);
 echo '<br>';
 //	4.Find the every word 'programming' and store positions in array.
 $numberOfProgramming=  substr_count($large_document,'programming');
$programmingPos= array('0' => strpos($large_document, 'programming'));
 for($i=0; $i<$numberOfProgramming-1; $i++){
 	$nayaPosition = strpos($large_document, 'programming',$programmingPos[$i]+1);
 	array_push($programmingPos, $nayaPosition);
 }
var_dump($programmingPos);
echo '<br>';

//5.Count how many sentences are in the paragraph.
 $numberOfSentences= substr_count($large_document, '.');
 echo 'Number of sentences are '.$numberOfSentences;
echo '<br>';
 //6.Trim 'ed' and 'er' of at least 10 words each i.e. past verbs and nouns.
$large_document= str_replace('ed','',$large_document);
$large_document= str_replace('er','',$large_document);
echo 'Trimmed "ed" and "er":'.$large_document;

//7.substring 10 sentences from 'for', 'of', 'in' to its end i.e. period '.'.each.
$subSentences = array('0' => 'subSentences are listed in this array');
for($i=1; $i< count($sentences); $i++){
	$word = strpos($poseString,'Buys');
	$trimmed_string= substr($poseString,$word);
	$periodPosition = strpos($trimmed_string,'.');
	$finalSentence = substr($trimmed_string,0,$periodPosition+1);
}
?>