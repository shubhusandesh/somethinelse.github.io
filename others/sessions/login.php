<?php
// echo '<pre>';
// echo 'Username: '.$_POST['username'];
// echo '<br>';
// echo 'password: '.$_POST['password'];
// echo '<br>';
// echo 'authenticating..';
include_once('authenticate.php');
	$username = $_GET['username'];
	$password = $_GET['password'];
	$cookieName = md5($_GET['username']);
	$message = isset($_COOKIE[$cookieName])? $_COOKIE[$cookieName]: 0;
	// $_COOKIE['attempt'] = ++$message;

	 if($message> 3){
	 	echo '<h5 class="message error" id="show">Please try again after some time!!!</h5>';
	 	exit;
	 }else{
	setcookie($cookieName, ++$message, time() + 20); 

	 	if(auth()){
	 		setcookie($cookieName, ++$message, time());
			echo '<h4 class="message" id="show"> logged in successfully! </h4>';
	 	}else{
	 		echo "<div class='statusBox'>
					<div class='users'>
						<h5>Username:${username}</h5>
						<h5>Password:${password}</h5>
						<h5>Current Attempt: ${message}</h5>
					</div>
				</div>";
		} }
		?>