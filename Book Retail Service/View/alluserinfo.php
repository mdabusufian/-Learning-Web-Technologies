<?php
session_start();
if (count($_SESSION)===0)
{
header("location: ../Controller/logout.php");
}
?>


<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>

    #userF {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#userF td, #userF th {
  border: 2px solid #5F9EA0;
  padding: 8px;
}

#userF tr:nth-child(even){background-color: #D3D3D3;}
#userF tr:nth-child(odd){background-color: #ADD8E6;}

#userF tr:hover {background-color: #5F9EA0;}

#userF th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #A52A2A;
  color: white;
}

        body {
  background-image: url('Image/image2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100% 100%;
}

        hr.new1 {
  border: 4px solid green;
  border-radius: 5px;
}

        hr.new2 {
  border: 2px solid green;
  border-radius: 3px;
}



body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}


</style>

</head>

<body>
  <?php

include '../Controller/adminheader.php';

?>
  <br>
  <hr class="new1">
  <h1 style="text-align:center;">All User Information</h1>
  <hr class="new1">


  <br><br>
<form class="example" action=" " style="margin:auto;max-width:300px">
  <input type="text" placeholder="Search.." name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
  <br><br>

  <table id="userF">

            <tr>
                <th><center>Username</center></th>
                <th><center>Name</center></th>
                <th><center>Date Of Birth</center></th>
                <th><center>Email Id</center></th>
                <th><center>Address</center></th>

            </tr>

 <?php

                $hostname = "localhost";

                $username = "root";

                $password = "";

                $database = "project";

                $con = new mysqli($hostname, $username, $password, $database);

                $sql = "SELECT username,name,dob,email,address FROM registration ";

                $stmt = $con->prepare($sql);

                $stmt->execute();

                $result = $stmt->get_result();

                $data=$result->fetch_assoc();


                if ($result->num_rows > 0) {

                    while($row = $result->fetch_assoc()) {

                        ?>
                 <tr>
                    <td><center>
                      
                      <?php echo $row['username']?>
                        
                      </center></td>

                      <td><center>
                      
                      <?php echo $row['name']?>
                        
                      </center></td>

                      <td><center>
                      
                      <?php echo $row['dob']?>
                        
                      </center></td>

                      <td><center>
                      
                      <?php echo $row['email']?>
                        
                      </center></td>

                      <td><center>
                      
                      <?php echo $row['address']?>
                        
                      </center></td>
                </tr>
 <?php
                    }
                }

 ?>
 </table>
</body>

</html>