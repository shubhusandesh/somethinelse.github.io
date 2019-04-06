<?php
	//for pictures
	if(isset($_POST['submit'])){
		print_r($_FILES['file']);
		$file = $_FILES['file'];

		$filename = $file['name'];
		$filetype = $file['type'];
		$tempName = $file['tmp_name'];
		$error= $file['error'];
		$filesize = $file['size'];

		$path= './images/';
		$allowedFiles = ['png','jpg','jpeg'];
		$ext_name = explode('.',$filename);
		$ext_name = array_pop($ext_name);
		$ext_name = strtolower($ext_name);
		$destination= $path.rand(0000,9999).'.'.$ext_name;

		
		if(in_array($ext_name, $allowedFiles)){
			if($filesize < 5000000){
				if($error === 0){
					move_uploaded_file($tempName, $destination);
				}else{
					echo 'there was an error uploading the file';
				}
			}else{
				echo 'File size is too large';
			}
		}else{
			echo 'Can\'t upload file of this type.';
		}
		

	}



	?>