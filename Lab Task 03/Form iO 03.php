<?php
include 'header.php';
?>
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
    <input type="radio" name="gender" value="male" >
    Male
    <input type="radio" name="gender" value="female">
    Female
    <input type="radio" name="gender" value="other">
    Other
   <br><br>




		Date of birth: * <input type="date" name = "dob" >
		<br><br>

        Religion *
		 <select name="rel" id="rel" >
    <option value="">None</option>
    <option value="islam">Islam</option>
    <option value="hindu">Hindu</option>
    <option value="boddho">Boddho</option>
    <option value="chris">Christian</option>
  </select>


	</fieldset>
	<br>

			<fieldset>
				<legend>Contact Information</legend>
				<br>

		Present Address: <input type="text" name ="add" value="">
		<br><br>

	    Permanent Address:  <input type="text" name="padd" value="">
		<br><br>

	    Phone Number: <input type="tel" name ="phn" value="">
		<br><br>

		Email: * <input type="email" name ="mail">
		<br><br>

		Personal Website Link: <input type="url" name="prlink" value="">
		<br><br>


	</fieldset>
    <br>


	   <fieldset>
				<legend>Account Information</legend>
				<br>

		Username: * <input type="text" name="name"  value="">
		<br><br>

	    Password: * <input type="password" name="pass"  value="">
		<br><br>
	

    </fieldset>
    <br>
	
	<input type="submit" name="Submit">
	</form>
	<br><br>

    
    <?php


		echo "<br>";
		echo "<br>";


		if ($_SERVER['REQUEST_METHOD'] === "POST") 
	{

		$fname = $_POST['firstname'];
		$lname = $_POST['lastname'];
		$dob = $_POST['dob'];
		$gender = $_POST['gender'];
		$rel = $_POST['rel'];
		$add = $_POST['add'];
		$padd = $_POST['padd'];
		$mail = $_POST['mail'];
		$phn = $_POST['phn'];
		$prlink = $_POST['prlink'];
		$name = $_POST['name'];
		$pass = $_POST['pass'];


		if (empty($fname) || empty($lname) || empty($dob) || empty($gender) || empty($rel) || empty($mail) || empty('username') || empty('$pass'))
			{
				echo "Please fill up the form properly";
		}

		else 
		{
			    $fname = validate($fname);
				$lname = validate($lname);
				$dob = validate($dob);
				$gender = validate($gender);
				$rel = validate($rel);
				$add = validate($padd);
				$mail = validate($phn);
				$prlink = validate($prlink);
				$name = validate($name);
				$pass = validate($pass);

				$handle = fopen("data.json", "a");
				
				$arr1 = array('firstname' => $fname, 'lastname' => $lname, 'dob' => $dob, 'gender' => $gender, 'rel' => $rel, 'add' => $add, 'padd' => $padd, 'mail' => $mail, 'phn' => $phn, 'prlink' => $prlink, 'name' => $name, 'pass' => $pass );

				$arr1 = json_encode($arr1);
				fwrite($handle, $arr1 . "\n");
			
			header("Location: login.php");
			

		}
	}

function validate($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>

 <?php
    include 'footer.php';
    ?>

</body>
</html>


