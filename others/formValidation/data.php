<?php
echo '<pre>';
		$name= $_POST['firstName'].' '. $_POST['middleName'].' '.$_POST['lastName'];
		$mobileNumber = $_POST['mobileNumber'];
		$phoneNumber = $_POST['phoneNumber'];
		$faxNumber = $_POST['faxNumber'];
		$email = $_POST['email'];
		$website = $_POST['website'];
		$aboutYourself = $_POST['aboutYourself'];
		$birthdate = $_POST['birthdate'];
		$gender = $_POST['sex'];
		$languages = $_POST['languageSpoken'];
		$nationality = $_POST['nationality'];
		$hobbies = [];
		if(!empty($_POST['hobby'])){
			//Loop to store and display values of individual checked checkbox.
			foreach($_POST['hobby'] as $selected){
			array_push($hobbies, $selected);
			}
		}
		$newArray=["name"=>$name,
		"mobileNumber"=> $mobileNumber,
		"phoneNumber"=>$phoneNumber,
		"faxNumber" => $faxNumber,
		"email"=>$email,
		"website" =>$website,
		"aboutYourself" =>$aboutYourself,
		"birthdate" =>$birthdate,
		"gender" =>$gender,
		"languages" =>$languages,
		"nationality" =>$nationality,
		"hobbies" =>$hobbies];

		$jasonData = file_get_contents('jasonData.txt');
		$data = json_decode($jasonData, true);

		array_push($data, $newArray);
	
		$json=json_encode($data);
		file_put_contents('jasonData.txt', $json);
		
	
		
?>