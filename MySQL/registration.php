<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form</title>
</head>

<body>


   <form action="RegiAction.php" method="POST">

   <h3> Already Registered ? <a href ="login.php"> Click here</a> To Login </h3>
		<br><br>
	<h1>
		<p style="text-align:center;">REGISTRATION FORM</p>
	</h1>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">


		<fieldset>
			<legend align="middle">
				<h2><b>Basic Information </h2></b>
			</legend>
			<br>

			First Name: * <input type="text" name="fname" value="">
			<br><br>
			Last Name: * <input type="text" name="lname" value="">
			<br><br>


			Gender: *

			<input type="radio" name="gender" class="gender" value="Male">Male
			<input type="radio" name="gender" class="gender" value="Female">Female
			<input type="radio" name="gender" class="gender" value="Other">Other
			<br><br>




			Date of Birth: * <input type="date" name="dob">
			<br><br>

			Religion *
			<select name="rel" id="rel">
				<option value="">None</option>
				<option value="islam">Islam</option>
				<option value="hindu">Hindu</option>
				<option value="boddho">Boddho</option>
				<option value="chris">Christian</option>
			</select>


		</fieldset>
		<br>

		<fieldset>
			<legend align="middle">
				<h2><b>Contact Information </h2></b>
			</legend>
			<br>

			Present Address: <input type="text" name="add" value="">
			<br><br>

			Permanent Address: <input type="text" name="padd" value="">
			<br><br>

			Phone Number: <input type="tel" name="phn" value="">
			<br><br>

			Email: * <input type="email" name="mail">
			<br><br>

			Personal Website Link: <input type="url" name="prlink" value="">
			<br><br>


		</fieldset>
		<br>


		<fieldset>
			<legend align="middle">
				<h2><b>Account Information </h2></b>
			</legend>
			<br>

			Username: * <input type="text" name="name" value="">
			<br><br>

			Password: * <input type="password" name="pass" value="">
			<br><br>


		</fieldset>
		<br>



		<input type="submit" name="Submit">
		<input type="reset">
	</form>
	<br>