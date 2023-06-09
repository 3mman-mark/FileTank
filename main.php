<!DOCTYPE html>
<html>
<head>
	<title>FileTank</title>
	<link rel="icon" type="x-icon" href="favicon.ico">
	<style type="text/css">
		body{
			background-color: slateblue;
			color: wheat;
			font-family: arial, helvetica, sans-serif;
			margin: 0 auto;
		}
		#main{
			font-size: 24px;
			font-family: cursive;
			text-align: justify;
			padding: 8px;
		}
		button{
			font-size: 20px;
			padding: 10px;
			border-radius:20px;
			margin: 5px;
			background-color: coral;
			color: white;
		}
		header{
			background-color: tomato;
			color: wheat;
			display: flex;
			flex-direction: row;
			justify-content: space-around;
			align-items: center;
		}
		header h1{
			color: gold;
			font-family: algerian;
			align-items: center;
			text-shadow: 2px 1px white;
		}
		header nav{
			display: flex;
			flex-direction: row;
			justify-content: space-between;
			width: 60%;
			font-size: 20px;
			align-items: center;
		}
		header nav a{
			text-decoration: none;
			color: white;
		}
		header h1 a{
			cursor: default;
			text-decoration: none;
			color: inherit;
		}
		#logbtn{
			margin-left: 10px;
			cursor: pointer;
		}
		#logbtn button{
			cursor: pointer;
		}
		header nav a:hover{
			color: yellow;
		}
		small{
			font-size: 18px;
		}
		#slide{
			height: 500px;
			background-color: tomato;
			border: 2px solid gold;
		}
		#popUp{
			display: none;
			width: 100%;
			height: 100%;
			position: fixed;
			padding: 300px 250px;
			background-color: rgba(20,20,20,0.7);
			margin: auto;
		}
		button, input[type = submit], input[type = button]{
			font-size: 20px;
			padding: 10px;
			border-radius:20px;
			margin: 5px;
			background-color: coral;
			color: white;
		}
		#fileSpaceOuter{
			padding: 8px;
			margin-bottom: 5px;
			background-color: tomato;
		}
		#message{
			background-color: wheat;
			border: 8px double darkorange;
			box-shadow: 1px 1px #aaa;
			display: inline;
			font-size: 2.4rem;
			color: darkorange;
			font-family: castellar;
			padding: 20px 10px;
			border-radius: 30px;
		}
		#pricing{
			display: grid;
			grid-template-columns: 1fr 1fr 1fr;
			grid-template-areas: 
			'head head head'
			'one two three';
			grid-gap: 5px;
			color: brown;
			text-align: justify;
		}
		#pricing nav{
			background-color: wheat;
			border: 2px solid darkorange;
			padding: 5px;
		}
		#pricing nav h2{
			color: darkgoldenrod;
			text-align: center;
		}
		#pricing nav h3 u{
			color: green;
		}
		#pricing nav small{
			font-size: 16px;
		}
	</style>
	<link rel="icon" type="image" href="image.jpg">
</head>
<body>
	<?php
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			$fname = $_POST["fname"];
			$lname = $_POST["lname"];
			$email = $_POST["email"];
			$psw = $_POST["psw"];
		}
	?>
	<div id="popUp"><h2 id="message">FileTank welcomes you, <span style="text-transform: capitalize;"><?php echo $fname;?></span></h2></div>
	<header>
		<h1><a href="index.php">FileTank</a></h1>
		<nav>
			<a href="main.php" style="color: gold;">Home</a>
			<a id="files">Your Files</a>
			<a href="index.php"  id="logbtn"><button>Go Back To Login Page</button></a>
		</nav>
	</header>
	<div id="main">
		FileTank is an effective cloud-like storage system which allows you to access your files and other data from other computers. FileTank offers a variety of packages to choose from with, very nice benefits of each of them. We offer you a Demo Version of the software so that you can see what we're made of.
	</div>
	<div id="filepage"style="display: none;">
		<div id="fileSpaceOuter" >
			<h3>Hello <?php echo $fname;?>. These are the files you have stored since you have joined us</h3>
			<div id="fileSpaceInner">
			<iframe src="uploads/" width="100%" height="300px"></iframe>
			</div>
			<h3>You can add any files by pressing the "Choose File" button below.</h3>
			<form action="upload.php" method="post" enctype="multipart/form-data" id="getfiles">
			  Select file to upload:
			  <input type="file" name="fileToUpload" id="fileToUpload" style="font-size: 24px">
			  <input type="submit" value="Upload File" name="submit" id="upload">
			</form>
		</div>
		Can't find your uploaded files, <?php echo $fname; echo ' '; echo $lname;?>? Right click the frame and <b>reload or refresh it</b>
	</div>
	<div id="slide">
		
	</div>
	
</body>
<script type="text/javascript">
	let popUp = document.getElementById('popUp'); // Popup Modal
	// Function That Displays Pop Up
		function popIn(){
			popUp.style.display = 'block';
		}
		setTimeout(popIn, 1500); // Timeout for above function
	//Function That Hides Pop Up
		function popOut(){
			popUp.style.display = 'none';
		}
		setTimeout(popOut, 5000); // Timeout to activate above function after 5s
	// Click Anywhere and the popup will automatically disappear
		document.onclick = () => {
			popOut(); 
		}

	let main, files, filepage;
	main = document.getElementById('main');
	files = document.getElementById('files');
	filepage = document.getElementById('filepage');

	files.onclick = function() {
		filepage.style.display = 'block';
		main.style.display = 'none';
	}
		
	
</script>
</html>