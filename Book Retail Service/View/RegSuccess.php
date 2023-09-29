<?php

include '../Controller/header.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
    	body {
  background-image: url('Image/image2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100% 100%;
}

.btn {
  border: none;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
}

.success {background-color: #04AA6D;} /* Green */
.success:hover {background-color: #46a049;}



.danger {background-color: #f44336;} /* Red */ 
.danger:hover {background: #da190b;}

</style>
</head>
<body>

<br><br>
<h1> Registration Successful ! ! !</h1>
<style> h1 , h2 , p {text-align: center;}</style>

<br>
 
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
 <h2> Do you want to continue ?</h2>

<p><button class="btn success" name="click" type="submit" value="yes">Yes !</button>

<button class="btn danger" name="click" type="submit" value="no">No !</button></p>

<?php
echo "<br>";

if ($_SERVER['REQUEST_METHOD'] === "POST")
	{ 
		$click = $_POST['click'];
		if ( $click === "yes")
		{
			header("Location: login.php");
		}
		else 
		{
			header("Location: registration.php");
		}
	}
	?>

</form>
</body>
</html>