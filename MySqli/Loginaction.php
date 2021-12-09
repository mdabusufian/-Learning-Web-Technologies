<?php
		$hostname = "localhost";
    	$username = "root";
    	$password = "";
    	$database = "test";

    	$con = new mysqli($hostname, $username, $password, $database);

		if ($_SERVER['REQUEST_METHOD'] === "POST" ) 	
		{
		 

		 $user = $_POST["username"] ;
		 $pass = $_POST["pass"];
			
			$sql = "SELECT * FROM registration WHERE username= '$user' AND pass = '$pass'  ";
			$stmt = $con->prepare($sql);

			$stmt->execute();

            $result = $stmt->get_result();

           

            $data=$result->fetch_assoc();

		

			if($data)
			{
				echo "login successful";
			}
			else 
			{
				echo "Login error";
			}
	}

?>