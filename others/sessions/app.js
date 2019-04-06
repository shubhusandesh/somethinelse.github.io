 $(document).ready(function(){

 	let message= (status) =>{
 		
 		if(status){
 			$('.message').html('<p>Registered successfully!</p>');
 		}else{
 			$('.message').html('<p>Error while registering!!!</p>').addClass('error');
 		}
 		$('.message').show(300);
 	}
 	let hideMessage = ()=> setTimeout(()=> $('.message').empty().hide(300),3000); 
 	
 	$('#register').on('click',function(e){
 	let data = $('.form').serializeArray();

 	console.log(data);
 	 $.ajax({
 	 	url: 'register.php',
 	 	method: 'post',
 	 	data: data,
 	 	success: function(response){
 	 		message(true);
 	 		hideMessage();

 	 	},
 	 	error: function(err){
 	 		message(false);
 	 		hideMessage();
 	 	}
 	 })

 })

 	$('#submit').on('click',function(e){
 		e.preventDefault();

 		let data= $(this).parent().serializeArray();

 		$.ajax({
 			url: 'login.php',
 			method: 'GET',
 			data: data,
 			success: function(response){
 				console.log(response);

 				$('.loginInfo').html(response);
 				hideMessage();
 			},	
 			error: function(err){
 				console.log(err);
 			}
 		})

 	})
 });
 
