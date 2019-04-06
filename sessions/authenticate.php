<?php

	function auth(){
		$file= file_get_contents('users.txt');
		$file= json_decode($file, true);
		$invalidCredential= false;
		// var_dump($file[1]['username']);
		
		foreach($file as $value){
		  if($value['username']=== $_GET['username']){
		  	if($value['password'] === $_GET['password']){
		  		$invalidCredential= false;
		  	}else{
		  		$invalidCredential= true;
		  	}
		  }else{
		  	$invalidCredential = true;
		  }
		}

		if($invalidCredential !== true){
			return true;
		}else{
			return false;
		}
	}
