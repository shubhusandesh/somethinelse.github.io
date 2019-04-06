<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>File upload</title>
	<style>
		div.container{
			display: flex;
			justify-content: center;
		}
		.newform{
			background-image: grey;
			color: white;
		}
	</style>
</head>
<body>
	
	<div class="container">
		<form action="upload.php" method="post" enctype="multipart/form-data" id="newForm">
			<input type="file" name="file">
			<input type="submit" name="submit" >
		</form>
	</div>
</body>
</html>