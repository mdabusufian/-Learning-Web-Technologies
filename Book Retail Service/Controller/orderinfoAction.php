<?php
session_start();
if (count($_SESSION)===0) 
{
	header("location: ../controller/logout.php");
}


if ($_SERVER['REQUEST_METHOD'] === 'POST')    

{ 
        	$odid = $_POST['odid'];
        	
        	$ss = 'Complete';


        $hostname = "localhost";
    	$username = "root";
    	$password = "";
    	$database = "project";

    	$con = new mysqli($hostname, $username, $password, $database);


$sql = "SELECT * FROM cartndel WHERE odid ='$odid' ";
            $stmt = $con->prepare($sql);
            $stmt->execute();
            $result = $stmt->get_result();      
            $data=$result->fetch_assoc();

            if($data)

            {
                

$sql1 = "UPDATE cartndel set dstatus = '$ss' where odid ='$odid' ";

$data1 =$con->query($sql1);


if ($data1 === true)


    	/*$sql = "UPDATE delivary set sstatus = '$ss' where dbid ='$dbid' and salary ='$salary' ";

    	$data =$con->query($sql);

         if ($data === TRUE )*/
         {

            $message= "Delivery Request Has Been Sent To Delevry Person !";
               echo "<script type='text/javascript'>alert('$message');window.location = '../view/orderinfo.php';</script>";


          
         }
         else
         {

          $message= "Order ID Not Found ! ";
            echo "<script type='text/javascript'>alert('$message');window.location = '../view/orderinfo.php';</script>";
         }
}
else
{
	$message= "Order ID Not Found ! ";
            echo "<script type='text/javascript'>alert('$message');window.location = '../view/orderinfo.php';</script>";
}
}

?>