<?php

$folders = array_map(function($dir) {
    return basename($dir);
}, glob('../*', GLOB_ONLYDIR));
$requiredFolders=[];

foreach ($folders as $folder) {
	if($folder!=='images' && $folder!=='include'){
		array_push($requiredFolders, $folder);
	}
}
$requiredFolders = json_encode($requiredFolders);
echo $requiredFolders;

?>