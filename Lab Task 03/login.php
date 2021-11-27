<?php
include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login Page</title>
</head>
<body>


	<h1>Login Details</h1>
	<?php
		$handle = fopen("data.json", "r");
		$data = fread($handle, filesize("data.json"));
		
		echo "<hr>";

		$exploded = explode("\n", $data);
		echo "<hr>";
		$arr1 = array();
		for ($i =0; $i < count($exploded); $i++){

			 $decode = json_decode($exploded[$i]);
			 array_push($arr1, $decode);

		}
	?>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="GET">
     
    
     <fieldset>
				<legend>Account Information</legend>
				<br>

		Username: <input type="text" name="name">
		<br><br>

	    Password: <input type="password" name="pass">
		<br><br>
	

    </fieldset>
    <br>
	
	<input type="Submit" name="Login">
    </form>
	<br><br>

	<hr>

	<?php
		if ($_SERVER['REQUEST_METHOD'] === "GET" & count($_REQUEST) >0) {
			for ($k = 0; $k < count($arr1) -1; $k++){
				if ($arr1[$k]->name === $_GET['name'] and $arr1[$k]->pass === $_GET['pass'] ){
					header("Location: Success.php");

				
			}
			
		}
	}

?>
<?php
    include 'footer.php';
    ?>

</body>
</html>