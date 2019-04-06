
// fetch('./data.php')
// .then(response => response.json())
// .then(data => {
// 	data.forEach(function(user, index){
// 		let template = `<div> ${user.userId	}</div>
// 						<div> ${user.id}</div>
// 						<div> ${user.title}</div>
// 						<p> ${user.body}</p>`;
// 		let html= document.getElementById('container').innerHTML;
// 		document.getElementById('container').innerHTML = html+template;
// 		})
// });
	let animations =['bounceIn','swing','bounceInRight','rubberBand','pulse','heartBeat','tada','lightSpeedIn','hinge','jello','wooble']
	//function to put the recieved image url.
	let putPicture=(id,image)=>{
		var myDiv = document.createElement('img');
		myDiv.setAttribute('class','images');
		myDiv.setAttribute('src',image);
		myDiv.addEventListener('click',function(e){
			this.setAttribute('class',' animated '+animations[parseInt(10*Math.random())]);
			let el= this;
			setInterval(function(){
				// this.setAttribute('class','images');
				el.setAttribute('class','images');
			}, 3000);
		});
		document.getElementById('container').appendChild(myDiv);
	}
	//fuction to get image url (numberofpictures, idToPasteThePictures, urlToResquestImageUrl)
	let getPics=( IdName, numberOfPic = 1,url='https://source.unsplash.com/random/') =>{
		console.log(IdName, numberOfPic, url);
		for(let i= 0; i< numberOfPic; i++){
			fetch(url)
			.then(data => putPicture(IdName, data.url))
			.catch(err => console.log(err));
		}
	}

// let robo = 'https://robohash.org/';
// getPics(3,'container',robo);
let accessKey = 'f3037f162d07c075e3efcac431c4af680a1ba4a4c8ffd86e8becabe1700ad460';
let secretId = '2b5f956c05b7c81b61ba0b6f23560a61f4a2f734e89099d2cca12031831f8f7b';
document.getElementById('button').addEventListener('click', function(e){

	e.preventDefault();

	let numberOfItems= document.getElementById('number').value;
	(numberOfItems)? getPics('container', numberOfItems): getPics('container');
	// getPics('container', numberOfItems, `https://api.unsplash.com/photos/?client_id=b6b5fdd875d953aa62f8b767a9f3bef7bf8ce4c09c4b696435de478fdf51a3df?query=house`);
});




