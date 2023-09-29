<?php
session_start();
if (count($_SESSION)===0) 
{
	header("location: ../controller/logout.php");
}


if ($_SERVER['REQUEST_METHOD'] === 'POST')    

{ 
		$pass = $_POST['pass'];
		$hostname = "localhost";
    	$username = "root";
    	$password = "";
    	$database = "project";

    	$con = new mysqli($hostname, $username, $password, $database);

    	 $user = $_SESSION['user'] ;
         $email = $_SESSION['email'];

         $sql = "UPDATE registration set pass='$pass' where username ='$user' and email = '$email' ";

         $data =$con->query($sql);

         if ($data === TRUE )
         {
         		session_unset();
				session_destroy();
        		$message= "Password has been updated";
               echo "<script type='text/javascript'>alert('$message');window.location = '../view/login.php';</script>";

         	
         }
         else
         {

         	$message= "Failed updating password";
            echo "<script type='text/javascript'>alert('$message');window.location = '../view/PasswordUpdate.php';</script>";


         }


}