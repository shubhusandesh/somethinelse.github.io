<?php
	// $resource = fopen('nayafile.txt','w');
	//  if(isset($_POST['submit'])){
	//  	$newContents = $_POST['contents'];
	// }
 //  	// fwrite($resource, $newContents);
 //  	fwrite($resource, $_REQUEST['contents']);
 //  	fclose($resource);
	file_put_contents('nayafile.txt', $_REQUEST['contents']);
  	$written = file_get_contents('nayaFile.txt');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FileHandling</title>
</head>
<body>
	<h1>write: </h1>
	<p><?=$written ?></p>
	
</body>
</html>
