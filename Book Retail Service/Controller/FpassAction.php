<?php 

		$hostname = "localhost";
    	$username = "root";
    	$password = "";
    	$database = "project";

    	$con = new mysqli($hostname, $username, $password, $database);

		if ($_SERVER['REQUEST_METHOD'] === 'POST')    

        {

         



            $user = $_POST["username"] ;

            $email = $_POST["email"];

            if (empty($user) || empty($email))
        {
             $message = "Please Fill All The Filed Properly ";
            echo "<script type='text/javascript'>alert('$message');window.location = '../view/login.php';</script>";
        }

        else
        {
           

            $sql = "SELECT * FROM registration WHERE username='$user' ";

            $stmt = $con->prepare($sql);



            $stmt->execute();

            $result = $stmt->get_result();

           

            $data=$result->fetch_assoc();

       



            if($data)

            {

                $sql1 = "SELECT * FROM registration WHERE username='$user' and email='$email' ";

            $stmt1 = $con->prepare($sql1);



            $stmt1->execute();

            $res = $stmt1->get_result();

           

            $data1=$res->fetch_assoc();

            if ($data1) 
            {
            	
               function gen()
               {
               	$keyLength = 6;
               	$str = "1234567890";
               	$randstr = substr(str_shuffle($str),0, $keyLength);
               	return $randstr;
               }

               $code = gen();

				if (mail($email,"Varrification code",$code))
				{
					$message = "A varification code has been sent to your Email ";
               echo "<script type='text/javascript'>alert('$message');window.location = '../view/fpass1.php';</script>";

               session_start();
               $_SESSION['code']= $code;
               $_SESSION['user']= $user;
               $_SESSION['email']= $email;
				}
				else {echo "Not";}

				 
             


                	
            }
            else
            {
                $message = "Email did not match !!!";
                echo "<script type='text/javascript'>alert('$message');window.location = '../view/login.php';</script>";
            }
            }

            else

            {
                $message = "Username not found !!!";
               echo "<script type='text/javascript'>alert('$message');window.location = '../view/login.php';</script>";
            }

    }
 }

?>