<?php
	$contents = 'something';

	//$fh = fopen('filename.extension','mode');
		$fh = fopen('contents.txt', 'r');
		$contents= fread($fh, filesize('contents.txt'));
		// var_dump($fh);
		fclose($fh);

		$content1 = file_get_contents('nayaFile.txt');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FileHandling</title>
</head>
<body>
	<h1>File Handling</h1>
	<p><?= $contents?></p>
	<form action="write.php" method="POST">
		<textarea name="contents" rows="10" cols="20">
		 <?= $content1?>
		</textarea>
		<br>
		<input name='submit' type="submit" value="Save contents">
	</form>
</body>
</html>
