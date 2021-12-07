<?php
		$hostname = "localhost";
    	$Username = "root";
    	$Password = "";
    	$database = "finaltask";

    	$con = new mysqli($hostname, $Username, $Password, $database);

		if ($_SERVER['REQUEST_METHOD'] === "POST" ) 	
		{
		 

		 $user = $_POST["name"] ;
		 $pass = $_POST["pass"];
			
			$sql = "SELECT * FROM registration WHERE Username= '$name' AND Password = '$pass' ";
			$stmt = $con->prepare($sql);
			$stmt->execute();
			$result = $stmt->get_result();

		

			if($result > 0)
			{
				echo "login successfull ! Welcome To our Website !!! ";
			}
			else 
			{
				echo "Login error";
			}
	}

?>