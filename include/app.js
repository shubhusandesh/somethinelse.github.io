$(document).ready(function(){
	let data =  window.location.href;
	console.log(data);
	let getData=()=>{
		$.ajax({
			url: './include/dir.php',
			method: 'post',
			data: {url:data},
			success: function(response){
				
				let directories = JSON.parse(response);
				$(directories).each(function(index,dirName){
					let html=`<div class="card" style="width: 200px;">
								  <img class="card-img-top folderImg"src="./images/folder.png" alt="Card image cap">
								  <div class="card-body">
								    <p class="card-text">${dirName}</p>
								  </div>
								</div>`;
						$('.folders').append(html);

				});
			},
			error: function(err){
				
			}	
		})
	}	
	getData();

	$(document).on('click','.card',function(e){
		let name= $(this).children().eq(1).children().eq(0).html();
		let openUrl = 'http://localhost:5000/'+name;
		window.open(openUrl, '_blank');
	})

	$('#refresh').on('click', function(e){
		e.preventDefault();
		$('.folders').empty();
		getData();
	})

});