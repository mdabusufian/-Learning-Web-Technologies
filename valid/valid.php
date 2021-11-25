<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Form</title>
</head>
<body>



<h1>Form</h1>



<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

First Name: * <input type="text" name="firstname"  required value="">
<br><br>



Last Name: * <input type="text" name="lastname" required value=" " >
<br><br>



<input type="submit" name="submit">
</form>



<br>



<?php

		echo "<br>";
		echo "<br>";

		echo "METHOD: " . $_SERVER['REQUEST_METHOD'];
		echo "<br>";
		echo "<br>";

	var_dump($_POST);
	echo "<br>";
		echo "<br>";


if ($_SERVER['REQUEST_METHOD'] === "POST") {

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];



if (empty($fname) or empty($lname)) {
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