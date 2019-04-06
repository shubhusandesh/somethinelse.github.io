<?php
	$file= file_get_contents('users.txt');
	$file= json_decode($file);

	$username = $_POST['username'];
	$password = $_POST['password'];
	$newArray =['username'=>$username, 'password'=>$password];

	array_push($file, $newArray);
	print_r($file);
	$file = json_encode($file);
	file_put_contents('users.txt', $file);
		
?>