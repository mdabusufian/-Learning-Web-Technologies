<?php
session_start();
if (count($_SESSION)===0) 
{
	header("location: ../controller/logout.php");
}


if ($_SERVER['REQUEST_METHOD'] === 'POST')    

{ 
        	$dbid = $_POST['dbid'];
        	$salary = $_POST['salary'];
        	$ss = 'yes';


        $hostname = "localhost";
    	$username = "root";
    	$password = "";
    	$database = "project";

    	$con = new mysqli($hostname, $username, $password, $database);


$sql = "SELECT * FROM delivary WHERE dbid ='$dbid' ";
            $stmt = $con->prepare($sql);
            $stmt->execute();
            $result = $stmt->get_result();      
            $data=$result->fetch_assoc();

            if($data)

            {
                

$sql1 = "UPDATE delivary set sstatus = '$ss' where dbid ='$dbid' and salary ='$salary' ";

$data1 =$con->query($sql1);


if ($data1 === true)


    	/*$sql = "UPDATE delivary set sstatus = '$ss' where dbid ='$dbid' and salary ='$salary' ";

    	$data =$con->query($sql);

         if ($data === TRUE )*/
         {

            $message= "Salary Has Been Sent !";
               echo "<script type='text/javascript'>alert('$message');window.location = '../view/salarydis.php';</script>";


          
         }
         else
         {

          $message= "Data Not Found ! ";
            echo "<script type='text/javascript'>alert('$message');window.location = '../view/salarydis.php';</script>";
         }
}
else
{
	$message= "Data Not Found ! ";
            echo "<script type='text/javascript'>alert('$message');window.location = '../view/salarydis.php';</script>";
}
}

?>