<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image" href="signin.ico">
	<title>FileTank - Sign-up or Sign-in</title>
	<style type="text/css">
		body{
			background-color: slateblue;
			color: wheat;
			font-family: arial, helvetica, sans-serif;
			margin: 0 auto;
		}
		#modal{
			background-color: rgba(60,60,60,0.3);
			width: 100%;
			height: 70vh;
			padding: 10% 20%;
		}
		form{
			background-color: tomato;
			color: white;
			box-shadow: 3px 3px lightgray;
			display: flex;
			flex-direction: column;
			justify-content: space-around;
			text-align: center;
			border-radius: 25px;
			width: 60%;
		}
		label{
			margin: 5px;
			font-size: 28px;
			display: flex;
			flex-direction: row;
			justify-content: space-between;
			align-items: center;
			text-align: left; 
		}
		label input{
			width: 80%;
			height: 40px;
			font-size: 24px;
		}
		/* Style all input fields */
		input {
		  width: 100%;
		  padding: 12px;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
		  margin-top: 6px;
		  margin-bottom: 16px;
		}

		/* Style the submit button */
		input[type=submit] {
		  background-color: #04AA6D;
		  color: white;
		}

		/* Style the container for inputs */
		.container {
		  background-color: #f1f1f1;
		  padding: 20px;
		}

		/* The message box is shown when the user clicks on the password field */
		#message {
		  display: block;
		  background: #f1f1f1;
		  color: #000;
		  position: relative;
		  padding: 20px;
		  margin-top: 10px;
		}

		#message p {
		  padding: 10px 35px;
		  font-size: 18px;
		}

		/* Add a green text color and a checkmark when the requirements are right */
		.valid {
		  color: green;
		}

		.valid:before {
		  position: relative;
		  left: -35px;
		  content: "&times;";
		}

		/* Add a red text color and an "x" icon when the requirements are wrong */
		.invalid {
		  color: red;
		}

		.invalid:before {
		  position: relative;
		  left: -35px;
		  content: "&#10006;";
		}
		button{
			font-size: 20px;
			padding: 10px;
			border-radius: 0px 0px 0px 20px;
			margin: 5px;
			width: 100%;
		}
		#message{
			border-radius: 0 20px 20px 0;
			margin: 5px;
		}
	</style>
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");


// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

</script>
<style type="text/css">
	form{
		display: flex;
    	flex-direction: row;
    	justify-content: flex-end;
	}
</style>
</head>
<body>
	<div id="modal">
		<form method="POST" action="index.php">
			<nav id="innerModal">
				FileTank is a storage or cloud-like web app used to store and keep files.
				<h1>Sign Up/Sign In</h1>
				<label><span>Name:</span><input type="text" name="fname" required="true" placeholder="First Name" style="width: 170px"> <input type="text" name="lname" placeholder="Last Name" autocomplete style="width: 170px"></label>
				<br>
				<br><br>
				<label><span>Email:</span><input type="email" name="email" required="true"></label>
				<br><br><br>
				<label><span>Password:</span><input type='password' name="psw" id="psw" required="true" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" autocomplete></label>
				<input type="submit" placeholder="Welcome">
			</nav>
			<nav id="message">
  				<h3>Password must contain the following:</h3>
  				<p id="letter">A <b>lowercase</b> letter</p>
  				<p id="capital">A <b>capital (uppercase)</b> letter</p>
  				<p id="number">A <b>number</b></p>
  				<p id="length" >Minimum <b>8 characters</b></p>
			</nav>
			<br><br><br>
			
			
		</form>
		<?php
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			$fname = $_POST["fname"];
			$lname = $_POST["lname"];
			$email = $_POST["email"];
			$psw = $_POST["psw"];
		}
		
		?>
		<script type="text/javascript">
			let submit = document.getElementById('btn');
			submit.onclick = function(){
				alert('Terms and Conditions are that if you close the last page you need to sign in again.')
			}