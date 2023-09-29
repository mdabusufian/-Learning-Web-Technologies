<?php
session_start();
if (count($_SESSION)===0) 
{
	header("location: ../controller/logout.php");
}


if ($_SERVER['REQUEST_METHOD'] === 'POST')    

{ 
        	$con = $_POST['code'];
        
        	if ($con == $_SESSION['code'])
        	{
        		$message= "Thank You ! Varification successful";
               echo "<script type='text/javascript'>alert('$message');window.location = '../view/PasswordUpdate.php';</script>";

        	}
        	else 
        	{
        		session_unset();
				session_destroy();
        		$message= "Varification code did not match, Please try Again";
               echo "<script type='text/javascript'>alert('$message');window.location = '../view/login.php';</script>";

        	}
        
}


