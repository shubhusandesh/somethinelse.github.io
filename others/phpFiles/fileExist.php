<?php
$fh = fopen('noContent.txt', 'x');

if (!$fh) {
	echo 'file writing process terminated.';
}
else{
	fwrite($fh, $_REQUEST['contents']);
	fclose($resource);
	echo 'file write operation successful';
}
?>