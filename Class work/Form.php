<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form</title>
</head>
<body>

	<h1>Form</h1>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
		First Name: * <input type="text" name="firstname" value="<?php echo $_POST['firstname']??""; ?>">
		<br><br>

		Last Name: * <input type="text" name="lastname" value="<?php echo $_POST['lastname']??""; ?>">
		<br><br>

		<input type="submit" name="submit">
	</form>

	<br>

	<?php 
		if ($_SERVER['REQUEST_METHOD'] === "POST") {
			
			$fname = $_POST['firstname'];
			$lname = $_POST['lastname']; 

			if (empty($fname)) {
				echo "Please fill up the form properly";
			}
			else {
				echo "First Name is: " . sanitize($fname);	
				echo "<br>";
				echo "<br>";
				echo "Last Name is: " . sanitize($lname);
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