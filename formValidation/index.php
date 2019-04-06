<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>form</title>
	<?php include_once './include/headingLink.php' ?>
</head>
<body>
	 <div class="mainContainer">
		<fieldset class="backHtml">
	    	<legend id="heading">Registration</legend>  
		 	<form action="data.php" method="POST" id="myForm">
		 		<div class="row">
		 			<div class="col-md-3"> 	
		 				<img class='profilePicture' src="./images/me.jpg" alt="profile_picture">
		 			</div>
		 			<div class="col-md-9 upperform">
		 				<div class="row">
		 					<div class="col-md-4">
		 						<input type="text" name="firstName" placeholder="Your first name">
		 					</div>
		 					<div class="col-md-4">
		 						<input type="text" name="middleName" placeholder="Your middle name">
		 					</div>
		 					<div class="col-md-4">
		 						<input type="text" name="lastName" placeholder="Your last name">
		 					</div>
		 				</div>
		 				<div class="row">
		 					<div class="col-md-4">
		 						<input type="number" name="mobileNumber" placeholder="Your mobile number">
		 					</div>
		 					<div class="col-md-4">
		 						<input type="number" name="phoneNumber" placeholder="Your phone number">
		 					</div>
		 					<div class="col-md-4">
		 						<input type="number" name="faxNumber" placeholder="Your fax number">
		 					</div>
		 				</div>
		 				<div class="row">
		 					<div class="col-md-6">
		 						<input type="email" name="email" placeholder="Your Email">
		 					</div>
		 					<div class="col-md-6">
		 						<input type="email" name="website" placeholder="Your website">
		 					</div>
		 				</div>
		 			</div>
		 		</div>
		 		<div class="row">


		 			<textarea name="aboutYourself" cols="30" rows="10" placeholder=" Something about yourself"></textarea>
		 		</div>
		 		<div class="row">
		 			<div class="col-md-3">
		 				<input type="date" name="birthdate" value="1996-01-15" min="1989-01-01" max="2018-12-31">
		 			</div>
		 			<div class="col-md-3">
		 				<select name="sex">
		 					<option value="">Select your gender</option>
		 					<option value="male">Male</option>
		 					<option value="female">Female</option>
		 					<option value="female">Other</option>
		 				</select>
		 			</div>
		 			<div class="col-md-3">
		 				<input type="text" name="languageSpoken" placeholder="Languages you can speak" >
		 			</div>
		 			<div class="col-md-3">
		 				<input type="text" name="nationality" placeholder="Your nationality">
		 			</div>
		 		</div>
	 			<div class="row mt-3">
	 				<div class="col-md-12">
	 				<h4>Hobbies:-</h4>
	 				</div>
	 			</div>	 		
		 		<div class="row mb-3">
		 			<div class="col-md-12">
		 				<input type="checkbox" name="hobby[]" value="photography"><span>photography</span>
		 			</div>
		 		</div>	 		
		 		<div class="row mb-3">
		 			<div class="col-md-12">
		 				<input type="checkbox" name="hobby[]" value="3Dpainting"><span>3Dpainting</span>
		 			</div>
		 		</div>	 		
		 		<div class="row mb-3">
		 			<div class="col-md-12">
		 				<input type="checkbox" name="hobby[]" value="Karata"><span>Karata</span>
		 			</div>
		 		</div>	 		
		 		<div class="row mb-3">
		 			<div class="col-md-12">
		 				<input type="checkbox" name="hobby[]" value="Robot combat"><span>Robot combat</span>
		 			</div>
		 		</div>	 		
		 		<div class="row mb-3">
		 			<div class="col-md-12">
		 				<input type="checkbox" name="hobby[]" value="Listening to music"><span>Listening to music</span>
		 			</div>
		 		</div>	 		
		 		<div class="row mb-3">
		 			<div class="col-md-12">
		 				<input type="checkbox" name="hobby[]" value="Fantasy sports"><span>Fantasy sports</span>
		 			</div>
		 		</div>

		 		<input type="submit" name="submit">
		 	</form>
	 	</fieldset>
	 </div>

	<?php include_once './include/footerLink.php'; ?>
</body>
</html>