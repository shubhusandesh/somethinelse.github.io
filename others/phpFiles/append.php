<?php
	// if(isset($_POST['submit'])){
	// 	$append=fopen('nayaFile.txt','a');
	// 	fwrite($append, $_REQUEST['appendThis']);
	// 	fclose($append);
	// }
	if(isset($_POST['submit'])){
		file_put_contents('nayaFile.txt', $_REQUEST['appendThis'], 8); //8 or FILE_APPEND
	}
	$contentsHere = file_get_contents('nayaFile.txt');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Append mode</title>
</head>
<body>

	<p><?=$contentsHere ?></p>
	<form action="#" method="POST">
		<textarea name="appendThis" placeholder="write to append into above paragraph" cols="100" rows="10"></textarea>
		<br>
		<input name='submit' type="submit" value="Save contents">
	</form>


</body>
</html>