<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Form</title>
</head>
<body>



<h1>Basic Form</h1>



<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">


			<fieldset>
				<legend>Basic Information</legend>
				<br><br>

		First Name: * <input type="text" name="firstname" value="">
		<br><br>

		Last Name: * <input type="text" name="lastname" value="">
		<br><br>

	    Choose your Gender : *
	    <input type="radio" name="gender" value="male" value="">
	    Male
	    <input type="radio" name="gender" value="female">
	    Female
	    <input type="radio" name="gender" value="other">
	    Other
		<br><br>




		Date of birth: * <input type="date" id="dob" >
		<br><br>

		Religion: * <select name=religion id="religion" value=""> 
	    <option value= >Please Select</option>
		<option value= >Muslims</option>
		<option value= >Hindus</option>
		<option value= >Buddhists</option>
		<option value= >Christians</option>
		<option value= >Others</option>
		</select>
		<br><br>


	</fieldset>
	<br>

			<fieldset>
				<legend>Contact Information</legend>
				<br>

		Present Address: *<input type="text" id="psaddress" value="">
		<br><br>

	    Permanent Address: * <input type="text" id="pmaddress" value="">
		<br><br>

	    Phone Number: <input type="tel" id="phone" value="">
		<br><br>

		Email: * <input type="email" id="mail">
		<br><br>

		Personal Website Link: <input type="url" name="Personal Website" id="perweb" value="">
		<br><br>


	</fieldset>
    <br>


	   <fieldset>
				<legend>Account Information</legend>
				<br>

		Username: * <input type="text" name="uname" id="uname" value="">
		<br><br>

	    Password: * <input type="password" name="password" id="pass" value="">
		<br><br>
	

    </fieldset>
    <br>
	
	<input type="submit" name="submit">
	</form>
	<br><br>

    
    <?php


		echo "<br>";
		echo "<br>";

		echo "METHOD: " . $_SERVER['REQUEST_METHOD'];
		echo "<br>";
		echo "<br>";

	var_dump($_POST);
	echo "<br>";
		echo "<br>";

		if ($_SERVER['REQUEST_METHOD'] === "POST") 
	{

			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$gender = $_POST['gender'];
			$dateofbirth = $_POST['dob'];
			$religion = $_POST['religion'];
			$psadd = $_POST['psaddress'];
			$pmadd = $_POST['pmaddress'];
			$pno = $_POST['phone'];
			$email = $_POST['mail'];
			$pweb = $_POST['perweb'];
			$username = $_POST['uname'];
			$password = $_POST['pass'];



		if (empty($firstname) || empty($lastname) || empty($gender) || empty($dateofbirth) || empty($religion) || empty($psadd) || empty($pmadd) || empty($pno) || empty($email) || empty($pweb) || empty($username) || empty($password) ) 
		{
			echo "Please fill up the form properly";
		}

		else 
		{
			echo "Thank You ";
			echo "<br>";
			echo "<br>";

		}
	}



function sanitize($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>
</body>
</html>   