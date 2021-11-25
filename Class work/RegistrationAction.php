<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Action</title>
</head>
<body>

	<h1>Registration Action</h1>

	<?php 

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];

			if (empty($firstname) or empty($lastname)) {
				echo "Please fill up the form properly";
			}
			else {
				$firstname = validate($firstname);
				$lastname = validate($lastname);

				$handle = fopen("data.json", "a");
				$arr1 = array('firstname' => $firstname, 'lastname' => $lastname);
				$arr1 = json_encode($arr1);
				fwrite($handle, $arr1 . "\n");

				echo "Registration Successful";
			}
		}

		function validate($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>

</body>
</html>