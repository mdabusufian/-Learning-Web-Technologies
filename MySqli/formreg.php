<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>

</head>
<body>


		<h1>Registration Form</h1>


	<h2><center> Already Registered ?<br> <a href ="login.php"> Click here</a> To Login </center></h2>

	
		<form action="RegiAction.php" method="POST">
		<br><br>
		<h2> <i>Account Information </i>  </h2>
		<br> <p>
		<b>Username:  </b><input type="text" name="username" placeholder="User name"  >
		<br>
		<b>Password:  </b><input type="password" name="pass" placeholder="Password"  >
		
		</p>
		<h2> <i>Basic Information </i> </h2>
		<b>First Name:  </b><input type="text" name="firstname" placeholder="First name"  >
		<br>
		<b>Last Name:  </b><input type="text" name="lastname" placeholder="Last name"  >
		<br>
		<b>Choose your Gender : </b>
		<input type="radio" name="gender" value="Male"  >
		Male
		<input type="radio" name="gender" value="Female">
		Female
		<input type="radio" name="gender" value="other">
		Other
		<br><br>
		Religion : *
  		<select name="rel" id="rel" >
    	<option value="">None</option>
    	<option value="islam">Islam</option>
    	<option value="hindu">Hindu</option>
    	<option value="boddho">Boddho</option>
   		<option value="chris">Christian</option>
  		</select>
  		<br><br>
		<b>Date of birth:  </b><input type="date" name = "dob"   >
		<br>
		<h2> <i>Contact Information </i>  </h2>
		<br>
		<b>Present Address: </b><input type="textarea" name ="add" placeholder="Present Address"  >
		<br>
		<b>Phone Number: </b><input type="tel" name ="phn" placeholder="Phone Number"  >
		<br>
		<b>Email:  </b><input type="email" name ="mail" placeholder="E-mail" >
		<br>
		<b>Personal Website Link: </b><input type="url" name="prlink" placeholder="Personal Website Link" value="">
		<br>
		</p>
		<br>
		<input  type="submit" name="submit" value="Sign Up"> <input  type="reset" name="reset">
		</form>
	
		<br><br>
		
</body>
</html>