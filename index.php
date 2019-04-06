<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>js(v2)</title>
	<style>
		*{
			margin: 0;
			padding: 0;
			transition: all 300ms ease-in-out;
			font-family: san-serif;
			font-size: 14px;
		}
		body{
			text-align: center;
			padding:10px;
		}
		#container{
			padding: 10px;
			display: flex;
			justify-content: space-around;
			flex-wrap: wrap;
		}
		#container img{
			width: 400px;
			height: 300px;
			border-radius: 3px;
			margin-bottom: 50px;
		}
		#number, #number:focus{
			width: 200px;
			padding: 10px 15px;
			color: black;
			background-color: #cfcfcf;
			border: none;
			border-radius: 3px;
		}

		#number::placeholder{
			color: grey;
			text-align: center;
		}
		#button{
			padding: 10px 15px;
			background-color: orange;
			color: black;
			border: none;
			border-radius: 4px;
		}
		
	</style>
	<link rel="stylesheet" href="./animate.css">
</head>
<body>
	<input type="number" id="number" placeholder="Enter the number of pictures">
	<button id="button">get pictures</button>
	<div id="container">
		
	</div>


	<script src="./app.js"></script>
</body>
</html>