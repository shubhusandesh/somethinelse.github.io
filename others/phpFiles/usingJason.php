<?php
	if(isset($_POST['submitString'])){
		file_put_contents('jason.txt', $_REQUEST['jason']); //8 or FILE_APPEND
	}

	$jasonData = file_get_contents('jason.txt');
	$data = json_decode($jasonData, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>jason object</title>
</head>
<body>
	<form action="#" method="POST">
		<textarea name="jason" id="" cols="30" rows="10" placeholder="Enter string to change in to jason object"><?php print_r($jasonData); ?></textarea>
		<input type="submit" name="submitString">
	</form>

	<p><?php print_r($data); ?></p>
	<script>
		$('input[type="submit"').on('click',function(e){
			e.preventDefault();
			var data = $('form').serializeArray();

			$.ajax({
				url: 'submit.php',
				method: 'post',
				data: data

			}).then(function(success){
				console.log(success);
			},function(error){
				console.log(error);
			});
		})
	</script>
</body>
</html>


