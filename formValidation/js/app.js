$(document).ready(function(){


	

	$( document ).on( "click",'input[name="submit"]', function(e) {
		e.preventDefault();
		let data = $('#myForm').serializeArray();
		 $.ajax({
		 url: "data.php",
		 method: "POST",
		 data:data,
		 success:function(data)
		 {
		  alert('successful');// data is the return value from input.php
		  $.ajax({url: "read.php", method:'get', success: function(result){
		    let data= JSON.parse(result);
		    let html='<button class="btn btn-primary goBack"> Go Back</button> <div class="flexIt">';
		    $(data).each(function(i,single){
		    	console.log;
		    	html+=`<div class="card" style="width: 18rem; margin-top: 20px;">
					  <img class="card-img-top" src="https://robohash.org/${i}" alt="Card image cap">
					  <div class="card-body">
					    <h4 class="card-title text-primary">${single.name}</h4>
					    <p class="card-text"><h5 class='text-secondary'>Mobile:</h5> ${single.mobileNumber}</p>
					    <p class="card-text"><h5 class='text-secondary'>Phone:</h5> ${single.phoneNumber}</p>
					    <p class="card-text"><h5 class='text-secondary'>Fax:</h5> ${single.faxNumber}</p>
					    <p class="card-text"><h5 class='text-secondary'>Email:</h5> ${single.email}</p>
					    <p class="card-text"><h5 class='text-secondary'>Website:</h5> ${single.website}</p>
					    <p class="card-text"><h5 class='text-secondary'>About:</h5> ${single.aboutYourself}</p>
					    <p class="card-text"><h5 class='text-secondary'>Birthdate:</h5> ${single.birthdate}</p>
					    <p class="card-text"><h5 class='text-secondary'>Gender:</h5> ${single.gender}</p>
					    <p class="card-text"><h5 class='text-secondary'>Languages:</h5> ${single.languages}</p>
					    <p class="card-text"><h5 class='text-secondary'>Nationality:</h5> ${single.nationality}</p>
					    <p class="card-text"> <h5 class='text-secondary'> Hobbies</h5>`;
			$(single.hobbies).each(function(index, hobby){
				html += `${hobby} <br> `
			})
			html+= `</p>
					  </div>
					</div>`

		})
		    html+=	'</div>'
		   
		    $('.mainContainer').html(html);
		  }});




		  }
		  });
		
	});

	$( document ).on( "click", ".goBack", function(e) {
				console.log('hello');

		e.preventDefault();
		console.log('here');
		 $.ajax({url: "index.php",
		  success: function(result){
		  form = $(result).children('.backHtml');
		  $('.mainContainer').html(form);
		}
		})
	});
});