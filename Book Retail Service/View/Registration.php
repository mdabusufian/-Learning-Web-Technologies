<?php

include '../Controller/header.php';

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Registration</title>

<script type="text/javascript">
function validateForm() {

let a = document.forms["reg"]["name"].value;
let b = document.forms["reg"]["gender"].value;
let c = document.forms["reg"]["dob"].value;
let d = document.forms["reg"]["add"].value;
let e = document.forms["reg"]["mail"].value;
let f = document.forms["reg"]["username"].value;
let g = document.forms["reg"]["pass"].value;

if (a == "" && b == "" && c == "" && d == "" && e == "" && f == "" && g == "")
{
alert( "Empty submission");
return false;
}

else if (a== "")
{
alert("Name is empty");
return false;
}
else if (b== "")
{
alert("Gender is not selected");
return false;
}
else if (c== "")
{
alert("Date of birth is not given");
return false;
}
else if (d== "")
{
alert("Address is empty");
return false;
}
else if (e== "")
{
alert("Email is empty");
return false;
}
else if (f== "") {
alert("Username is empty");
return false;
}
else if (g== "")
{
alert("Password is empty");
return false;
}

}

</script>

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password], input[type=email], input[type=date] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

		<form name = "reg" action="../Controller/RegiAction.php" onsubmit="return validateForm()" method="POST">
			<div class="container">

	    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>


		<b> Name: </b><input class="form-control" type="text" name="name" placeholder="Name" >

		<b> Choose your Gender : </b>
		<input type="radio" name="gender" value="Male" >
		Male
		<input type="radio" name="gender" value="Female" >
		Female
		<input type="radio" name="gender" value="other" >
		Other
		<br><br>

		<b>Date of birth:  </b><input class="form-control" type="date" name = "dob" >
		<br><br>


		<b>Address: </b><input class="form-control" type="text" name ="add" placeholder="Address" >
		<br><br>

		<b>Email:  </b><input class="form-control" type="email" name ="mail" placeholder="E-mail" >
		<br><br>

		<b>Username:  </b><input class="form-control" type="text" name="username" placeholder="User name" >

		<b>Password:  </b><input class="form-control" type="password" name="pass" placeholder="Password" >

    <p>By creating an account you agree to our <a href="TermsNpri.php">Terms & Privacy</a>.</p>

		<button type="submit" class="registerbtn">Register</button>
  </div>
  
</form>

</body>
</html>
