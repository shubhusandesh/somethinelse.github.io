
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sessions</title>
	<link rel="stylesheet" href="./app.css">
	<link rel="stylesheet" href="./animate.css">
</head>
<body>
	<div class="upperArea">	
		<div class="loginInfo"></div>
		<div class="message"></div>
	</div>

	<div class="heading">
			<h2>Login</h2>
	</div>
	<div class="container">
		
		<form action="" method="POST" class="form">
			<input type="text" name="username" placeholder="Your Username">
			<input type="password" name="password" placeholder="Your password">
			<br>	
			<input type="submit" name='submit' id="submit">
			<button type='button' id="register">Register</button>
		</form>
	</div>

	<script src='./jquery.js'></script>
	<script src='./app.js'></script>
</body>
</html>